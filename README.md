# Installation
Faire :

```compose install```
Pour télécharger le dossier vendor avec PHPUnit
```docker-compose build```

Puis 

```docker-compose up```

# TicTacToe
Le TicTacToe a été fait pour reconnaître les diagonales gagnantes, les lignes mais pour les colonnes j'ai eu une erreur de undefined array key qui bloquer la prise des valeurs.
# Test
Une tentative a été faite pour le test avec PHPUnit mais je n’arrivais pas à le faire marcher.
J’ai donc testé dans une classe MorpionTest() que j'appelle dans index.php
# Non terminé/Piste de réflexions
Exercice 3 et 4 non traitée mais des pistes de réflexions ont été faites sur le fait de préciser un nombre de tableau pour faire plus tard N X N avec pow() puis utiliser str_pad() pour compléter la chaîne de caractères pour faire en sorte d'avoir la N X N. Pour le tableau il aurait fallu faire une boucle puis faire un push de valeur vide jusqu'a un certain nombre et faire ainsi avec chaque array pour le dernier exercice j'avais réfléchi a  utiliser array_count_values. (Plus qu'a voir la pratique)

