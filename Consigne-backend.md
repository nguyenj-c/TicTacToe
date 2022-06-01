---
reference: php-ttt
version: 1.0
langage: php
niveau: intermédiaire, confirmé
catégorie: algorithmie,fonctionnalité
labels: array, string, typage, validation
---

# Entretien technique pour développeur backend php

:point_right: L'objectif de ces exercices est de te confronter au poste de développeur backend php, à des cas d'usages / bugs usuels dans un environement simplifé.

:hourglass: On estime entre une et deux heures le temps nécessaire pour réaliser tous les excercices. Cela comprend le temps nécessaire de découverte de l'application. Il ne sera pas toujours demandé de réaliser l'ensemble des exercices, suivez bien les consignes :wink: !
## :100: Évaluation

Au delà d'arriver à résoudre l'exercice, tu seras évalué sur les points suivants :
 1. Questions posées et pertinence des questions avant de commencer l'exercice, dans la limite de 3 questions ;
 2. Compréhension de l'énoncé ;
 3. Qualité du code :
     - Lisibilité ;
     - Utilisation des bonnes pratiques et fonctionnalités modernes du langage (par exemple : sucres syntaxiques) ;
     - Moyens mis en œuvre pour s'assurer de la fiabilité de la solution livrée.
 4. Simplicité de la solution (ne pas over engineerer :exploding_head:) ;

## Comment réaliser ces exercices ?

Il te faut bien évidemment php (dans un conteneur docker, installé en local sur votre machine, dans un éditeur en ligne).


:point_right: Quand tu as terminé, prends rendez-vous pour débriefer de ton test technique. Il te sera demandé de partager l'url d'un dépôt github publique (ou même un gist ou un lien [3v4l](https://3v4l.org/) à toi de voir :wink:).

[![Prendre rendez-vous pour débriefer du test](https://shields.io/badge/bloquer%20une%20date-pour%20debriefer-blue?labelColor=%23f3f3f3&logo=google-calendar&style=for-the-badge)](https://calendly.com/sebastien-houze/debrief-test-technique
)

## Les règles du TicTacToe

Le TicTacToe (ou Morpion) est un jeu ou deux personnes doivent poser des pions pour essayer de réaliser des lignes horizontales, verticales ou diagonales. Le premier joueur réalisant une ligne gagne la partie.

Le joueur utilisant les pions :x: commence toujours.

## :nerd_face: Exercices

### Exercice 1 (niveau 1) : :trophy: l'esprit de la gagne

Créer une fonction `andTheWinnerIs` :
  1. qui prend en argument une grille de "morpion" (ou [tic-tac-toe](https://fr.wikipedia.org/wiki/Tic-tac-toe)) de `3 x 3` cases ;
  2. et retourne :
      - `"X"` si 3 :x: sont alignés verticalement, horizontalement ou dans l'une des 2 diagonales ;
      - `"O"` si 3 :o: sont alignés verticalement, horizontalement ou dans l'une des 2 diagonales ;
      - `"Tie"` si ni :x: ni :o: n'a gagné (égalité).

```php
<?php

function andTheWinnerIs(array $board): string
{
  // Your implementation here.
}
```

#### :point_right: Exemples

```php
<?php
echo andTheWinnerIs(
  [
    ['O', 'X', 'O'],
    ['X', 'X', 'O'],
    ['O', 'X', 'X'],
  ]
);
"X"

echo andTheWinnerIs(
  [
    ['O', 'O', 'X'],
    ['X', 'O', 'X'],
    ['O', 'X', 'O'],
  ]
);
"O"

echo andTheWinnerIs(
  [
    ['O', 'O', 'X'],
    ['X', 'X', 'O'],
    ['O', 'X', 'O'],
  ]
);
"Tie"
```

### Exercice 2 (niveau 2): :bikini: tac toe en string

Faire évoluer la fonction pour qu'elle accepte soit un tableau php (comme dans l'exercice 1) soit une chaîne de caractère pour représenter la grille.
Un indice: si vous utilisez php8, montrez que vous maîtrisez les dernières évolutions :wink:.


```
X O X
O X O
O O O
```


### Exercice 3 (niveau 3): :exploding_head: entre dans la matrice

Effectuer une mise à jour afin d'être en mesure d'évaluer des grilles de taille `N x N`, avec `N >= 3`.

### Exercice 4 (niveau 4): :bomb: incassable

Gérer l'ensemble des cas limites qui pourraient amener à faire planter le programme. Tu dois à minima intégrer les contraintes de validation suivantes :
   - La taille minimale d'une grille est de `3 x 3` cases, pas de limite maximale théorique.
   - Ajouter un nouveau retour `"In progress"` à la fonction lorsque l'on envoie une grille de jeu non terminée.

Il n'y a cependant aucune restriction à gérer d'autres contraintes tant que cela rend le code [SOLID](https://afsy.fr/avent/2013/02-principes-stupid-solid-poo) :muscle:.


Exemple de grille de jeu non terminée :
```
X   O
O X
O   O
```

## :bulb: Conseils

- Si tu n'avez pas réussi.e à terminer l'exercice (particulièrement parce que tu avez été pris.e par le temps), nous porterons attention à votre démarche et à votre capacité à l'expliquer.
- Si tu as quelque chose de fonctionnel mais que tu aurais aimé procédé différemment sans avoir le temps de le faire, nous serons très attentif à vos explications à ce sujet :ear:.
- Les fonctions php suivantes pourraient t'être utiles (aucune obligation de toutes les utiliser) :
    - [strtr](https://php.net/strtr)
    - [str_repeat](https://php.net/str_repeat)
    - [str_pad](https://php.net/str_pad)
    - [join](https://php.net/join)
    - [sprintf](https://php.net/sprintf)
    - [str_split](https://php.net/str_split)
    - [count](https://php.net/count)
    - [strlen](https://php.net/strlen)
    - [array_merge_recursive](https://php.net/array_merge_recursive)
    - [array_count_values](https://php.net/array_count_values)
    - [array_chunk](https://php.net/array_chunk)
    - [range](https://php.net/range)
    - [array_filter](https://php.net/array_filter)
    - [pow](https://php.net/pow)
