# haisau
[![Build Status](https://travis-ci.com/echoffee/haisau.svg?branch=master)](https://travis-ci.com/echoffee/haisau)
[![Sonar Bugs](https://sonarcloud.io/api/project_badges/measure?project=echoffee_haisau&metric=bugs)](https://sonarcloud.io/dashboard?id=echoffee_haisau)
[![Sonar CS](https://sonarcloud.io/api/project_badges/measure?project=echoffee_haisau&metric=code_smells)](https://sonarcloud.io/dashboard?id=echoffee_haisau)

Conduite de projet groupe 2.6.

## Issues et organisation
Les différents fichiers traitant de l'organisation du projet se trouvent dans le répertoire `conduite/` à
la racine du dépot.

Specifications : [specs.md](https://github.com/echoffee/haisau/blob/master/conduite/documentation/specs.md).

Issues : [issues.md](https://github.com/echoffee/haisau/blob/master/conduite/issues.md).

Sprints : [sprints](https://github.com/echoffee/haisau/blob/master/conduite/sprints).

L'état d'avancement des sprints est situé dans l'onglet [Projet](https://github.com/echoffee/haisau/projects) de GitHub.

Les commits sur la branche `master` sont testés et référencés via [Travis CI](https://travis-ci.com/echoffee/travis-test).
Les *releases* sont composées sur des branches labélisées à partir de commits sur `master` par un intégrateur désigné au sein de l'équipe.

## Instructions d'installation

Les différentes releases font usage de [Docker](https://www.docker.com/) via **docker-compose**.
Elles se déploient sur 3 conteneurs + 2 pour effectuer les tests.

### Mise en place du site

Pour déployer les conteneurs :
  1. Cloner le projet
  ```
    git clone https://github.com/echoffee/haisau.git   
  ```
  2. Se placer à la racine et construire les images mysql et php :
  ```
    docker-compose build
  ```
  3. Lancer les différents conteneurs via docker-compose :
  ```
    docker-compose up -d
  ```

L'application tournera sur la machine locale en utilisant ces ports :
- **localhost:8080** : Interface de l'application
- **localhost:8081** : Interface [phpMyAdmin](https://www.phpmyadmin.net/) pour explorer la base de données
- **localhost:4444** : Interface "console" de Selenium pour effectuer des tests


### Effectuer les tests automatiques

Il y a deux types de tests pour ce projet, ceux sur la base de donnée réalisés en Python avec la librairie `mysql-connector` 
ainsi que les tests E2E réalisés avec [Selenium](https://www.seleniumhq.org/) via [Nightwatch](http://nightwatchjs.org/).

#### Tests sur base de donnée

  1. Installer `mysql-connector` ([pip](https://pip.pypa.io/en/stable/installing/) nécessaire) :
  ```
  pip install mysql-connector
  ```
  
  2. Lancer les tests :
  ```
  sh execute_tests_db.sh
  ```

#### Tests E2E

  1. Installer les dépendances ([Node.js](https://nodejs.org/en/download/) nécessaire) :
  ```
  npm install nightwatch mysql sha1
  ```
  
  2. Lancer les tests :
  ```
  sh execute_tests_e2e.sh
  ```
