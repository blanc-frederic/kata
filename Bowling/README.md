Bowling scores Kata - PHP Version
=================================

Ceci est une version adaptée du kata [Voir la version originale](http://butunclebob.com/ArticleS.UncleBob.TheBowlingGameKata) où vous pourrez également trouver une résolution en TDD sous formes de slides.

Règles du bowling
-----------------

- une partie se compose de 10 frames
- à chaque frame, 10 quilles sont installées et le joueur a jusqu'à deux lancés pour en faire tomber le maximum
- le score d'une frame est le nombre de quilles tombées, avec un bonus pour les strikes et les spares
- un spare consiste à faire tomber toutes les quilles après les deux lancés d'une frame. Le bonus associé est le nombre de quilles tombées après le prochain lancé
- un strike consiste à faire tomber toutes (10) les quilles dès le premier lancé d'une frame. Le bonus associé est le nombre de quilles tombées lors des 2 prochains lancés
- à la dernière frame, en cas de spare ou de strike, le joueur peut continuer à faire des lancés pour obtenir ses bonus. Cependant, le joueur ne peut pas faire plus de 3 lancés

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

Leeroy n'aime pas écrire des tests, il préfère foncer tout de suite dans le code. Il n'y a donc pas beaucoup de tests, mais vous pouvez les lancer avec la commande suivante :

```bash
composer test
```

Pour lancer les tests avec génération du code-coverage :

```bash
composer test-coverage
```

Le rapport sera généré dans `/build/coverage`, vous pouvez le visualiser en ouvrant `index.html` dans un navigateur.
