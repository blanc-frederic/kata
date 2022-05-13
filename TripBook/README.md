TripService Kata - PHP Version
=============================

Ceci est une version adaptée du kata. [Voir la version originale](https://github.com/sandromancuso/trip-service-kata) où il est également disponible dans d'autres langages.

Contexte fonctionnel
--------------------

Imaginez un réseau social où nous partagerions avec nos amis nos carnets de voyages : Photos, vidéos, récits, ...

Vous faites partie de l'équipe en charge du site et vous avez décidé de prendre un peu de temps pour faire un peu de refactoring d'une classe en particulier : celle qui permet de partager de récupérer la liste des voyages d'une personne, **TripService**.

Bien entendu, cette liste n'est pas publique : on ne la partage qu'avec ses amis.

Règles de refactoring
---------------------

Cette classe est cruciale pour le fonctionnement du site, il est donc impératif d'avoir un coverage **100%** de la méthode **TripService.getTripsByUser()** avant toute modification de code... en dehors des refactorisations automatiques (que votre IDE peut faire pour vous) si nécessaires pour écrire les tests.

Il est également demandé de bien respecter le principe des tests unitaires suivant : ne pas inclure dans les tests des méthodes qui pourrait générer des appels à une bases de données, des fichiers, etc... Le code de ces méthodes ont ont été remplacés par des levées d'exception de type **ShouldNotBeUsedDuringUnitTest** pour vous guider dans le respect de cette règle.

Installation
------------

Prérequis

- Docker
- Docker-compose

ou

- php >= 7.4
- composer

Installation

```bash
git clone git@github.com:blanc-frederic/kata.git
cd kata/TripBook
docker-compose run composer install
```

Tests
-----

Lancer les tests :

```bash
docker-compose run tests
```

Avec génération du code coverage :

```bash
docker-compose run coverage
```

Le rapport sera généré dans `/var/coverage`, vous pouvez le visualiser en ouvrant `index.html` dans un navigateur.
