# Design des différentes pages php de l'application

### index.php

Contient la page d'accueil de notre projet, qui est la page de connexion
permettant à un utilisateur de se connecter s'il est déjà inscrit sur le site.
Un lien vers la page de création de compte sera disponible. sera disponible sur
cette page.

### register.php

Contient le formulaire de création de compte permettant à un utilisateur de
se connecter par la suite. Une fois l'utilisateur inscrit, il pourra se
connecter depuis index.php.

### disconnect.php

Contient une page spécifiant que l'utilisateur s'est bien déconnecté avant
d'être redirigé vers l'écran de connexion, soit index.php.

### projectsList.php

Contient la liste des projets visibles par un utilisateur connecté.

### createProject.php

Contient le formulaire de création d'un projet, permettant de créer et
d'assigner un projet à un utilisateur.

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
