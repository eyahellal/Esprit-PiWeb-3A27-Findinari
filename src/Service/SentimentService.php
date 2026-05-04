<?php

namespace App\Service;

use App\Entity\reclamation\Ticket;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class SentimentService
{
    private HttpClientInterface $httpClient;
    private string $apiUrl;

    public function __construct(HttpClientInterface $httpClient, string $apiUrl)
    {
        $this->httpClient = $httpClient;
        $this->apiUrl = $apiUrl;
    }

    /**
     * Analyse les messages d'un ticket et retourne le sentiment global.
     * On prend les 3 derniers messages utilisateur.
     */
    public function getTicketSentiment(Ticket $ticket): array
    {
        $messages = $ticket->getMessages()->toArray();
        
        // Filtrer pour ne garder que les messages de l'utilisateur (cas insensitive)
        $userMessages = array_filter($messages, fn($m) => strtoupper((string)$m->getTypeSender()) === 'USER');
        
        // Prendre les 3 derniers messages utilisateur
        $lastMessages = array_slice($userMessages, -3);
        $messageTexts = array_map(fn($m) => $m->getContenu(), $lastMessages);

        if (empty($messageTexts)) {
            return [
                'label' => 'neutral',
                'score' => 0.5,
                'messages_count' => 0
            ];
        }

        return $this->analyser($messageTexts);
    }

    /**
     * Appelle l'API Flask pour obtenir le sentiment.
     */
    private function analyser(array $messages): array
    {
        try {
            $response = $this->httpClient->request('POST', $this->apiUrl . '/predict', [
                'json' => ['messages' => $messages],
                'timeout' => 2, // Timeout court pour ne pas bloquer l'admin
            ]);

            if ($response->getStatusCode() !== 200) {
                throw new \Exception('API Sentiment error');
            }

            return $response->toArray();
        } catch (\Exception $e) {
            // Fallback en cas d'erreur API (API éteinte, etc.)
            return [
                'label' => 'neutral',
                'score' => 0.5,
                'messages_count' => count($messages),
                'error' => $e->getMessage()
            ];
        }
    }

    /**
     * Vérifie si le service ML est en ligne.
     */
    public function isAvailable(): bool
    {
        try {
            $response = $this->httpClient->request('GET', $this->apiUrl . '/health', [
                'timeout' => 1
            ]);
            return $response->getStatusCode() === 200;
        } catch (\Exception $e) {
            return false;
        }
    }
}