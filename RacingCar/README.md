Racing Car kata - PHP Version
=============================

Ceci est une version adaptée du kata. [Voir la version originale](https://github.com/emilybache/Racing-Car-Katas) où il est également disponible dans d'autres langages.

Exercices
---------

Vous êtes nouveau dans l'équipe et vous voici face à l'énorme Legacy de la boite.

Vous avez décidé d'améliorer les choses, mais le plus gros problème est qu'il n'y a que très peu de tests sur cette application. Il va donc falloir commencer par en poser, afin de pouvoir lancer les refactorisations plus sereinement.

Il y a 4 exercices au total, voici pour chacun les différentes étapes à réaliser avant de passer à l'exercice suivant :

### 1/ TirePressureMonitoring

Ce dossier est dédié au fonctionnement du détecteur de pression des pneus lors de la course. Mais il n'y a jamais vraiment eu de tests écrits, il faut y remédier pour que nous puissions faire des refactorisations.

1. Ecrire des tests unitaires pour les méthodes check et isAlarmOn de la classe Alarm, sans toucher aux fichiers dans le dossier src
2. Refactoriser la classe Alarm et ajouter des tests pour arriver à une couverture de 100% sur cette classe

### 2/ UnicodeFileToHtmlTextConverter

Ce module est dédié à la transformation de fichiers textes générés par les différents capteurs pour qu'ils puissent être affichés sur une page web de monitoring.

1. Ecrire des tests unitaires pour HtmlTextConverter, qui doit au final pouvoir être testée sans les fichiers générés
2. Ecrire des tests unitaires pour HtmlPagesConverter, qui a les mêmes fonctionnalités mais gère en plus de la pagination

### 3/ TicketDispenser

Cette classe gère le fonctionnement des machines à tickets. Il y a plusieurs machines qui distribuent les tickets, mais deux clients ne doivent pas pouvoir obtenir le même numéro de ticket.

Ecrire des tests unitaires pour TicketDispenser

### 4/ TelemetrySystem

TelemetryDiagnosticControls est là pour établir une connexion au serveur de télémétriques (à travers TelemetryClient) et récupérer les informations de diagnostic. 

La classe TelemetryClient fournie pour l'exercice simule le comportement de la classe TelemetryClient réelle, et peut répondre soit avec les informations de diagnostic, soit avec une séquence aléatoire. La classe TelemetryClient réelle se connecte et communique avec le serveur de télémétrie via tcp/ip.

Ecrire des tests unitaires pour TelemetryDiagnosticControls

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
