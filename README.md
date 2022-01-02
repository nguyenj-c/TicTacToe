# Installation
Faire :

```compose install```

Pour télécharger le dossier vendor avec PHPUnit

Puis faire cette commande pour lancer build le docker

```docker-compose build```

Et enfin pour run le docker

```docker-compose up```

# TicTacToe
Le TicTacToe a été fait pour reconnaître les diagonales gagnantes, les lignes mais pour les colonnes.
Avant tous, pour comprendre le code le 1er élément de board[Ligne][colonne] est la ligne et la 2eme est la colonne.
nbElément = nbLigne -1

Pour checkDiagonalWinner, je fais une 1ere boucle qui compare si $board[$i][$i] $i était la variable de la boucle et le dernier élément du board $board[$nbElement][$nbElement] si ils ne sont pas égales on sort de la boucle. Sinon on continue jusqu'à $i == nbElement.

Pour la 2eme boucle, je compare si la 1ere position de l'anti diagonale qui ne change pas peut importe la taille du board donc je met board[0][nbElement] et board[$i][nbElement - $i] si ils ne sont pas égales on sort de la boucle. Sinon on continue jusqu'à $i == nbElement.

Pour checkLineWinner, je fais 2 boucle avec comme variables $i et $k et je compare du coup board[$i][$k] et board[$i][$nbElement] si différent on sort de la boucle. Sinon on continue jusqu'à $k == nbElement.

Pour checkColumnWinner, je fais la même chose que checkLineWinner sauf que j'intervertis ligne et colonne avec les variables $i et $k ce qui donne $board[$k][$i] et $board[$nbElement][$i].

Pour ces fonctions si la boucle continue jusqu'a la variables égales au nombre de ligne - 1, je mets le résultat dans une variable que je retourne à la fin.

# Test
Pour les test unitaire, PHPUnit a été utilisé. 
Pour voir les tests effectués pour ce TicTacToe.

Faites cette commande sur un terminal à la racine du projet ( normalement là ou se trouve le Readme.md )

```./vendor/phpunit/phpunit/phpunit ./project```
