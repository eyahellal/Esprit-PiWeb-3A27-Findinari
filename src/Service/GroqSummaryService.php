<?php

namespace App\Service;

use App\Entity\reclamation\Message;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class GroqSummaryService
{
    public function __construct(
        private HttpClientInterface $httpClient,
        private string $groqApiKey,
        private string $groqModel,
    ) {
    }

    /**
     * @param Message[] $messages
     * @param string $ticketStatus
     * @return array{problem: string, process: string, solution: string, state: string, adaptive_note?: string, error?: string}
     */
    public function summarizeTicket(array $messages, string $ticketStatus): array
    {
        if (empty($messages)) {
            return [
                'problem' => 'N/A',
                'process' => 'N/A',
                'solution' => 'N/A',
                'state' => $ticketStatus,
                'summary' => "This ticket contains no messages yet.",
            ];
        }

        $conversationText = [];
        foreach ($messages as $message) {
            $sender = (string) $message->getTypeSender();
            $content = trim((string) $message->getContenu());
            
            if ($content !== '') {
                $conversationText[] = sprintf('%s: %s', strtoupper($sender), $content);
            }
        }

        $systemPrompt = <<<PROMPT
You are an expert support analyst. Review the provided ticket conversation and provide a structured summary.

Structure requirements (JSON format):
{
"problem": "Clear description of the initial issue",
"process": "Key actions taken or discussed to resolve it",
"solution": "Final resolution achieved (or 'Pending' if not resolved)",
"state": "Current perceived urgency and status from conversation context",
"adaptive_note": "A note if the conversation is unclear or if no real progress was made"
}

Rules:
- If no action was taken, explicitly state it.
- Be concise but professional.
- Return ONLY valid JSON.
- Current Ticket Database Status: {$ticketStatus}
PROMPT;

        try {
            $response = $this->httpClient->request('POST', 'https://api.groq.com/openai/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->groqApiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => $this->groqModel,
                    'temperature' => 0.1,
                    'messages' => [
                        ['role' => 'system', 'content' => $systemPrompt],
                        ['role' => 'user', 'content' => "Conversation:\n" . implode("\n", $conversationText)],
                    ],
                ],
            ]);

            /** @var array{choices: array<int, array{message: array{content: string}}>} $data */
            $data = $response->toArray(false);
            $content = $data['choices'][0]['message']['content'] ?? '';
            
            $decoded = json_decode($content, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                preg_match('/\{.*\}/s', $content, $matches);
                if (isset($matches[0])) {
                    $decoded = json_decode((string)$matches[0], true);
                }
            }

            // On vérifie si $decoded est bien un tableau avant de retourner
            if (is_array($decoded)) {
                /** @var array{problem: string, process: string, solution: string, state: string, adaptive_note?: string} $decoded */
                return $decoded;
            }

            return [
                'error' => 'Failed to parse summary',
                'problem' => 'error',
                'process' => 'error',
                'solution' => 'error',
                'state' => $ticketStatus
            ];
            
        } catch (\Throwable $e) {
            return [
                'error' => 'Summary service unavailable: ' . $e->getMessage(),
                'problem' => 'Service error',
                'process' => 'Service error',
                'solution' => 'Service error',
                'state' => $ticketStatus
            ];
        }
    }
}


