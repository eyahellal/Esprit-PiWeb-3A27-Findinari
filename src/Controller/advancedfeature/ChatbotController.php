<?php

namespace App\Controller\advancedfeature;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ChatbotController extends AbstractController
{
    private $httpClient;
    private $projectDir;
    private $ollamaApiUrl;
    
    public function __construct(HttpClientInterface $httpClient, string $projectDir, string $ollamaApiUrl)
    {
        $this->httpClient = $httpClient;
        $this->projectDir = $projectDir;
        $this->ollamaApiUrl = $ollamaApiUrl;
    }
    
    #[Route('/chatbot', name: 'app_chatbot')]
    public function index(): Response
    {
        return $this->render('chatbot/index.html.twig');
    }
    
    #[Route('/api/chatbot/message', name: 'app_chatbot_message', methods: ['POST'])]
    public function sendMessage(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $userMessage = $data['message'] ?? '';
        
        if (empty($userMessage)) {
            return $this->json(['error' => 'Message is empty'], 400);
        }
        
        // Load knowledge base from data.md
        $knowledgeBase = $this->loadKnowledgeBase();
        
        // Get relevant context based on user question
        $context = $this->getRelevantContext($userMessage, $knowledgeBase);
        
        // Build prompt for LLM
        $prompt = $this->buildPrompt($userMessage, $context);
        
        // Call Ollama API
        $response = $this->callOllama($prompt);
        
        return $this->json([
            'response' => $response,
        ]);
    }
    
    private function loadKnowledgeBase(): string
    {
        $dataFilePath = $this->projectDir . '/templates/chatbot/data.md';
        
        if (file_exists($dataFilePath)) {
            return file_get_contents($dataFilePath);
        }
        
        // Fallback knowledge base if file doesn't exist
        return $this->getFallbackKnowledgeBase();
    }
    
    private function getRelevantContext(string $question, string $knowledgeBase): string
    {
        $questionLower = strtolower($question);
        
        // Define sections and their keywords
        $sections = [
            'wallet' => ['wallet', 'wallets', 'create wallet', 'delete wallet', 'edit wallet', 'budget management', 'portefeuille'],
            'obligation' => ['obligation', 'obligations', 'loan type', 'bond', 'create obligation', 'interest rate', 'duration'],
            'investment' => ['invest', 'investment', 'investments', 'create investment', 'make investment', 'investir', 'investissement'],
            'profit' => ['profit', 'gain', 'interest', 'return', 'profit calculator', 'calcul profit'],
            'maturity' => ['maturity', 'mature', 'maturité', 'end date', 'date fin'],
            'pdf' => ['pdf', 'contract', 'download contract', 'upload pdf', 'invoice', 'facture'],
            'crypto' => ['crypto', 'cryptocurrency', 'bitcoin', 'ethereum', 'btc', 'eth', 'crypto prices'],
            'news' => ['news', 'financial news', 'actualités', 'finance news'],
            'health' => ['health', 'financial health', 'score', 'santé financière', 'health score'],
            'notification' => ['notification', 'notif', 'bell', 'alert', 'notifications'],
            'community' => ['community', 'social', 'group', 'mentor', 'challenge', 'partager', 'communauté'],
            'objective' => ['objective', 'goal', 'objectif', 'but', 'target', 'save', 'économiser'],
            'admin' => ['admin', 'administrator', 'dashboard', 'manage users', 'admin panel'],
            'support' => ['help', 'support', 'aide', 'contact', 'problem', 'issue'],
            'calculator' => ['calculator', 'calculate', 'real-time', 'live', 'calculateur'],
        ];
        
        $relevantSections = [];
        
        foreach ($sections as $section => $keywords) {
            foreach ($keywords as $keyword) {
                if (strpos($questionLower, $keyword) !== false) {
                    $relevantSections[] = $section;
                    break;
                }
            }
        }
        
        // Extract relevant content from knowledge base
        $context = "";
        $lines = explode("\n", $knowledgeBase);
        $currentSection = "";
        $inRelevantSection = false;
        
        foreach ($lines as $line) {
            // Check for section headers (## or ###)
            if (preg_match('/^##+\s+(.+)/', $line, $matches)) {
                $currentSection = strtolower($matches[1]);
                $inRelevantSection = false;
                
                foreach ($relevantSections as $section) {
                    if (strpos($currentSection, $section) !== false) {
                        $inRelevantSection = true;
                        break;
                    }
                }
                // Also include FAQ section for questions
                if (strpos($currentSection, 'faq') !== false || strpos($currentSection, 'frequent') !== false) {
                    $inRelevantSection = true;
                }
            }
            
            if ($inRelevantSection) {
                $context .= $line . "\n";
            }
        }
        
        // If no specific context found, return general info
        if (empty(trim($context))) {
            $context = $this->getGeneralContext($knowledgeBase);
        }
        
        // Limit context length (Ollama has token limits)
        if (strlen($context) > 4000) {
            $context = substr($context, 0, 4000);
        }
        
        return $context;
    }
    
    private function getGeneralContext(string $knowledgeBase): string
    {
        $lines = explode("\n", $knowledgeBase);
        $generalInfo = "";
        $capture = false;
        
        foreach ($lines as $line) {
            if (strpos($line, '## WELCOME MESSAGE') !== false) {
                $capture = true;
            }
            if ($capture) {
                $generalInfo .= $line . "\n";
                if (strpos($line, 'How can I assist you today?') !== false) {
                    break;
                }
            }
        }
        
        if (empty($generalInfo)) {
            $generalInfo = "Fin-Dinari is a complete personal finance ecosystem that allows users to manage wallets, invest in obligations, track investments, download PDF contracts, upload PDF files, view crypto prices, check financial news, monitor financial health, receive notifications, join community groups, and set financial goals.";
        }
        
        return $generalInfo;
    }
    
    private function buildPrompt(string $question, string $context): string
    {
        return <<<PROMPT
You are a friendly, helpful financial assistant for Fin-Dinari. Answer user questions based ONLY on the information provided in the CONTEXT below.

IMPORTANT RULES:
1. Use ONLY the information from the CONTEXT to answer
2. If the answer is not in the CONTEXT, say: "I'm sorry, I don't have information about that. Please check the Fin-Dinari documentation or contact support."
3. Be concise, friendly, and helpful
4. Format your response with clear steps when explaining how to do something
5. Use emojis to make responses engaging (💰, 📈, 💡, ✅, etc.)
6. Keep the response in the same language as the question (English or French)

CONTEXT:
$context

USER QUESTION: $question

YOUR RESPONSE (be helpful and concise):
PROMPT;
    }
    
   private function callOllama(string $prompt): string
{
    try {
        $response = $this->httpClient->request('POST', rtrim($this->ollamaApiUrl, '/') . '/api/generate', [
            'json' => [
                'model' => 'gemma3:1b',
                'prompt' => $prompt,
                'stream' => false,
                'temperature' => 0.3,
            ],
            'timeout' => 60,
        ]);

        $data = $response->toArray();

        return trim($data['response'] ?? 'I apologize, but I encountered an issue generating a response. Please try again.');

    } catch (\Throwable $e) {
        return 'REAL ERROR: ' . $e->getMessage();
    }
}
    
    private function getFallbackKnowledgeBase(): string
    {
        return <<<FALLBACK
# Fin-Dinari Platform Information

## WELCOME MESSAGE
Welcome to Fin-Dinari! I'm your financial assistant. I can help you with creating wallets, investing in obligations, tracking investments, downloading PDF contracts, uploading PDF files, viewing crypto prices, checking financial news, monitoring your financial health score, community features, and setting financial goals.

## WALLET MANAGEMENT
To create a wallet: Go to Services → Budget Management → Create Wallet. Fill in country, balance, and currency.

## INVESTMENT MANAGEMENT
To create an investment: Go to Services → Loan Investment → Browse Obligations → Click Invest on an obligation → Select wallet, enter amount, select date → Click Make Investment.

## PDF CONTRACT
To download a PDF contract: Go to My Investments → View on an investment → Click "DOWNLOAD CONTRACT" button.

## CRYPTO PRICES
To view crypto prices: Go to Pages → Crypto Prices.

## FINANCIAL NEWS
To view financial news: Go to Pages → Financial News.

## FINANCIAL HEALTH SCORE
To check your Financial Health Score: Go to Pages → Financial Health.

## NOTIFICATIONS
Click the bell icon in the top right to see notifications.
FALLBACK;
    }
}