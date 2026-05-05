<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class GroqService
{
    private string $apiKey;
    private HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $httpClient, string $groqApiKey)
    {
        $this->httpClient = $httpClient;
        $this->apiKey = $groqApiKey;
    }

    /**
 * @param array<string, mixed> $weatherData
 */
    public function generateRecommendations(array $weatherData): string
    {
        $temp     = $weatherData['main']['temp'];
        $weather  = $weatherData['weather'][0]['description'];
        $humidity = $weatherData['main']['humidity'];
        $wind     = round($weatherData['wind']['speed'] * 3.6);
        $city     = $weatherData['name'];
        $country  = $weatherData['sys']['country'];

        $prompt = "You are a smart financial advisor for a budgeting app called Fin-Dinari. 
Based on the current weather data, give exactly 4 spending recommendations.

Current weather in {$city}, {$country}:
- Temperature: {$temp}°C
- Condition: {$weather}
- Humidity: {$humidity}%
- Wind: {$wind} km/h

Respond ONLY with a valid JSON array of 4 objects. No markdown, no backticks, no explanation.
Each object must have:
- icon: Font Awesome class (e.g. fa-sun)
- color: hex color
- title: short title max 5 words
- text: recommendation 2-3 sentences";

        try {
            $response = $this->httpClient->request('POST', 'https://api.groq.com/openai/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type'  => 'application/json',
                ],
                'json' => [
                    'model'    => 'llama-3.3-70b-versatile',
                    'messages' => [
                        ['role' => 'user', 'content' => $prompt]
                    ],
                    'temperature' => 0.7,
                    'max_tokens'  => 1000,
                ],
            ]);

            $data = $response->toArray();
            $text = $data['choices'][0]['message']['content'];

            // To this:
$text = (string) preg_replace('/```json|```/', '', $text);
return trim($text);
            

        } catch (\Exception $e) {
            // ✅ Fix line 65 — json_encode returns string|false, cast to string
            return (string) json_encode($this->getFallbackRecommendations($temp, $weather));
        }
    }

    public function generateText(string $prompt): string
    {
        try {
            $response = $this->httpClient->request('POST', 'https://api.groq.com/openai/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type'  => 'application/json',
                ],
                'json' => [
                    'model'    => 'llama-3.3-70b-versatile',
                    'messages' => [
                        ['role' => 'user', 'content' => $prompt]
                    ],
                    'temperature' => 0.7,
                    'max_tokens'  => 1000,
                ],
            ]);

            $data = $response->toArray();
            return $data['choices'][0]['message']['content'];

        } catch (\Exception $e) {
            return 'AI service unavailable: ' . $e->getMessage();
        }
    }

    // ✅ Fix line 95 — add array value type annotation
    /**
 * @return array<int, array<string, string>>
 */
    private function getFallbackRecommendations(float $temp, string $weather): array
    {
        $recommendations = [];

        if ($temp > 30) {
            $recommendations[] = [
                'icon'  => 'fa-sun',
                'color' => '#F27438',
                'title' => 'Hot Weather Alert',
                'text'  => 'Budget extra for cold drinks and AC. Consider free indoor activities.'
            ];
        } elseif ($temp > 20) {
            $recommendations[] = [
                'icon'  => 'fa-leaf',
                'color' => '#2d6a4f',
                'title' => 'Pleasant Day',
                'text'  => 'Walk or cycle instead of driving to save on transport.'
            ];
        } else {
            $recommendations[] = [
                'icon'  => 'fa-snowflake',
                'color' => '#2CCED2',
                'title' => 'Cold Weather',
                'text'  => 'Cook warm meals at home to save money.'
            ];
        }

        if (str_contains(strtolower($weather), 'rain')) {
            $recommendations[] = [
                'icon'  => 'fa-umbrella',
                'color' => '#3498db',
                'title' => 'Rainy Day Savings',
                'text'  => 'Stay in and meal prep. Great time for online deal hunting.'
            ];
        } else {
            $recommendations[] = [
                'icon'  => 'fa-piggy-bank',
                'color' => '#2d6a4f',
                'title' => 'Save Today',
                'text'  => 'Take advantage of good weather for free outdoor activities.'
            ];
        }

        $recommendations[] = [
            'icon'  => 'fa-wallet',
            'color' => '#26474E',
            'title' => 'Track Your Spending',
            'text'  => 'Review your budget and make sure you are on track.'
        ];

        $recommendations[] = [
            'icon'  => 'fa-chart-line',
            'color' => '#F27438',
            'title' => 'Financial Check',
            'text'  => 'Check your wallet balance and set realistic spending goals.'
        ];

        return $recommendations;
    }
}