# Conduite du projet

Ce fichier décrit la façon dont est menée le projet.

## Architecture du projet

```
.
+-- tests
| prepare_db.js
| +-- e2e
| | tests end to end js
| +-- db
| | tests db python
+-- src
| fichiers source php
+-- docker
| +-- custom-php
| | Dockerfile
| +-- custom-mysql
| | script d'initialisation de la base de données
| | Dockerfile
+-- config
| php.ini
+-- conduite
| +-- sprints
| | fichiers description de sprints markdown
| | burn down charts
| +-- documentation
| | specification du projet
| +-- designs
| | +-- tests
| | | design des tests
| | +-- tasks
| | | design des tasks
| issues.md


```
Les fichiers.sh à la racine éxectuent une batterie de tests, .travis.yml permet l'intégration continue de notre projet, nightwatch permet la configuration des tests e2e, et docker-compose permet de déployer l'application.

## Technologies utilisées
L'application est codée en php et en html avec une structure LAMP
On utilise [Travis](https://travis-ci.com/) pour l'intégration continue et [Sonar](https://www.sonarqube.org/) évalue la qualité du code produit.
Les tests sur la base de données se font en Python avec la librairie `mysql-connector`.
Les tests E2E sont effectués sur un serveur [Selenium](https://www.seleniumhq.org/) avec le framework [Nightwatch](http://nightwatchjs.org/).
Le déploiement de l'application se fait via [Docker](https://www.docker.com/).

## Déroulement des tasks
Au début du sprint, une liste de tâches à réaliser est mise en place, puis chaque membre du projet réalise celles qu'il souhaite réaliser.
La liste des tâches est consultable sur le fichier markdown du sprint en cours et sur le [dashboard](https://github.com/echoffee/haisau/projects), où chacun peut indiquer qui fait quelle tâche, leur statut et les commits associés.

## Déroulement des tests

Les tests sont écrits de façon indépendantes à la réalisation des tâches concernées. Ces tests,
principalement de validations, ont leur propre fichier. Si les tests demandent une entrée
pré-existante en base de donnée, cette entrée est crée avant le déroulement des tests dans le
fichier `tests/prepare_db.js`.

Chaque test est explicité avant leur réalisation dans le dossier `conduite/designs/tests`.

Les tests peuvent être lancés en batterie via les scripts shell `execute_tests_<type>.db` présents
à la racine du projet. Ces commandes sont exécutées par l'outil d'intégration continue à chaque
push sur le dépôt.

## Template du changelog

Les notes des releases suivent toutes ce modèle :

```

Release <version>

Changelog :
  <Issues couvertes sur cette version par rapport à la précédente>

Installation :
  <Instructions d'installation>

```

Les versions suivront le modèle `<majeur>.<mineur>.<hotfix (optionnel)>`.
Les issues couvertes sont référencées par leur identifiant.
