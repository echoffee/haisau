# Design des différentes pages php de l'application

### index.php

Contient la page d'accueil de notre projet, qui est la page de connexion
permettant à un utilisateur de se connecter grâce à un champ d'identifiant
USERNAME et un autre champ PASSWORD pour le mot de passe et vérifie que
l'utilisateur est déjà inscrit sur le site. Un bouton SIGN IN permettra de
soumette la valeur es ces champs pour voir s'il existe un tel utilisateur dans
la base de donnée, et si c'est le cas, redirige l'utilisateur vers la page
projectList.php. De plus, un lien de label "New user ? Create an account"
redirigeant vers la page de création de compte (register.php) sera disponible
sur cette page. Pour toute autre page que celle-ci, nous auront un bouton "log
out" disponible qui nous permettra de nous déconnecter de notre session, nous
redirigeant ainsi vers la page disconnect.php.

### register.php

Contient le formulaire de création de compte permettant à un utilisateur de
se connecter par la suite. Ce formulaire contient les champs suivants : "adresse
email", "username", "password". Tout en bas du formulaire se trouve un bouton
"Create an account" qui inscrit l'utilisateur dans la base de données.  Une fois
l'utilisateur inscrit, il pourra se connecter depuis index.php.

### disconnect.php

Contient une page spécifiant que l'utilisateur s'est bien déconnecté. Cette page
contient le texte "You logged out successfully" qui apparait de manière visible
par l'utilisateur, puis le redirige vers l'écran de connexion, soit index.php.

### projectList.php

Contient la liste des projets visibles par un utilisateur connecté. Chaque
projet contient les champs suivants : "Project name", "Actual sprint name",
"Progress" (représentant le Nombre de tâches accomplies/nombre de tâches
assignées au sprint), et "Actual sprint end date". La page contiendra en haut de
la liste des projets un bouton "Create new project" redirigeant vers la page de
création de projet createProject.php. A côté du nom de chaque projet dans la
liste apparaîtra un bouton "Modifier" permettant de modifier le nom du projet
en rentrant un nouveau nom manuellement, modifiant ainsi le nom du projet dans
la base de données et actualisant le nom du projet sur cette page. Il y aura
également un bouton "Supprimer" à côté de chaque projet qui, une fois cliqué,
fera apparaître une fenêtre pop-up de confirmation permettant de confirmer le
choix de supprimer le projet à qui le bouton est affilié. La fenêtre pop up
contiendra les boutons un texte "Do you want to delete this project ?" et deux
boutons : un bouton "Confirm" et un bouton "Cancel".

### createProject.php

Contient le formulaire de création d'un projet, permettant de créer et
d'assigner un projet à un utilisateur. Le formulaire contiendra seulement deux
champs à renseigner qui seront le nom du projet, nommé "Project name", et la
durée d'un sprint, nommé "Sprint duration". En bas du formulaire se situeront
deux boutons. Le premier bouton sera nommé "Create project", permettant de créer
un projet avec le nom du projet renseigné (à condition que le nom ne soit pas
vide), avec le champ "Actual sprint name" rempli par la valeur "Sprint #0",
"Progress" qui sera de valeur "0/0" (aucune tache réalisée et aucune tache
attendue au début), et le champ "Actual sprint end date" qui sera calculé à
partir de la date actuelle à laquelle on ajoute la durée d'un sprint renseignée
dans le formulaire de création. Le deuxième bouton quand à lui sera nommé
"Cancel" et permettra d'annuler la création de projet et redirige l'utilisateur
vers la page projectList.php.

### backlog.php

Contient le backlog donc la liste des user story d'un projet visible par un utilisateur connecté.

### addUserStory.php

Contient le formulaire de création d'une user story afin de l'ajouter au backlog
d'un projet.

### connect.php

Contient le code de connexion d'un utilisateur au site internet.

### functions.php

Contient un ensemble de fonctions disponibles pour éviter la duplication de
code.

### constants.php

Contient l'ensemble des constantes du programme.
