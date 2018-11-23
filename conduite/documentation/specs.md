# Conduite du projet

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


## Déroulement des tasks


## Déroulement des tests


## Template du changelog
