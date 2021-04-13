GildedRose Kata - PHP Version
=============================

Ceci est une version adaptée du kata. [Voir la version originale](https://github.com/emilybache/GildedRose-Refactoring-Kata) où il est également disponible dans d'autres langages.

Présentation de la Rose dorée
-----------------------------

Bonjour et bienvenue dans l'équipe de la Rose dorée.

Comme vous le savez, notre petite taverne située à proximité d'une cité importante est dirigée par l'amicale aubergiste Allison.

Nous achetons et vendons uniquement les meilleurs produits.
Malheureusement, la qualité de nos marchandises se dégrade constamment à l'approche de leur date de péremption.

Un système a été mis en place pour mettre à jour notre inventaire.
Il a été développé par Leeroy, une personne pleine de bon sens qui est parti pour de nouvelles aventures.

Votre mission est d'ajouter une nouvelle fonctionnalité à notre système pour que nous puissions commencer à vendre un nouveau type de produits.

Mais d'abord, laissez-moi vous présenter notre système :

- Tous les articles ont une valeur `sellIn` qui désigne le nombre de jours restant pour vendre l'article.
- Tous les articles ont une valeur `quality` qui dénote combien l'article est précieux.
- À la fin de chaque journée, notre système diminue ces deux valeurs pour chaque produit.

Plutôt simple, non ?

Attendez, ça devient intéressant :

- La qualité (`quality`) d'un produit ne peut jamais être négative.
- Une fois que la date de péremption est passée, la qualité se dégrade deux fois plus rapidement.
- "Aged Brie" augmente sa qualité avec le temps qui passe.
- La qualité d'un produit n'est jamais de plus de 50.
- "Sulfuras, Hand of Ragnaros", étant un objet légendaire, n'a pas de date de péremption et ne perd jamais en qualité.
- les "Backstage passes ...", augmentent leur qualité plus on s'approche de la date du concert (`sellIn`) ; De plus, leur qualité augmente de 2 quand il reste 10 jours ou moins, de 3 quand il reste 5 jours ou moins, et bien entendu tombe à 0 après le concert.

Nous avons récemment signé un partenariat avec un fournisseur de produits invoqués.
Cela nécessite une mise à jour de notre système :

- les noms des articles invoqués commencent par "Conjured ".
- les articles invoqués sont des articles normaux, mais voient leur qualité se dégrader deux fois plus vite.

Vous pouvez faire tous les changements que vous voulez, tant que tout fonctionne correctement.
Cependant, nous devons vous prévenir, vous ne devez en aucun cas modifier le code de la classe `Item` ou ses propriétés car cette classe appartient au gobelin de l'étage et il entrera dans une rage instantanée et vous tuera sans délai.

Ah oui, juste une dernière précision : un produit ne peut jamais voir sa qualité augmenter au-dessus de 50, cependant Sulfuras est un objet légendaire et comme tel sa qualité est de 80 et elle ne change jamais.

Installation
------------

Prérequis

- PHP 7.4+
- [Composer](https://getcomposer.org)

Installation

```bash
git clone git@github.com:blanc-frederic/kata.git
cd kata/GildedRose
composer install
```

Structure
---------

- `src`
  - `Item.php` - cette classe **ne** doit **pas** être modifiée
  - `GildedRose.php` - cette classe aurait besoin d'une refactorisation avant  l'ajout de la fonctionnalité
- `tests`
  - `GildedRoseTest.php` - de quoi se lancer
  - `ApprovalTest.php` - test de non-regression sur `bin/export.php`
- `bin`
  - `export.php` - exemple d'utilisation de GildedRose

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
