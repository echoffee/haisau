# haisau
Conduite de projet groupe 2.6.

## User Stories

### Définitions

**Application** représente l'outil de gestion de projet que nous développons au cours de cette UE.

**Visiteur** représente une personne accédant au site internet sans avoir créé
de compte au préalable.

**Utilisateur** représente une personne qui utilise l'application, pouvant être
le propriétaire d'un projet ou bien un développeur travaillant pour un
propriétaire.

**Développeur** représente un utilisateur de l'application participant à un
projet enregistré sur celle-ci. Le développeur a des des droits de gestion du
projet. Il n'y a a pas de différence de droits entre le créateur du projet et
les autres contributeurs.

**Backlog** représente une liste des user stories, accessible par tous les
développeurs à n'importe quel moment du projet.

**User story/stories (US)**  représente une ligne dans le backlog comprenant les
champs suivant : numéro d'identification, description, priorité et indice de
difficulté. Un ensemble de tâches sera associé au cours d'un sprint à cette US.

**Sprint** représente la composition d'un identifiant et d'un ensemble de
tâches. Les dates de début et fin du sprint sont définies automatiquement en
fonction de la date de début du projet et d'une période constante définie en
début de sprint. Les sprints ont également la même difficulté, calculé par la
somme des difficultés de chaque tâche.

**Tâche**  représente la composition d'un identifiant, d'une brève description,
un ensemble de tests associés ainsi qu'un état (TODO, IN-PROGRESS, DONE/UNDONE).

**Test** représente la composition d'un nom, du résultat attendu au test ainsi
que l'adresse de la classe de test et la méthode associée au test.

**Bug** représente une anomalie dans le programme lié une tâche, et
pourra être différencié visuellement des autres tâches (couleur, préfixe au nom
ou autre).

**Sandbox** représente la section du site où de nouvelles US sont suggérées,
en attendant d'être examinées de sorte à ce que si l'US s'avère être jugée
intéressante par les autres développeurs du projet, elle puisse être ajoutée au
backlog.

### Liste
| Identifiant | Description | Priorité | Difficulté |
|-------------|-------------|----------|------------|
| 1 | En tant que **visiteur**, je veux créer un compte sur l'application en paramétrant mes identifiants de connexion tels que mon nom d'utilisateur et mon mot de passe afin de me connecter. Un lien redirigeant vers la création d'un compte utilisateur sera présent dès la page d'accueil de l'application. Les identifiants (*Nom d'utilisateur*, *Mot de passe* et *Adresse mail*) seront obligatoirement à saisir dans un formulaire sur ladite page.|  | 1 |
| 2 | En tant qu' **utilisateur**, je veux me connecter à l'application à l'aide de mes identifiants de connexion afin de consulter ou modifier l'état de mes projets.| | 1 |
| 3 | En tant que **développeur**, je veux me déconnecter de l'application à tout moment afin de fermer ma session en appuyant sur le bouton "Déconnexion" situé dans la barre des tâches présente sur toutes les pages de l'application, et une fois déconnecté je suis redirige vers la page de connexion.| | 1 |
| 4 | En tant que **développeur**, une fois connecté, je veux consulter la liste des projets auxquels je participe afin d'être au courant de l'avancement de chacun. Chaque projet sera listé dans l'ordre de leur création, et sera écrit selon la forme (*Nom du projet*, *Nom du sprint actuel*, *Nombre de tâches accomplies/nombre de tâches assignées au sprint*, *Date de fin du sprint*).| | 1 |
| 5 | En tant que **développeur**, je veux créer un projet sur l'application afin de le gérer. Dans un onglet Projets et sous la liste des projets en cours sera positionné un lien redirigeant vers une page comportant le formulaire de création de projet. Ce formulaire comportera le champ du nom du projet, et la durée constante d'un sprint qui sera non-modifiable par la suite.| | 1 |
| 6 | En tant que **développeur**, je veux modifier le nom d'un projet auquel je participe afin de le mettre à jour ou de clarifier sa visée. Cette option sera disponible dans un onglet Settings situé sur la page d'accueil du projet.| | 1 |
| 7 | En tant que **développeur**, je veux supprimer un projet auquel je participe afin de l'enlever de ma liste de projets. Cette option se trouvera sur la page d'accueil du projet à supprimer représenté par un lien différentiable des autres options (en rouge par exemple), avec une fenêtre pop-up de demande de confirmation avant de supprimer définitivement le projet.| | 1 |
| 8 | En tant que **développeur**, je veux inviter des développeurs via leur nom d'utilisateur ou leur adresse email à mon projet afin qu'ils puissent travailler dessus. Une fois la création d'un projet validée, l'utilisateur sera redirigé vers la page d'accueil de son nouveau projet, qui contiendra un lien d'invitation à envoyer aux autres développeurs. En plus du lien d'invitation, un champ de recherche sera présent où l'utilisateur pourra y saisir le nom des développeurs à inviter pour leur envoyer directement le lien d'invitation sans passer par un client de messagerie externe.| | 1 |
| 9 | En tant que **développeur**, je veux répondre à une invitation de projet en cliquant sur un lien unique d'invitation afin de travailler ou non dessus. Ce lien redirigera vers une page où l'utilisateur invité devra se connecter si ce n'est pas déjà fait, et cliquer sur un bouton confirmant son choix selon qu'il souhaite ou non rejoindre le projet. La page affichera le nom du projet à rejoindre.| | 1 |
| 10 | En tant que **développeur**, je veux consulter le backlog d'un projet auquel je participe afin de connaître les user stories de ce dernier. Sur la page d'accueil d'un projet, un lien vers le backlog du projet sera présent dans une barre de tâches via un onglet "Backlog", redirigeant vers la page du backlog. Les user stories y seront référencées sous forme de liste.| | 1 |
| 11 | En tant que **développeur**, je veux ajouter une user story au backlog afin de la rendre lisible par les développeurs. En bas de la liste des user stories, un lien redirigeant vers la page de création d'une user story sera présent. Cette page contiendra un formulaire où l'utilisateur devra obligatoirement y référencer les champs concernant la description, la priorité et la difficulté, et le numéro d'identifiant de cette dernière sera automatiquement défini par le nombre total des US déjà définies + 1.| | 1 |
| 12 | En tant que **développeur**, je veux modifier une user story afin de la mettre à jour. Sur la liste des user stories, un bouton représenté par une forme de crayon redirigera vers la page d'édition des user stories. Cette page aura la même forme que celle de création d'user story, et sera pré-remplie de ses informations existantes. Les modifications apportées pourront être appliquées à l'aide d'un bouton "Appliquer" ou annulées à l'aide d'un autre bouton "Annuler".| | 1 |
| 13 | En tant que **développeur**, je veux proposer des user stories dans la sandbox de mon projet afin de les rendre visibles par tous les utilisateurs sans impacter le projet. Les user stories seront réparties sur plusieurs onglets, à savoir "Sandbox" et "Backlog".| | 1 |
| 14 | En tant que **développeur**, je veux accéder aux user stories proposées par mon équipe dans la sandbox afin de les inclure ou non dans le backlog du projet. Les user stories pourront présentes dans la sandbox pourront être déplacées dans l'onglet Backlog pour définir l'acceptation de l'US par glissé-déposé.| | 1 |
| 15 | En tant que **développeur**, je veux consulter la liste des sprints afin de voir l'avancement d'un projet. Depuis le tableau de bord d'un projet, le développeur pourra cliquer sur un onglet Sprint pour être redirigé sur une page affichant la liste des sprints, et leur état selon qu'ils soient effectués, en cours ou à venir.| | 1 |
| 16 | En tant que **développeur**, je veux ajouter ou modifier un sprint afin d'organiser l'avancement du projet. Depuis l'onglet Sprint, un bouton Ajouter et un bouton Modifier seront disponibles. Le bouton Modifier permettra de modifier seulement les tâches associées au sprint actuel, tandis que le bouton Ajouter redirigera le développeur vers un formulaire de création de sprint où il devra préciser les tâches qui figureront dans celui-ci ainsi que les durées de chacune.| | 1 |
| 17 | En tant que **développeur**, je veux uploader en fin de sprint la release du projet que je gère afin de la rendre téléchargeable par les utilisateurs. Dans l'onglet Sprint, un bouton Upload sera disponible à côté des informations sur le sprint courant pour permettre d'upload la dernière release du projet et ainsi permettre à n'importe quel utilisateur relatif à ce projet de télécharger cette release. Ainsi une trace sera gardée de l'évolution des releases, avec une release par sprint.| | 1 |
| 18 | En tant qu' **utilisateur**, je veux télécharger la release d'un sprint d'un projet auquel je participe afin de pouvoir l'exécuter localement. Juste à côté du bouton Upload, un bouton Download sera disponible une fois la release uploadée pour un sprint, permettant de la télécharger.| | 1 |
| 19 | En tant que **développeur**, je veux consulter la liste des tâches associées à un sprint donné afin d'être au courant de l'avancement du travail sur ce sprint. Sur le tableau de bord d'un projet, nous avons un lien pointant sur le sprint en cours, et en cliquant dessus nous arrivons sur la page d'accueil du sprint, qui nous affiche le menu les tâches du sprint, qu'elles soient terminées ou non.| 1 |
| 20 | En tant que **développeur**, je veux ajouter une tâche à la liste de tâches liée à un sprint afin qu'elle soit listée avec les autres tâches et visible par les autres utilisateurs. Dans le menu des tâches d'un sprint nous avons un bouton Ajouter pour ajouter une tâche au sprint, qui sera directement ajoutée à la suite des autres avec un statut TODO.| | 1 |
| 21 | En tant que **développeur**, je veux modifier une tâche comprise dans le sprint courant afin de mettre à jour son statut. Depuis le menu des tâches nous avons la possibilité de cliquer sur une tâche et ensuite cliquer sur le bouton Modifier de la tâche pour modifier des informations sur celle-ci comme son statut.| | 1 |
| 22 | En tant que **développeur**, je veux ajouter des tests à une tâche et modifier leur état par la suite, afin de vérifier le bon fonctionnement de la réalisation de la tâche. Depuis le menu des tâches nous avons la possibilité de cliquer sur une tâche et ensuite cliquer sur le bouton Ajouter de la tâche pour ajouter des informations sur celle-ci comme des tests relatifs à cette dernière.| | 1 |
| 23 | En tant que **développeur**, je veux signaler à l'équipe un bug relatif à une tâche présente dans un sprint afin de le corriger par la suite. Depuis le menu des tâches d'un sprint nous avons la possibilité, en modifiant une tâche dans un statut IN PROGRESS, d'exprimer le fait que la tâche comporte un bug, en ajoutant un commentaire si besoin pour décrire le bug rencontré. La tâche comportant un bug sera identifiable des autres tâches par un logo en croix sur celle-ci.| | 1 |
| 24 | En tant que **développeur**, je veux observer le Burn-Down Chart de mon sprint afin d'estimer la charge de travail restante en fonction du temps. Nous pourrons le consulter depuis la page d'accueil du sprint actuel, à côté du menu des tâches.| | 1 |
