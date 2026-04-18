<?php

namespace App\EventSubscriber;

use App\Repository\ObjectifRepository;
use CalendarBundle\CalendarEvents;
use CalendarBundle\Entity\Event;
use CalendarBundle\Event\CalendarSetDataEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class CalendarSubscriber implements EventSubscriberInterface
{
    private ObjectifRepository $objectifRepo;
    private UrlGeneratorInterface $router;

    public function __construct(ObjectifRepository $objectifRepo, UrlGeneratorInterface $router)
    {
        $this->objectifRepo = $objectifRepo;
        $this->router = $router;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CalendarEvents::SET_DATA => 'onCalendarSetData',
        ];
    }

    public function onCalendarSetData(CalendarSetDataEvent $event): void
    {
        $request = $event->getRequest();
        $objectifId = $request->query->get('objectif_id');

        if (!$objectifId) {
            return; // pas d'objectif spécifié
        }

        $objectif = $this->objectifRepo->find($objectifId);
        if (!$objectif) {
            return;
        }

        // 1. Ajouter chaque contribution comme événement
        foreach ($objectif->getContributiongoals() as $contrib) {
            $event->addEvent(new Event(
                sprintf('+ %s €', number_format($contrib->getMontant(), 2, ',', ' ')),
                $contrib->getDate(),
                null, // événement ponctuel
                [
                    'url' => $this->router->generate('objectif_show', ['id' => $objectif->getId()]),
                    'backgroundColor' => '#1a9e6e',
                    'borderColor' => '#1a9e6e',
                    'textColor' => '#fff',
                ]
            ));
        }

        // 2. Ajouter la date d'atteinte réelle (si objectif terminé)
        if ($objectif->getStatut() === 'TERMINE') {
            $lastContrib = $objectif->getContributiongoals()->last();
            if ($lastContrib) {
                $event->addEvent(new Event(
                    '🏆 Objectif atteint',
                    $lastContrib->getDate(),
                    null,
                    [
                        'backgroundColor' => '#f39c12',
                        'borderColor' => '#e67e22',
                        'textColor' => '#fff',
                    ]
                ));
            }
        } else {
            // 3. Optionnel : afficher la date prédite (via GoalStatisticsService)
            // Pour l'instant, on peut laisser le bundle afficher seulement les contributions.
        }
    }
}