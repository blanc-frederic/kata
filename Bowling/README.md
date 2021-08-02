Bowling scores Kata - PHP Version
=================================

Ceci est une version adaptée du kata [Voir la version originale](http://butunclebob.com/ArticleS.UncleBob.TheBowlingGameKata) où vous pourrez également trouver une résolution en TDD sous formes de slides.

Règles du bowling
-----------------

- une partie se compose de 10 frames
- à chaque frame, 10 quilles sont installées et le joueur a jusqu'à deux lancés pour en faire tomber le maximum
- le score d'une frame est le nombre de quilles tombées, avec un bonus pour les strikes et les spares
- un spare consiste à faire tomber toutes les quilles après les deux lancés d'une frame. Le bonus associé est le nombre de quilles tombées lors du prochain lancé
- un strike consiste à faire tomber toutes (10) les quilles dès le premier lancé d'une frame. Ceci met fin à la frame et le bonus associé est le nombre de quilles tombées lors des 2 prochains lancés
- à la dernière frame, en cas de spare ou de strike, le joueur peut continuer à faire des lancés pour obtenir ses bonus. Cependant, le joueur ne peut pas faire plus de 3 lancés lors de cette frame

NB : Le score le plus haut possible est 300 points

Instructions du kata
--------------------

Ecrivez le code nécessaire au calcul du score d'une partie. En respectant les 3 règles du TDD :

1. Ne pas écrire du code de production à moins qu'il ne permette de faire passer un test qui échoue
2. Ne pas écrire plus de code de test si un test échoue, une erreur de compilation compte comme un échec
3. Vous ne devez pas écrire plus de code de production que ce qui est nécessaire à faire passer le test qui échoue

Structure
---------

- `src`
  - `GameInterface.php` - cette interface **ne** doit **pas** être modifiée
  - `Game.php` - classe à créer, qui doit implémenter l'interface GameInterface
- `tests`
  - `GameTest.php` - classe de test à compléter

Installation
------------

Prérequis

- PHP 7.4+
- [Composer](https://getcomposer.org)

Installation

```bash
git clone git@github.com:blanc-frederic/kata.git
cd kata/Bowling
composer install
```

Tests
-----

Lancer les tests

```bash
composer test
```

Pour lancer les tests avec génération du code-coverage :

```bash
composer test-coverage
```

Le rapport sera généré dans `/build/coverage`, vous pouvez le visualiser en ouvrant `index.html` dans un navigateur.
