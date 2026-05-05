<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class InflationController extends AbstractController
{
    private const COUNTRIES = [
        'TN' => '🇹🇳 Tunisie',
        'MA' => '🇲🇦 Maroc',
        'DZ' => '🇩🇿 Algérie',
        'EG' => '🇪🇬 Égypte',
        'SA' => '🇸🇦 Arabie Saoudite',
        'AE' => '🇦🇪 Émirats Arabes Unis',
        'TR' => '🇹🇷 Turquie',
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
        'US' => '🇺🇸 États-Unis',
        'CA' => '🇨🇦 Canada',
        'BR' => '🇧🇷 Brésil',
        'MX' => '🇲🇽 Mexique',
        'AR' => '🇦🇷 Argentine',
        'CN' => '🇨🇳 Chine',
        'JP' => '🇯🇵 Japon',
        'IN' => '🇮🇳 Inde',
        'KR' => '🇰🇷 Corée du Sud',
        'SG' => '🇸🇬 Singapour',
        'ZA' => '🇿🇦 Afrique du Sud',
        'NG' => '🇳🇬 Nigeria',
        'KE' => '🇰🇪 Kenya',
        'SN' => '🇸🇳 Sénégal',
    ];

    private const FALLBACK_RATES = [
        'TN' => ['taux' => 7.3,   'source' => 'INS Tunisie 2024'],
        'MA' => ['taux' => 2.5,   'source' => 'HCP Maroc 2024'],
        'DZ' => ['taux' => 4.2,   'source' => 'ONS Algérie 2024'],
        'EG' => ['taux' => 33.8,  'source' => 'CAPMAS Égypte 2024'],
        'SA' => ['taux' => 1.7,   'source' => 'GASTAT 2024'],
        'AE' => ['taux' => 2.3,   'source' => 'UAE Statistics 2024'],
        'TR' => ['taux' => 44.4,  'source' => 'TUIK Turquie 2024'],
        'FR' => ['taux' => 2.3,   'source' => 'INSEE France 2024'],
        'DE' => ['taux' => 2.5,   'source' => 'Destatis 2024'],
        'GB' => ['taux' => 3.2,   'source' => 'ONS UK 2024'],
        'IT' => ['taux' => 1.0,   'source' => 'ISTAT 2024'],
        'ES' => ['taux' => 2.8,   'source' => 'INE Espagne 2024'],
        'PT' => ['taux' => 2.2,   'source' => 'INE Portugal 2024'],
        'NL' => ['taux' => 2.9,   'source' => 'CBS 2024'],
        'BE' => ['taux' => 3.4,   'source' => 'Statbel 2024'],
        'CH' => ['taux' => 1.1,   'source' => 'OFS Suisse 2024'],
        'SE' => ['taux' => 2.3,   'source' => 'SCB 2024'],
        'NO' => ['taux' => 3.1,   'source' => 'SSB 2024'],
        'PL' => ['taux' => 3.6,   'source' => 'GUS 2024'],
        'GR' => ['taux' => 2.9,   'source' => 'ELSTAT 2024'],
        'US' => ['taux' => 3.4,   'source' => 'BLS 2024'],
        'CA' => ['taux' => 2.9,   'source' => 'StatCan 2024'],
        'BR' => ['taux' => 4.6,   'source' => 'IBGE 2024'],
        'MX' => ['taux' => 4.7,   'source' => 'INEGI 2024'],
        'AR' => ['taux' => 211.4, 'source' => 'INDEC 2024'],
        'CN' => ['taux' => 0.3,   'source' => 'NBS Chine 2024'],
        'JP' => ['taux' => 2.8,   'source' => 'SBJ 2024'],
        'IN' => ['taux' => 5.1,   'source' => 'MOSPI 2024'],
        'KR' => ['taux' => 2.3,   'source' => 'Kostat 2024'],
        'SG' => ['taux' => 2.4,   'source' => 'SingStat 2024'],
        'ZA' => ['taux' => 5.3,   'source' => 'Stats SA 2024'],
        'NG' => ['taux' => 28.9,  'source' => 'NBS Nigeria 2024'],
        'KE' => ['taux' => 5.9,   'source' => 'KNBS 2024'],
        'SN' => ['taux' => 2.1,   'source' => 'ANSD 2024'],
    ];

    public function __construct(
        private HttpClientInterface $client
    ) {}

    #[Route('/objectif/inflation', name: 'objectif_inflation', methods: ['GET', 'POST'])]
    public function index(Request $request): Response
    {
        $result = null;
        $error  = null;

        if ($request->isMethod('POST')) {
            $montant = (float) $request->request->get('montant', 0);
            $annees  = (int)   $request->request->get('annees', 1);
            $country = $request->request->get('country', 'TN');

            if ($montant <= 0) {
                $error = 'Veuillez entrer un montant valide (supérieur à 0).';
            } elseif ($annees <= 0 || $annees > 50) {
                $error = 'La durée doit être entre 1 et 50 ans.';
            } elseif (!isset(self::COUNTRIES[$country])) {
                $error = 'Pays invalide.';
            } else {
                // ✅ Essaie l'API, sinon fallback automatique
                $inflationInfo = $this->getInflationData($country);
                $taux          = $inflationInfo['taux'];
                $tauxDecimal   = $taux / 100;

                $history = [];
                for ($i = 1; $i <= $annees; $i++) {
                    $history[] = [
                        'annee'  => (int) date('Y') + $i,
                        'valeur' => round($montant * pow(1 + $tauxDecimal, $i), 2),
                    ];
                }

                $valeurFuture          = $montant * pow(1 + $tauxDecimal, $annees);
                $difference            = $valeurFuture - $montant;
     $contributionMensuelle = $difference / ($annees * 12);

                $result = [
                    'montant_initial'        => $montant,
                    'valeur_future'          => round($valeurFuture, 2),
                    'difference'             => round($difference, 2),
                    'taux'                   => $taux,
                    'annees'                 => $annees,
                    'country'                => $country,
                    'country_name'           => self::COUNTRIES[$country],
                    'annee_donnee'           => $inflationInfo['annee'],
                    'source'                 => $inflationInfo['source'],
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
            $response = $this->client->request(
                'GET',
                "https://api.worldbank.org/v2/country/{$country}/indicator/FP.CPI.TOTL.ZG",
                [
                    'query'   => ['format' => 'json', 'mrv' => 5],
                    'timeout' => 2, // 2 secondes max
                ]
            );

            $data = $response->toArray();

            if (isset($data[1]) && is_array($data[1])) {
                foreach ($data[1] as $entry) {
                    if ($entry['value'] !== null && $entry['value'] > 0) {
                        return [
                            'taux'   => round((float) $entry['value'], 2),
                            'annee'  => $entry['date'],
                            'source' => '🌐 World Bank (temps réel)',
                        ];
                    }
                }
            }
        } catch (\Exception $e) {
            // API indisponible → fallback silencieux
        }

        // ✅ Fallback fiable si API indisponible
        $fallback = self::FALLBACK_RATES[$country]
            ?? ['taux' => 3.0, 'source' => 'Estimation mondiale'];

        return [
            'taux'   => $fallback['taux'],
            'annee'  => '2024',
            'source' => '📊 ' . $fallback['source'],
        ];
    }
}