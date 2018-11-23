# Conduite du projet

Ce fichier décrit la façon dont est menée le projet.

## Architecture du projet


## Technologies utilisées
L'application est codée en php et en html avec une structure LAMP
On utilise Travis pour l'intégration continue
Les tests sur la base de données se font en Python avec la librairie mysql-connector
Les tests E2E sont effectués sur Selenium avec une surcouche Nightwatch
Le déploiement de l'application se fait via Docker

## Déroulement des tasks
Au début du sprint, une liste de tâches à réaliser est mise en place, puis chaque membre du projet réalise celles qu'il souhaite réaliser
La liste des tâches est consultable sur le fichier markdown du sprint en cours et sur le dashboard, où chacun peut indiquer qui fait quelle tâche, leur statut et les commits associés.

## Déroulement des tests

Les tests sont écrits de façon indépendantes à la réalisation des tâches concernées. Ces tests,
principalement de validations, ont leur propre fichier. Si les tests demandent une entrée 
pré-existante en base de donnée, cette entrée est crée avant le déroulement des tests dans le 
fichier `tests/prepare_db.js`.

Chaque test est explicité avant leur réalisation dans le dossier `conduite/designs/tests`.

Les tests peuvent être lancés en batterie via les scripts shell `execute_tests_*.db` présents
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

Les versions suivront le modèle `<majeur>.<mineur>.<hotfix>`.
Les issues couvertes sont référencées par leur identifiant.
