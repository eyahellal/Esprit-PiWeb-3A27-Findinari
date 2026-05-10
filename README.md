# Esprit-PiWeb-3A27-Findinari

## FinDinari — Wallet Management System

FinDinari est une application web développée avec Symfony qui permet aux utilisateurs de gérer leur portefeuille numérique, suivre leurs dépenses, organiser leurs transactions et améliorer leur gestion financière grâce à des fonctionnalités modernes et intelligentes.

Le projet intègre également un **Avatar IA** interactif afin d’améliorer l’expérience utilisateur et d’assister les utilisateurs dans la navigation de la plateforme.

---

## Objectif du projet

L’objectif principal de FinDinari est de proposer une solution simple, sécurisée et efficace pour la gestion financière digitale.

La plateforme permet notamment de :

- Gérer un portefeuille numérique.
- Suivre les dépenses et revenus.
- Organiser les transactions.
- Améliorer la visibilité sur les habitudes financières.
- Offrir une expérience utilisateur moderne.
- Intégrer une assistance intelligente via un avatar IA.

---

## Technologies utilisées

- Symfony
- Twig
- PHP
- MySQL
- Doctrine ORM
- Bootstrap 5.3
- JavaScript Vanilla
- HTML / CSS
- Google Fonts — DM Sans

---

## Avatar IA — Intégration Symfony

L’avatar IA est un composant visuel interactif intégré dans l’application FinDinari.  
Il permet d’afficher des messages d’aide, d’accompagner l’utilisateur et de rendre l’interface plus dynamique.

---

## Structure des fichiers

```txt
templates/
 └── components/
     └── _avatar_ia.html.twig

public/
 └── assets/
     ├── css/
     │   └── avatar_ia.css
     └── js/
         └── avatar_ia.js