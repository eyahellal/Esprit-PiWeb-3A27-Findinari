<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class TicketPriorityClassifierService
{
    public function __construct(
        private HttpClientInterface $httpClient,
        private string $groqApiKey,
        private string $groqModel,
    ) {
    }

    /**
     * @return array{priority: string, source: string}
     */
    public function classifyPriority(?string $title, ?string $description): array
    {
        $text = trim(($title ?? '') . ' ' . ($description ?? ''));

        if ($text === '') {
            return ['priority' => 'normal', 'source' => 'default'];
        }

        $localResult = $this->checkKeywordsLocally(mb_strtolower($text));
        if ($localResult !== null) {
            return ['priority' => $localResult, 'source' => 'local_keywords', 'raw' => 'Detected via local keywords'];
        }

        $aiResult = $this->callRemoteAI($text);
        
        // Ensure even "Server Response" messages are treated as errors in the UI
        $isError = str_starts_with($aiResult['raw'], 'Error:') || str_contains($aiResult['raw'], '<!DOCTYPE html>');

        return [
            'priority' => $aiResult['priority'],
            'source' => 'remote_ai',
            'raw' => $aiResult['raw'],
            'is_error' => $isError
        ];
    }

    private function checkKeywordsLocally(string $text): ?string
    {
        if (preg_match('/\b(urgent|asap|emergency|broken|crash|stop|blocker|frustrating|payment failed|security issue|hack|fraud)\b/i', $text)) {
            return 'urgent';
        }

        if (preg_match('/\b(thanks|suggestion|future|maybe|low priority|feature request|nice to have)\b/i', $text)) {
            return 'low';
        }

        return null;
    }

    private function callRemoteAI(string $text): array
    {
        try {
            $trimmed = mb_strlen($text) > 500 ? mb_substr($text, 0, 500) : $text;

            $systemPrompt = "You are a professional support ticket classifier. Classify the ticket priority into exactly one word: 'urgent', 'normal', or 'low'. Return ONLY the word.";
            
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
                        ['role' => 'user', 'content' => "Ticket text: " . $trimmed],
                    ],
                ],
                'timeout' => 15,
            ]);

            $content = $response->getContent(false);
            
            if ($response->getStatusCode() !== 200) {
                 return ['priority' => 'normal', 'raw' => 'Service Error: ' . mb_substr($content, 0, 100)];
            }

            $data = json_decode($content, true);
            $generated = mb_strtolower(trim($data['choices'][0]['message']['content'] ?? ''));

            if (str_contains($generated, 'urgent')) {
                return ['priority' => 'urgent', 'raw' => 'Classified as Urgent'];
            }

            if (str_contains($generated, 'low')) {
                return ['priority' => 'low', 'raw' => 'Classified as Low'];
            }

            return ['priority' => 'normal', 'raw' => 'Classified as Normal'];
        } catch (\Throwable $e) {
            return ['priority' => 'normal', 'raw' => 'Error: ' . $e->getMessage()];
        }
    }

    public function mapToProjectPriority(string $priority): string
    {
        return match ($priority) {
            'urgent' => 'High',
            'low' => 'Low',
            default => 'Medium',
        };
    }
}