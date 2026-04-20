<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class GroqSuggestionService
{
    public function __construct(
        private HttpClientInterface $httpClient,
        private string $groqApiKey,
        private string $groqModel,
    ) {
    }

    public function suggestReplies(string $role, array $lastMessages): array
    {
        $conversationText = [];
        foreach ($lastMessages as $message) {
            $sender = method_exists($message, 'getTypeSender') ? $message->getTypeSender() : 'UNKNOWN';
            $content = method_exists($message, 'getContenu') ? trim((string) $message->getContenu()) : '';
            if ($content !== '') {
                $conversationText[] = sprintf('%s: %s', $sender, $content);
            }
        }

        $roleInstruction = match (strtoupper($role)) {
            'ADMIN' => 'ACT AS: Elite Fintech Support Agent for Fin-Dinari. YOUR GOAL: Provide helpful, expert guidance. NEVER ask for help; always offer it.',
            'USER' => 'ACT AS: Client/Customer of Fin-Dinari. YOUR GOAL: Seek support, ask for updates, or clarify your issues. NEVER offer assistance to the agent.',
            default => 'Formulate concise replies for the current participant.',
        };

        if (empty($conversationText)) {
            $userPrompt = "The conversation has just started. Suggest 3 professional initial messages to start the interaction as the " . $role;
        } else {
            $userPrompt = "Conversation context (Last 5 messages):\n" . implode("\n", $conversationText);
        }

        $systemPrompt = <<<PROMPT
Role-Specific Persona: {$roleInstruction}

Context: You are providing 3 quick-reply suggestions for a chat interface.

Return ONLY valid JSON in this exact format:
{"suggestions":["suggestion 1","suggestion 2","suggestion 3"]}

CRITICAL RULES:
- EXACTLY 3 suggestions.
- MAX 15 words per suggestion.
- PERSPECTIVE: You are the {$role}. You MUST suggest what the {$role} would say next.
- ROLE BOUNDARY: If you are the USER, DO NOT say things like "How can I assist you?" or "I'm here to help". These are ADMIN phrases.
- ROLE BOUNDARY: If you are the ADMIN, DO NOT say things like "I need help" or "I'm reporting a bug". These are USER phrases.
- TONE: High-end fintech, professional, polite, and efficient.
- Ensure the suggestions are direct continuations of the conversation flow.
- DO NOT add markdown or any text outside the JSON.
PROMPT;


        $response = $this->httpClient->request('POST', 'https://api.groq.com/openai/v1/chat/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->groqApiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => $this->groqModel,
                'temperature' => 0.4,
                'messages' => [
                    ['role' => 'system', 'content' => $systemPrompt],
                    ['role' => 'user', 'content' => $userPrompt],
                ],
            ],
        ]);

        $data = $response->toArray(false);
        $content = $data['choices'][0]['message']['content'] ?? '';
        
        if (!is_string($content) || trim($content) === '') {
            return [];
        }

        $decoded = json_decode($content, true);
        
        // Try regex extraction if direct JSON parsing fails
        if (json_last_error() !== JSON_ERROR_NONE) {
            preg_match('/\{.*\}/s', $content, $matches);
            if (isset($matches[0])) {
                $decoded = json_decode($matches[0], true);
            }
        }

        if (!is_array($decoded) || !isset($decoded['suggestions']) || !is_array($decoded['suggestions'])) {
            return [];
        }

        return array_values(array_filter(array_map(
            static fn ($item) => is_string($item) ? trim($item) : '',
            $decoded['suggestions']
        )));
    }
}