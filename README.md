# Esprit-PiWeb-3A27-Findinari
# Avatar IA — Intégration Symfony

## Structure des fichiers

```

```

---

## Utilisation dans n'importe quel template

```twig
{{ include('components/_avatar_ia.html.twig', {
    greeting: 'Bonjour, je suis là pour t\'aider !'
}) }}
```

Le paramètre `greeting` est optionnel. Par défaut :
> "Bonjour ! Comment puis-je t'aider ?"

---

## Fonctionnalités de l'avatar

| Fonctionnalité | Description |
|---|---|
| Animation de flottement | L'avatar monte/descend en boucle |
| Clignement des yeux | Clignement automatique toutes les 4s |
| Rotation de messages | Change de message toutes les 4s (mode idle) |
| 5 humeurs | Cliquer sur l'avatar pour cycler les humeurs |
| Bulle de message | Apparaît avec animation pop-in |

---

## Personnalisation CSS

Dans `avatar_ia.css`, modifier les variables au besoin :

```css
/* Couleur de la bulle */
.avatar-bubble {
  background: #EEEDFE;   /* fond violet clair */
  color: #3C3489;        /* texte violet foncé */
}

/* Taille de l'avatar */
.avatar-floater {
  width: 120px;
  height: 120px;
}
```

---

## Ajouter des messages personnalisés

Dans `avatar_ia.js`, modifier le tableau `GREETINGS_IDLE` :

```js
const GREETINGS_IDLE = [
  'Bonjour ! Comment puis-je t\'aider ?',
  'Salut ! Pose-moi ta question.',
  'Prêt à t\'accompagner !',
  // Ajouter tes propres messages ici
  'Objectif du jour : épargner plus !',
];
```

---

## Utilisation en sidebar vs inline

### Sidebar (dans base.html.twig)
L'avatar est inclus dans la navigation latérale, visible sur toutes les pages.

### Inline dans un formulaire (dans new.html.twig)
Ajouter la classe `.avatar-inline` au conteneur parent pour réduire la taille automatiquement :

```html
<div class="avatar-inline">
  {{ include('components/_avatar_ia.html.twig', { greeting: 'Remplis ton objectif !' }) }}
</div>
```

---

## Dépendances

- Bootstrap 5.3 (CDN)
- Google Fonts — DM Sans
- Aucune dépendance JS externe (vanilla JS uniquement)
