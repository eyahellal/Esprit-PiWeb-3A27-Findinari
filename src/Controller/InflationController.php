<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class InflationController extends AbstractController
{
    // Liste complète des pays avec leurs codes World Bank
    private const COUNTRIES = [
        // Afrique du Nord & Moyen-Orient
        'TN' => '🇹🇳 Tunisie',
        'MA' => '🇲🇦 Maroc',
        'DZ' => '🇩🇿 Algérie',
        'EG' => '🇪🇬 Égypte',
        'SA' => '🇸🇦 Arabie Saoudite',
        'AE' => '🇦🇪 Émirats Arabes Unis',
        'TR' => '🇹🇷 Turquie',
        // Europe
        'FR' => '🇫🇷 France',
        'DE' => '🇩🇪 Allemagne',
        'GB' => '🇬🇧 Royaume-Uni',
        'IT' => '🇮🇹 Italie',
        'ES' => '🇪🇸 Espagne',
        'PT' => '🇵🇹 Portugal',
        'NL' => '🇳🇱 Pays-Bas',
        'BE' => '🇧🇪 Belgique',
        'CH' => '🇨🇭 Suisse',
        'SE' => '🇸🇪 Suède',
        'NO' => '🇳🇴 Norvège',
        'PL' => '🇵🇱 Pologne',
        'GR' => '🇬🇷 Grèce',
        // Amériques
        'US' => '🇺🇸 États-Unis',
        'CA' => '🇨🇦 Canada',
        'BR' => '🇧🇷 Brésil',
        'MX' => '🇲🇽 Mexique',
        'AR' => '🇦🇷 Argentine',
        // Asie
        'CN' => '🇨🇳 Chine',
        'JP' => '🇯🇵 Japon',
        'IN' => '🇮🇳 Inde',
        'KR' => '🇰🇷 Corée du Sud',
        'SG' => '🇸🇬 Singapour',
        // Afrique subsaharienne
        'ZA' => '🇿🇦 Afrique du Sud',
        'NG' => '🇳🇬 Nigeria',
        'KE' => '🇰🇪 Kenya',
        'SN' => '🇸🇳 Sénégal',
    ];

    public function __construct(
        private HttpClientInterface $client
    ) {}

    #[Route('/objectif/inflation', name: 'objectif_inflation')]
    public function index(Request $request): Response
    {
        $result  = null;
        $error   = null;
        $history = [];

        if ($request->isMethod('POST')) {
            $montant = (float) $request->request->get('montant', 0);
            $annees  = (int)   $request->request->get('annees', 1);
            $country = $request->request->get('country', 'TN');

            if ($montant <= 0 || $annees <= 0) {
                $error = 'Veuillez entrer un montant et une durée valides.';
            } else {
                ['taux' => $taux, 'annee' => $anneeData, 'source' => $source]
                    = $this->getInflationData($country);

                // Évolution année par année
                for ($i = 1; $i <= $annees; $i++) {
                    $history[] = [
                        'annee'  => date('Y') + $i,
                        'valeur' => round($montant * pow(1 + $taux / 100, $i), 2),
                    ];
                }

                $valeurFuture       = $montant * pow(1 + $taux / 100, $annees);
                $contributionMensuelle = ($valeurFuture - $montant) / ($annees * 12);

                $result = [
                    'montant_initial'        => $montant,
                    'valeur_future'          => round($valeurFuture, 2),
                    'difference'             => round($valeurFuture - $montant, 2),
                    'taux'                   => $taux,
                    'annees'                 => $annees,
                    'country'                => $country,
                    'country_name'           => self::COUNTRIES[$country] ?? $country,
                    'annee_donnee'           => $anneeData,
                    'source'                 => $source,
                    'contribution_mensuelle' => round($contributionMensuelle, 2),
                    'history'                => $history,
                ];
            }
        }

        return $this->render('objectif/inflation.html.twig', [
            'countries' => self::COUNTRIES,
            'result'    => $result,
            'error'     => $error,
        ]);
    }

    private function getInflationData(string $country): array
    {
        try {
            $response = $this->client->request('GET',
                "https://api.worldbank.org/v2/country/{$country}/indicator/FP.CPI.TOTL.ZG",
                ['query' => ['format' => 'json', 'mrv' => 5]]
            );

            $data = $response->toArray();

            // Cherche la dernière valeur non nulle
            if (isset($data[1]) && is_array($data[1])) {
                foreach ($data[1] as $entry) {
                    if ($entry['value'] !== null) {
                        return [
                            'taux'   => round((float) $entry['value'], 2),
                            'annee'  => $entry['date'],
                            'source' => 'World Bank',
                        ];
                    }
                }
            }
        } catch (\Exception $e) {
            // Silencieux, utilise le taux par défaut
        }

        return ['taux' => 3.0, 'annee' => 'N/A', 'source' => 'Valeur estimée'];
    }
}