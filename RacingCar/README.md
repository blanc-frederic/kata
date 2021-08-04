GildedRose Kata - PHP Version
=============================

Ceci est une version adaptée du kata. [Voir la version originale](https://github.com/emilybache/Racing-Car-Katas) où il est également disponible dans d'autres langages.

Installation
------------

Prérequis

- PHP 7.4+
- [Composer](https://getcomposer.org)

Installation

```bash
git clone git@github.com:blanc-frederic/kata.git
cd kata/RacingCar
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
