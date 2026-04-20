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
            'ADMIN' => 'You are an elite, highly professional fintech support specialist at Fin-Dinari. Your tone is sophisticated, empathetic, and exceptionally clear. Formulate very polite responses that demonstrate expertise and dedication to quality service.',
            'USER' => 'You are a client of a premium fintech platform. Formulate natural, polite, and professional follow-up questions or clarifications regarding your support request.',
            default => 'Formulate highly professional and concise replies for a support ticket interaction.',
        };

        $userPrompt = empty($conversationText) 
            ? "The conversation has just started. Suggest 3 professional opening greetings or initial help offers for a support chat."
            : "Conversation context:\n" . implode("\n", $conversationText);

        $systemPrompt = <<<PROMPT
{$roleInstruction}

Context: You are providing 3 quick-reply suggestions for a chat interface.

Return ONLY valid JSON in this exact format:
{"suggestions":["suggestion 1","suggestion 2","suggestion 3"]}

Rules for Suggestions:
- exactly 3 suggestions.
- tone: formal, extremely professional, and premium.
- max 15 words per suggestion.
- relevance: must be the most logical continuation for the {$role}.
- if the conversation is empty, suggest standard professional openings.
- no markdown, no quotes, no conversational filler.
- IMPORTANT: You must suggest what the {$role} should say NEXT.
- DO NOT invent information not present in the context
-Provide meaningfull suggestions not just one words
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