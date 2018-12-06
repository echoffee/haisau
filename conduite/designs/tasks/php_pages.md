# Design des différentes pages php de l'application

### index.php

Contient la page d'accueil de notre projet, qui est la page de connexion
permettant à un utilisateur de se connecter grâce à un champ d'identifiant
USERNAME et un autre champ PASSWORD pour le mot de passe et vérifie que
l'utilisateur est déjà inscrit sur le site. Un bouton SIGN IN permettra de
soumette la valeur es ces champs pour voir s'il existe un tel utilisateur dans
la base de donnée, et si c'est le cas, redirige l'utilisateur vers la page
projectList.php. De plus, un lien de label "New user ? Create an account"
redirigeant vers la page de création de compte register.php sera disponible
sur cette page. Pour toute autre page que celle-ci et register.php, nous auront
un bouton "log out" disponible et visible nous permettra de nous déconnecter de
notre session, nous redirigeant ainsi vers la page disconnect.php.

### register.php

Contient le formulaire de création de compte permettant à un utilisateur de
se connecter par la suite. Ce formulaire contient les champs suivants : "adresse
email", "username", "password". Tout en bas du formulaire se trouve un bouton
"Create an account" qui inscrit l'utilisateur dans la base de données. Une fois
l'utilisateur inscrit, il pourra se connecter depuis index.php.

### disconnect.php

Contient une page spécifiant que l'utilisateur s'est bien déconnecté. Cette page
contient le texte "You logged out successfully" qui apparait de manière claire
et visible par l'utilisateur, puis le redirige vers la page de connexion, soit
index.php.

### projectList.php

Contient la liste des projets visibles par un utilisateur connecté. Chaque
projet contient les champs suivants : "Project name", "Current sprint name",
"Progress" (représentant le Nombre de tâches accomplies/nombre de tâches
assignées au sprint), et "Current sprint end date". La page contiendra en haut de
la liste des projets un bouton "Create new project" redirigeant vers la page de
création de projet createProject.php. A côté du nom de chaque projet dans la
liste apparaîtra un bouton "Modify" permettant de modifier le nom du projet
en rentrant un nouveau nom manuellement, modifiant ainsi le nom du projet dans
la base de données et actualisant le nom du projet sur cette page. Il y aura
également un bouton "Delete" à côté de chaque projet qui, une fois cliqué,
fera apparaître une fenêtre pop-up de confirmation permettant de confirmer le
choix de supprimer le projet à qui le bouton est affilié. La fenêtre pop up
contiendra un texte "Do you want to delete this project ?" et deux
boutons : un bouton "Confirm" et un bouton "Cancel". Un bouton "Invite user on
this project" permettra d'inviter un autre utilisateur à rejoindre le projet
en question, en effectuant une redirection vers la page inviteUser.php puis
en précisant l'utilisateur à inviter au projet depuis cette page.

### createProject.php

Contient le formulaire de création d'un projet, permettant de créer et
d'assigner un projet à un utilisateur. Le formulaire contiendra seulement deux
champs à renseigner qui seront le nom du projet, nommé "Project name", et la
durée d'un sprint, nommé "Sprint duration". En bas du formulaire se situeront
deux boutons. Le premier bouton sera nommé "Create project", permettant de créer
un projet avec le nom du projet renseigné (à condition que le nom ne soit pas
vide), avec le champ "Current sprint name" rempli par la valeur "Sprint #0",
"Progress" qui sera de valeur "0/0" (aucune tache réalisée et aucune tache
attendue au début), et le champ "Current sprint end date" qui sera calculé à
partir de la date actuelle à laquelle on ajoute la durée d'un sprint renseignée
dans le formulaire de création. Le deuxième bouton quand à lui sera nommé
"Cancel" et permettra d'annuler la création de projet et redirige l'utilisateur
vers la page projectList.php.

### backlog.php

Contient le backlog donc la liste des user story d'un projet visible par un
utilisateur connecté. Chaque backlog est représenté par un grand tableau
contenant les colonnes suivantes : "ID", "Description", "Priority", et
"Difficulty". Chaque ligne du tableau représentera une user story et aura chacun
de ses champs renseigné. La page contiendra en haut de la liste des projets un
bouton "Add new US", redirigeant l'utilisateur vers la page de création
d'user stories nommée addUserStory.php. A côté du nom de chaque issue dans la
liste apparaîtra un bouton "Modifier" permettant de modifier la description de
l'issue, sa priorité ou sa difficulté (pas son ID), et mettra ces informations à
jour sur la page actuelle. Il y aura également un bouton "Supprimer" à côté de
chaque issue qui, une fois cliqué, fera apparaître une fenêtre pop-up de
confirmation permettant de confirmer le choix de supprimer l'issue à qui le
bouton est affilié. La fenêtre pop up contiendra un texte "Do you want to delete
this issue ?" et deux boutons : un bouton "Confirm" et un bouton "Cancel".

### addUserStory.php

Contient le formulaire de création d'une user story afin de l'ajouter au backlog
d'un projet. Le formulaire contiendra trois champs à renseigner : "Description",
pour définir la description d'une user story, "Priority" pour définir sa
priorité, et "Difficulty" permettant de définir sa difficulté. En bas du
formulaire se situeront deux boutons. Le premier bouton sera nommé "Add to
backlog", permettant d'ajouter l'user story au backlog avec les valeurs des
champs renseignés et l'ID de l'user story sera calculé à partir du dernier ID
donné à une US déjà contenue dans le backlog + 1, un deuxième bouton "Add to
Sandbox" permettant d'ajouter l'user story à la sandbox sur le même principe
que l'ajout d'une US au backlog et enfin le troisième bouton quand à lui
sera nommé "Cancel" et permettra d'annuler l'ajout d'une user story et
redirigera l'utilisateur vers la page backlog.php.

### sandbox.php

Contient la liste des user stories en attente de validation, ajoutées
précédemment par l'utilisateur via la page addUserStory.php. Cette page
aura les mêmes attributs que la page backlog.php, avec pour seul changement le
bouton "Add new US" qui n'existera plus, et un bouton "Add to backlog" sera
disponible pour chaque US dans la sandbox permettant de rediriger l'user story
en question vers le backlog.

### sprintList.php

Contient la liste des sprint d'un projet auquel l'utilisateur participe. Chaque
sprint contient les champs suivants : "Sprint ID", défini automatiquement
en s'incrémentant de 1 par rapport à l'ID du sprint préciédent, "Number of
tasks" représentant le nombre de tâches contenues dans le sprint, "Sprint
start date" et "Sprint end date" qui seront définies automatiquement par la date
de début de projet et la durée constante d'un sprint, et "difficulty"
représentant la difficulté du sprint. A la fin du sprint actuel, un nouveau
sprint est créé avec un ID et des dates de début et de fin générés
automatiquement, les tâches devront être ajoutées manuellement au sprint par un
bouton "Add tasks" disponible à côté du sprint auquel on veut rajouter des
tâches, nous redirigeant vers la page taskList.php permettant de créer de
nouvelles tâches pour le sprint. Un bouton "Delete sprint" à côté de chaque
sprint  permettra de supprimer le sprint en question.

### taskList.php

Contient la liste des tâches d'un sprint d'un projet auquel l'utilisateur
participe. Lors de la création d'un nouveau sprint, la liste des tâches est
vide. Un bouton "Add task" sur la page situé au dessus des tâches déjà présentes
s'il y en a (sinon en haut de page) permettra de créer une nouvelle tâche en
renseignant un champ "Description" qui est une brève description de la tâche.
Il sera automatiquement assigné à la tâche un identifiant par un champ "Task ID"
et un état dans un champ "State" qui sera toujours initialisé par la valeur
TODO. Un champ "Number of associated tests" sera également présent pour indiquer
le nombre de tests associés à la tâche. Un bouton "Delete task" à côté de chaque
task permettra de supprimer la tâche en question.

### createTask.php

Contient le formulaire de création d'une tâche, permettant de créer et
d'assigner une tâche à un sprint. Le formulaire contiendra seulement un
champ à renseigner qui sera une brève description de la tâche. En bas du
formulaire se situeront deux boutons. Le premier bouton sera nommé "Add
task", permettant de créer une tâche et de l'assigner au sprint auquel elle est
associée, avec le champ "State" rempli par la valeur "TODO", et le champs
"Number of associated tests" rempli par le nombre 0 par défaut. Le deuxième
bouton quand à lui sera nommé "Cancel" et permettra d'annuler la création de la
tâche et redirige l'utilisateur vers la page taskList.php.

### inviteUser.php

Contient un formulaire où l'on peut entrer une adresse email d'un utilisateur
à inviter via un champ nommé "Email adress" et un bouton "Invite to the project"
situé juste en dessous du champ. Le projet en question sera référencé par son
nom en tant que paramètre de l'URL.

### acceptInvite.php

Contient une page avec un texte "Do you want to join the project " suivi du nom
du projet auquel l'utilisateur est invité, puis deux boutons en dessous "Accept"
et "Decline" permettant d'accepter ou de refuser l'invitation au projet. Une
fois le choix de l'utilisateur effectué, il est redirigé vers la liste des
projets projectList.php où le projet auquel il participe désormais apparaît
s'il a accepté l'invitation, sinon il ne voit que sa liste de projet auquel il
participait déjà.

### uploadRelease.php

Contient une page avec trois boutons, un premier nommé "Upload" qui ouvre un
sélecteur de fichiers lorsque l'on clique dessus. Il permet à l'utilisateur de
sélectionner la release de son projet qu'il veut uploader pour un sprint
précis. Les deux autres boutons sont les boutons "Confirm" et "Cancel", 
permettant respectivement de valider l'upload du fichier sélectionné via le 
bouton plus haut, ou bien d'annuler l'upload et de revenir sur la page précédente, 
qui est la page du sprint du projet depuis lequel l'utilisateur voulait uploader sa 
release. Si l'utilisateur clique sur le bouton "Confirm" sans avoir choisi auparavant 
un fichier à uploader, alors un message d'erreur apparaît, "You must have choosen a 
file to upload first".

### downloadRelease.php

Contient une page avec deux boutons, le premier nommé "Download" qui
télécharge la release en question lorsque l'on clique dessus. Le deuxième bouton
est le bouton "Cancel", permettant de revenir sur la page précédente, qui est la
page du sprint du projet depuis lequel l'utilisateur voulait télécharger la
release. Si l'utilisateur clique sur le bouton "Download" et qu'aucune release
n'a été uploadée auparavant, alors un message d'erreur apparaît, "There is no 
release avalaible to download for this sprint yet".

### createTest.php

Contient le formulaire de création d'un test, permettant de créer et
d'assigner un test à une tâche. Le formulaire contiendra seulement 3
champs à renseigner qui seront le nom du test, et une description du
fonctionnement et du résultat attendu pour ce test. En bas du
formulaire se situeront deux boutons. Le premier bouton sera nommé "Add
test", permettant de créer un test et de l'assigner à la tâche auquel il est
associé. Le deuxième bouton quand à lui sera nommé "Cancel" et permettra
d'annuler la création du test et redirige l'utilisateur vers la page
taskList.php.

### reportBug.php

Contient le formulaire de rapport de bug. Il contient une zone de texte qui sera
à remplir par l'utilisateur qui expliquera un bug qu'il a rencontré sur le site,
ainsi que deux boutons, "Report bug" et "Cancel" qui serviront respectivement à
envoyer le rapport de bug dans la base de donnée pour le premier, et à annuler
le rapport de bug pour le second. Si aucun texte n'est rentré dans la zone de
texte et que l'utilisateur tente de cliquer sur le bouton "Report bug", un
message d'erreur apparaît "You must have written a bug to report first".

### burnDownChart.php



### connect.php

Contient le code qui permet d'établir une connexion vers la base de donnée mysql.

### functions.php

Contient un ensemble de fonctions disponibles pour éviter la duplication de
code.

### constants.php

Contient l'ensemble des constantes du programme.
