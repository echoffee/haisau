# Sprint 2

## Récapitulatif Sprint 1

Difficulté totale : 25
Difficulté des US réalisées : 8
=> 8/25
Velocité de 8

US à replanifier au Sprint 2 : 3, 6, 7, 8, 10, 11, 12
US planifiées de base au Sprint 2 : 9, 13, 14, 15, 16, 19

## User stories impliquées

| Identifiant | Description | Priorité | Difficulté |
|-------------|-------------|----------|------------|
| 3 | En tant que **développeur**, je veux me déconnecter de l'application à tout moment afin de fermer ma session en appuyant sur le bouton "Déconnexion" situé dans la barre des tâches présente sur toutes les pages de l'application, et une fois déconnecté je suis redirige vers la page de connexion.| MEDIUM | 1 |
| 6 | En tant que **développeur**, je veux modifier le nom d'un projet auquel je participe afin de le mettre à jour ou de clarifier sa visée. Cette option sera disponible dans un onglet Settings situé sur la page d'accueil du projet.| HIGH | 1 |
| 7 | En tant que **développeur**, je veux supprimer un projet auquel je participe afin de l'enlever de ma liste de projets. Cette option se trouvera sur la page d'accueil du projet à supprimer représenté par un lien différentiable des autres options (en rouge par exemple), avec une fenêtre pop-up de demande de confirmation avant de supprimer définitivement le projet.| HIGH | 1 |
| 8 | En tant que **développeur**, je veux inviter des développeurs via leur nom d'utilisateur ou leur adresse email à mon projet afin qu'ils puissent travailler dessus. Une fois la création d'un projet validée, l'utilisateur sera redirigé vers la page d'accueil de son nouveau projet, qui contiendra un lien d'invitation à envoyer aux autres développeurs. En plus du lien d'invitation, un champ de recherche sera présent où l'utilisateur pourra y saisir le nom des développeurs à inviter pour leur envoyer directement le lien d'invitation sans passer par un client de messagerie externe.| MEDIUM | 5 |
| 9 | En tant que **développeur**, je veux répondre à une invitation de projet en cliquant sur un lien unique d'invitation afin de travailler ou non dessus. Ce lien redirigera vers une page où l'utilisateur invité devra se connecter si ce n'est pas déjà fait, et cliquer sur un bouton confirmant son choix selon qu'il souhaite ou non rejoindre le projet. La page affichera le nom du projet à rejoindre.| MEDIUM | 5 |
| 10 | En tant que **développeur**, je veux consulter le backlog d'un projet auquel je participe afin de connaître les user stories de ce dernier. Sur la page d'accueil d'un projet, un lien vers le backlog du projet sera présent dans une barre de tâches via un onglet "Backlog", redirigeant vers la page du backlog. Les user stories y seront référencées sous forme de liste.| HIGH | 3 |
| 11 | En tant que **développeur**, je veux ajouter une user story au backlog afin de la rendre lisible par les développeurs. En bas de la liste des user stories, un lien redirigeant vers la page de création d'une user story sera présent. Cette page contiendra un formulaire où l'utilisateur devra obligatoirement y référencer les champs concernant la description, la priorité et la difficulté, et le numéro d'identifiant de cette dernière sera automatiquement défini par le nombre total des US déjà définies + 1.| HIGH | 3 |
| 12 | En tant que **développeur**, je veux modifier une user story afin de la mettre à jour. Sur la liste des user stories, un bouton représenté par une forme de crayon redirigera vers la page d'édition des user stories. Cette page aura la même forme que celle de création d'user story, et sera pré-remplie de ses informations existantes. Les modifications apportées pourront être appliquées à l'aide d'un bouton "Appliquer" ou annulées à l'aide d'un autre bouton "Annuler".| HIGH | 3 |
| 12 | En tant que **développeur**, je veux modifier une user story afin de la mettre à jour. Sur la liste des user stories, un bouton représenté par une forme de crayon redirigera vers la page d'édition des user stories. Cette page aura la même forme que celle de création d'user story, et sera pré-remplie de ses informations existantes. Les modifications apportées pourront être appliquées à l'aide d'un bouton "Appliquer" ou annulées à l'aide d'un autre bouton "Annuler".| HIGH | 3 |
| 13 | En tant que **développeur**, je veux proposer des user stories dans la sandbox de mon projet afin de les rendre visibles par tous les utilisateurs sans impacter le projet. Les user stories seront réparties sur plusieurs onglets, à savoir "Sandbox" et "Backlog".| LOW | 5 |
| 14 | En tant que **développeur**, je veux accéder aux user stories proposées par mon équipe dans la sandbox afin de les inclure ou non dans le backlog du projet. Les user stories pourront présentes dans la sandbox pourront être déplacées dans l'onglet Backlog pour définir l'acceptation de l'US par glissé-déposé.| LOW | 5 |
| 15 | En tant que **développeur**, je veux consulter la liste des sprints afin de voir l'avancement d'un projet. Depuis le tableau de bord d'un projet, le développeur pourra cliquer sur un onglet Sprint pour être redirigé sur une page affichant la liste des sprints, et leur état selon qu'ils soient effectués, en cours ou à venir.| LOW | 3 |
| 16 | En tant que **développeur**, je veux ajouter ou modifier un sprint afin d'organiser l'avancement du projet. Depuis l'onglet Sprint, un bouton Ajouter et un bouton Modifier seront disponibles. Le bouton Modifier permettra de modifier seulement les tâches associées au sprint actuel, tandis que le bouton Ajouter redirigera le développeur vers un formulaire de création de sprint où il devra préciser les tâches qui figureront dans celui-ci ainsi que les durées de chacune.| LOW | 3 |
| 19 | En tant que **développeur**, je veux consulter la liste des tâches associées à un sprint donné afin d'être au courant de l'avancement du travail sur ce sprint. Sur le tableau de bord d'un projet, nous avons un lien pointant sur le sprint en cours, et en cliquant dessus nous arrivons sur la page d'accueil du sprint, qui nous affiche le menu les tâches du sprint, qu'elles soient terminées ou non.| LOW | 3 |

## Tasks

| Identifiant | Description | US | Dépendances | Coût |
|-------------|-------------|----|-------------|------|
| T3d | Design de la page de déconnexion | 3 | Aucune | 0.5jh |
| T3r | Réalisation de la page de déconnexion | 3 | T3d, T0d, T4d | 0.5jh |
| T3td | Design du test de la déconnexion d'un utilisateur | 3 | T3d | 0.5jh |
| T3tr | Réalisation du test de la déconnexion d'un utilisateur | 3 | T3td | 0.5jh |
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
| T9d | Design du mécanisme d'acceptation à une invitation à un projet | 9 | Aucune | 0.5jh |
| T9r | Réalisation du mécanisme d'acceptation à une invitaton à un projet | 9 | T9d, T8d | 1.5jh |
| T9td | Design du test de la fonction d'acceptation d'une invitation à un projet | 9 | T9d | 0.5jh |
| T9tr | Réalisation du test de la fonction d'acceptation d'une invitation à un projet | 9 | T9td | 0.5jh |
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
| T12d | Design du mécanisme de modification d'une user story | 12 | Aucune | 0.5jh |
| T12r | Réalisation du mécanisme de modification d'une user story | 12 | T12d, T0d, T10d | 0.5jh |
| T12td | Design du test de la modification d'une user story | 12 | T12d | 0.5jh |
| T12tr | Réalisation du test de la modification d'une user story | 12 | T12td | 0.5jh |
| T13d | Design de la page d'ajout d'US à la sandbox | 13 | Aucune | 0.5jh |
| T13r | Réalisation de la page d'ajout d'US à la sandbox | 13 | T13d, T0d | 1.5jh |
| T13td | Design du test de l'ajout d'US à la sandbox | 13 | T13d | 0.5jh |
| T13tr | Réalisation du test de l'ajout d'US à la sandbox | 13 | T13td | 0.5jh |
| T14d | Design de la page présentant la sandbox des US | 14 | Aucune | 0.5jh |
| T14r | Réalisation de la page présentant la sandbox des US | 14 | T14d, T0d | 1jh |
| T14td | Design du test de la consultation d'US et d'ajout au BL | 14 | T14d | 0.5jh |
| T14tr | Réalisation du test de la consultation d'US et d'ajout au BL | 14 | T14td | 0.5jh |
| T15d | Design de la page présentant la liste des sprints | 15 | Aucune | 0.5jh |
| T15r | Réalisation de la page présentant la liste des sprints | 15 | T15d, T0d | 1.5jh |
| T15td | Design du test de la consultation de la liste des sprints | 15 | T15d | 0.5jh |
| T15tr | Réalisation du test de la consultation de la liste des sprints | 15 | T15td | 0.5jh |
| T16d | Design du formulaire d'ajout de et modification d'un sprint | 16 | Aucune | 0.5jh |
| T16r | Réalisation du formulaire d'ajout de et modification d'un sprint | 16 | T16d, T0d | 2jh |
| T16td | Design du test de l'ajout et de la modification d'un sprint | 16 | T16d | 0.5jh |
| T16tr | Réalisation du test de l'ajout et de la modification d'un sprint | 16 | T16td | 0.5jh |
| T19d | Design de la page présentant la liste des tâches associées à un sprint | 19 | Aucune | 0.5jh |
| T19r | Réalisation de la page présentant la liste des tâches associées à un sprint | 19 | T19d, T0d, T15d | 1jh |
| T19td | Design du test de la consultation de la liste des tâches associées à un sprint | 19 | T19d | 0.5jh |
| T19tr | Réalisation du test de la consultation de la liste des tâches associées à un sprint | 19 | T19td | 0.5jh |
