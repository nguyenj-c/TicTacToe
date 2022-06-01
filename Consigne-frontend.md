---
reference: javascript-ttt
version: 1.0
langage: javascript
niveaux: debutant, intermédiaire, confirmé
catégories: algorithmie
labels: style, hooks, algorithmie, fonctionnalité
---

# Entretien technique pour développeur frontend React

:point_right: L'objectif de ces exercices est de te confronter au poste de développeur fontend React, à des cas d'usages / bugs usuels dans un environement simplifé.

:hourglass: On estime entre une et deux heures le temps nécessaire pour réaliser tous les excercices. Cela comprend le temps nécessaire de découverte de l'application. Il ne sera pas toujours demandé de réaliser l'ensemble des exercices, suis bien les consignes :wink: ! Dans le cas où tu n'arrives pas réaliser tous les exercices cela ne veut pas dire que tu ne corresponds pas au poste. Dans tous les cas, nous discuterons du rendu afin de comprendre ton approche.

## :100: Évaluation

Au delà d'arriver à résoudre l'exercice, tu seras évalué sur les points suivants :
 1. :question: :question: :question:  Questions posées et pertinence des questions _avant de commencer l'exercice_, dans la limite de 3 questions ;
 2. Compréhension de l'énoncé ;
 3. Qualité du code :
     - Lisibilité ;
     - Utilisation des bonnes pratiques et fonctionnalités modernes du langage (par exemple : sucres syntaxiques) ;
     - Moyens mis en œuvre pour s'assurer de la fiabilité de la solution livrée.
 4. Simplicité de la solution (ne pas over engineerer :exploding_head:) ;

## Comment réaliser ces exercices ?

Pour realiser ces exercices, tu dois forker le code source présent sur CodeSandbox :

[![Forker dans codesandbox.io](https://shields.io/badge/forker-dans%20codesandbox.io-green?logo=codesandbox&style=for-the-badge)](https://codesandbox.io/s/tictactoe-master-f1wj6?file=/README.md)


:point_right: Quand tu as terminé, prends rendez-vous pour débriefer de ton test technique. Il te sera demandé de partager l'url de ton projet CodeSandbox (boutton "Share" bleu en haut à droite de l'interface).

[![Prendre rendez-vous pour débriefer du test](https://shields.io/badge/bloquer%20une%20date-pour%20debriefer-blue?labelColor=%23f3f3f3&logo=google-calendar&style=for-the-badge)](https://calendly.com/sebastien-houze-1/debrief-test-technique
)


## Les règles du TicTacToe

Le TicTacToe (ou Morpion) est un jeu ou deux personnes doivent poser des pions pour essayer de réaliser des lignes horizontales, verticales ou diagonales. Le premier joueur réalisant une ligne gagne la partie.

Le joueur utilisant les pions :x: commence toujours.

## :nerd_face: Exercices

Les exercices peuvent tous être résolus indépendamment les uns des autres. L'ordre proposé permer de découvrir progressivement l'application. N'oublie pas que tu peut poser des questions avant de commencer les exercices.

Dans la section _Comment réaliser ces exercices ?_, tu trouveras de l'aide pour mettre en oeuvre l'environement de travail du projet.

### Exercice 1 (niveau 1) : 🎨 Le style c'est la vie

Mettre en évidence la case survolée par le joueur en cours. Lorsqu'il survole une case changer la couleur du fond de la case par `#3E5770`.

Mais attention, uniquement sur les cases qui n'ont pas déjà été jouées et lorsque qu'une partie est en cours !

### Exercice 2 (niveau 2) : ♻ Et si on rejouait ?

Ajouter en dessous du plateau de jeu un boutton permettant de recommencer une partie sans avoir à rafraîchir la page. On a bien dit : _sans rafraichir la page_.

### Exercice 3 (niveau 2) : ♟ Echec et mat... ou pas

Lorsque toutes les cases du plateau de jeu sont remplies:

- soit l'un des deux joueurs a gagné,
- soit c'est un match nul.

Modifier l'application pour afficher le message "_C'est un match nul! Une autre partie ?_" en dessous du plateau de jeu en cas d'égalité.

### Exercice 4 (niveau 3) : 🔎 Prouve-moi que j'ai gagné !

Dans le cas où un joueur gagne la partie, mettre en évidence les cases qui lui ont permis de gagner. Pour cela changer la couleur des cases gagnantes pour y mettre un fond de la couleur `#2a9d8f`.

### Exercice 5 (niveau 3) : ↘ Tout va de travers !

Tu l'as peut-être remarqué : l'application ne détecte pas les diagonales lors d'une partie. Ajouter la détection des diagonales dans le moteur de résolution victoire du jeu.