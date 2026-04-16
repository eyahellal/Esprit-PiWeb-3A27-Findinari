<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class GroqReformulationService
{
    public function __construct(
        private HttpClientInterface $httpClient,
        private string $groqApiKey,
        private string $groqModel,
    ) {
    }

    public function formalizeMessage(string $role, string $content): string
    {
        if (trim($content) === '') {
            return '';
        }

        $roleInstruction = match (strtoupper($role)) {
            'ADMIN' => 'You are a professional fintech support agent. Reformulate the following draft into a very professional, clear, and empathetic message for a client.',
            'USER' => 'You are a client of a premium fintech platform. Reformulate the following draft into a polite, clear, and professional request for a support agent.',
            default => 'Reformulate the following message to be more professional and clear.',
        };

        $systemPrompt = <<<PROMPT
{$roleInstruction}

Rules:
- Keep the original meaning exactly the same.
- Improve grammar, tone, and professional vocabulary.
- Return ONLY the reformulated text.
- No conversational filler, no explanations, no quotes around the result.
PROMPT;

        try {
            $response = $this->httpClient->request('POST', 'https://api.groq.com/openai/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->groqApiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => $this->groqModel,
                    'temperature' => 0.3,
                    'messages' => [
                        ['role' => 'system', 'content' => $systemPrompt],
                        ['role' => 'user', 'content' => $content],
                    ],
                ],
            ]);

            $data = $response->toArray(false);
            $reformulated = $data['choices'][0]['message']['content'] ?? '';

            return trim($reformulated) ?: $content;
        } catch (\Throwable $e) {
            return $content; // Return original on error
        }
    }
}
