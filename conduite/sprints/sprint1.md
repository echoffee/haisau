# Sprint 1

## User stories impliquées


| Identifiant | Description | Priorité | Difficulté |
|-------------|-------------|----------|------------|
| 1 | En tant que **visiteur**, je veux créer un compte sur l'application en paramétrant mes identifiants de connexion tels que mon nom d'utilisateur et mon mot de passe afin de me connecter. Un lien redirigeant vers la création d'un compte utilisateur sera présent dès la page d'accueil de l'application. Les identifiants (*Nom d'utilisateur*, *Mot de passe* et *Adresse mail*) seront obligatoirement à saisir dans un formulaire sur ladite page.| MEDIUM | 2 |
| 2 | En tant qu' **utilisateur**, je veux me connecter à l'application à l'aide de mes identifiants de connexion afin de consulter ou modifier l'état de mes projets.| MEDIUM | 1 |
| 3 | En tant que **développeur**, je veux me déconnecter de l'application à tout moment afin de fermer ma session en appuyant sur le bouton "Déconnexion" situé dans la barre des tâches présente sur toutes les pages de l'application, et une fois déconnecté je suis redirige vers la page de connexion.| MEDIUM | 1 |
| 4 | En tant que **développeur**, une fois connecté, je veux consulter la liste des projets auxquels je participe afin d'être au courant de l'avancement de chacun. Chaque projet sera listé dans l'ordre de leur création, et sera écrit selon la forme (*Nom du projet*, *Nom du sprint actuel*, *Nombre de tâches accomplies/nombre de tâches assignées au sprint*, *Date de fin du sprint*).| HIGH | 3 |
| 5 | En tant que **développeur**, je veux créer un projet sur l'application afin de le gérer. Dans un onglet Projets et sous la liste des projets en cours sera positionné un lien redirigeant vers une page comportant le formulaire de création de projet. Ce formulaire comportera le champ du nom du projet, et la durée constante d'un sprint qui sera non-modifiable par la suite.| HIGH | 2 |
| 6 | En tant que **développeur**, je veux modifier le nom d'un projet auquel je participe afin de le mettre à jour ou de clarifier sa visée. Cette option sera disponible dans un onglet Settings situé sur la page d'accueil du projet.| HIGH | 1 |
| 7 | En tant que **développeur**, je veux supprimer un projet auquel je participe afin de l'enlever de ma liste de projets. Cette option se trouvera sur la page d'accueil du projet à supprimer représenté par un lien différentiable des autres options (en rouge par exemple), avec une fenêtre pop-up de demande de confirmation avant de supprimer définitivement le projet.| HIGH | 1 |
| 8 | En tant que **développeur**, je veux inviter des développeurs via leur nom d'utilisateur ou leur adresse email à mon projet afin qu'ils puissent travailler dessus. Une fois la création d'un projet validée, l'utilisateur sera redirigé vers la page d'accueil de son nouveau projet, qui contiendra un lien d'invitation à envoyer aux autres développeurs. En plus du lien d'invitation, un champ de recherche sera présent où l'utilisateur pourra y saisir le nom des développeurs à inviter pour leur envoyer directement le lien d'invitation sans passer par un client de messagerie externe.| MEDIUM | 5 |
| 10 | En tant que **développeur**, je veux consulter le backlog d'un projet auquel je participe afin de connaître les user stories de ce dernier. Sur la page d'accueil d'un projet, un lien vers le backlog du projet sera présent dans une barre de tâches via un onglet "Backlog", redirigeant vers la page du backlog. Les user stories y seront référencées sous forme de liste.| HIGH | 3 |
| 11 | En tant que **développeur**, je veux ajouter une user story au backlog afin de la rendre lisible par les développeurs. En bas de la liste des user stories, un lien redirigeant vers la page de création d'une user story sera présent. Cette page contiendra un formulaire où l'utilisateur devra obligatoirement y référencer les champs concernant la description, la priorité et la difficulté, et le numéro d'identifiant de cette dernière sera automatiquement défini par le nombre total des US déjà définies + 1.| HIGH | 3 |
| 12 | En tant que **développeur**, je veux modifier une user story afin de la mettre à jour. Sur la liste des user stories, un bouton représenté par une forme de crayon redirigera vers la page d'édition des user stories. Cette page aura la même forme que celle de création d'user story, et sera pré-remplie de ses informations existantes. Les modifications apportées pourront être appliquées à l'aide d'un bouton "Appliquer" ou annulées à l'aide d'un autre bouton "Annuler".| HIGH | 3 |

## Tasks

| Identifiant | Description | US | Dépendances | Coût |
|-------------|-------------|----|-------------|------|
| T0d | Définir la structure de la base de données | Aucune | Aucune | 0.5jh |
| T0r | Mettre en place la base de données | Aucune | T0d | 1jh |
| T0td | Design du test de la bonne implémentation de la base de données | Aucune | T0d | 0.5jh |
| T0tr | Réalisation du test de la bonne implémentation de la base de données | Aucune | T0td | 0.5jh |
| T1d | Design de la page et du formulaire de création de compte | 1 | Aucune | 0.5jh |
| T1r | Réalisation de la page et du formulaire de création de compte | 1 | T0d, T1d, T2d | 1jh |
| T1td | Design du test de la création d'un compte utilisateur | 1 | T1d | 0.5jh |
| T1tt | Réalisation du test de la création d'un compte utilisateur | 1 | T1td | 0.5jh |
| T2d | Design de la page de connexion | 2 | Aucune | 0.5jh |
| T2r | Réalisation de la page de connexion | 2 | T0d, T2d | 0.5jh |
| T2td | Design du test de la connexion d'un utilisateur | 2 | T2d | 0.5jh |
| T2tr | Réalisation du test de la connexion d'un utilisateur | 2 | T2td | 0.5jh |
| T3d | Design de la page de déconnexion | 3 | Aucune | 0.5jh |
| T3r | Réalisation de la page de déconnexion | 3 | T3d, T0d, T4d | 0.5jh |
| T3td | Design du test de la déconnexion d'un utilisateur | 3 | T3d | 0.5jh |
| T3tr | Réalisation du test de la déconnexion d'un utilisateur | 3 | T3td | 0.5jh |
| T4d | Design de la page présentant la liste des projets en cours | 4 | Aucune | 0.5jh |
| T4r | Réalisation de la page présentant la liste des projets en cours | 4 | T4d, T0d, T2d | 1.5jh |
| T4td | Design du test de la consultation de la liste des projets en cours | 4 | T4d | 0.5jh |
| T4tr | Réalisation du test de la consultation de la liste des projets en cours | 4 | T4td | 0.5jh |
| T5d | Design de la page de création de projet | 5 | Aucune | 0.5jh |
| T5r | Réalisation de la page de création de projet | 5 | T5d, T0d, T4d | 1jh |
| T5td | Design du test de la création d'un projet | 5 | T5d | 0.5jh |
| T5tr | Réalisation du test de la création d'un projet | 5 | T5td | 0.5jh |
| T6d | Design du mécanisme de modification du nom d'un projet | 6 | Aucune | 0.5jh |
| T6r | Réalisation du mécanisme de modification du nom d'un projet | 6 | T6d, T0d, T4d | 0.5jh |
| T6td | Design du test de la modification du nom d'un projet | 6 | T6d | 0.5jh |
| T6tr | Réalisation du test de la modification du nom d'un projet | 6 | T6td | 0.5jh |
| T7d | Design du mécanisme de suppression d'un projet | 7 | Aucune | 0.5jh |
| T7r | Réalisation du mécanisme de suppression d'un projet | 7 | T7d, T0d, T4d | 0.5jh |
| T7td | Design du test de la suppression d'un projet | 7 | T7d | 0.5jh |
| T7tr | Réalisation du test de la suppression d'un projet | 7 | T7td | 0.5jh |
| T8d | Design de la page permettant d'inviter d'autres développeurs à travailler sur un projet | 8 | Aucune | 0.5jh |
| T8r | Réalisation de la page permettant d'inviter d'autres développeurs à travailler sur un projet | 8 | T8d, T4d | 2.5jh |
| T8td | Design du test de la fonction d'invitation d'autre développeurs sur un projet | 8 | T8d | 0.5jh |
| T8tr | Réalisation du test de la fonction d'invitation d'autre développeurs sur un projet | 8 | T8td | 0.5jh |
| T10d | Design de la page présentant le backlog | 10 | Aucune | 0.5jh |
| T10r | Réalisation de la page présentant le backlog | 10 | T10d, T0d, T4d | 1jh |
| T10td | Design du test de la consultation du backlog | 10 | T10d | 0.5jh |
| T10tr | Réalisation du test de la consultation du backlog | 10 | T10td | 0.5jh |
| T11d | Design de la page et du formulaire permettant d'ajouter une user story | 11 | Aucune | 0.5jh |
| T11r | Réalisation de la page et du formulaire permettant d'ajouter une user story | 11 | T11d, T0d, T10d | 1jh |
| T11td | Design du test de l'ajout d'une user story au backlog | 11 | T11d | 0.5jh |
| T11tr | Réalisation du test de l'ajout d'une user story au backlog | 11 | T11td | 0.5jh |
| T12d | Design du mécanisme de modification d'une user story | 12 | Aucune | 0.5jh |
| T12r | Réalisation du mécanisme de modification d'une user story | 12 | T12d, T0d, T10d | 0.5jh |
| T12td | Design du test de la modification d'une user story | 12 | T12d | 0.5jh |
| T12tr | Réalisation du test de la modification d'une user story | 12 | T12td | 0.5jh |
