# Sprint 3

## Récapitulatif Sprint 2

Difficulté totale : 41
Difficulté des US réalisées : 18
=> 18/41
Vélocité de 18

US à replanifier au Sprint 3 : 8, 9, 13, 14, 16
US planifiées de base au Sprint 3 : 17, 18, 20, 21, 22, 23, 24

## User stories impliquées

| Identifiant | Description | Priorité | Difficulté |
|-------------|-------------|----------|------------|
| 8 | En tant que **développeur**, je veux inviter des développeurs via leur nom d'utilisateur ou leur adresse email à mon projet afin qu'ils puissent travailler dessus. Une fois la création d'un projet validée, l'utilisateur sera redirigé vers la page d'accueil de son nouveau projet, qui contiendra un lien d'invitation à envoyer aux autres développeurs. En plus du lien d'invitation, un champ de recherche sera présent où l'utilisateur pourra y saisir le nom des développeurs à inviter pour leur envoyer directement le lien d'invitation sans passer par un client de messagerie externe.| MEDIUM | 5 |
| 9 | En tant que **développeur**, je veux répondre à une invitation de projet en cliquant sur un lien unique d'invitation afin de travailler ou non dessus. Ce lien redirigera vers une page où l'utilisateur invité devra se connecter si ce n'est pas déjà fait, et cliquer sur un bouton confirmant son choix selon qu'il souhaite ou non rejoindre le projet. La page affichera le nom du projet à rejoindre.| MEDIUM | 5 |
| 13 | En tant que **développeur**, je veux proposer des user stories dans la sandbox de mon projet afin de les rendre visibles par tous les utilisateurs sans impacter le projet. Les user stories seront réparties sur plusieurs onglets, à savoir "Sandbox" et "Backlog".| LOW | 5 |
| 14 | En tant que **développeur**, je veux accéder aux user stories proposées par mon équipe dans la sandbox afin de les inclure ou non dans le backlog du projet. Les user stories pourront présentes dans la sandbox pourront être déplacées dans l'onglet Backlog pour définir l'acceptation de l'US par glissé-déposé.| LOW | 5 |
| 16 | En tant que **développeur**, je veux ajouter ou modifier un sprint afin d'organiser l'avancement du projet. Depuis l'onglet Sprint, un bouton Ajouter et un bouton Modifier seront disponibles. Le bouton Modifier permettra de modifier seulement les tâches associées au sprint actuel, tandis que le bouton Ajouter redirigera le développeur vers un formulaire de création de sprint où il devra préciser les tâches qui figureront dans celui-ci ainsi que les durées de chacune.| LOW | 3 |
| 17 | En tant que **développeur**, je veux uploader en fin de sprint la release du projet que je gère afin de la rendre téléchargeable par les utilisateurs. Dans l'onglet Sprint, un bouton Upload sera disponible à côté des informations sur le sprint courant pour permettre d'upload la dernière release du projet et ainsi permettre à n'importe quel utilisateur relatif à ce projet de télécharger cette release. Ainsi une trace sera gardée de l'évolution des releases, avec une release par sprint.| LOW | 5 |
| 18 | En tant qu' **utilisateur**, je veux télécharger la release d'un sprint d'un projet auquel je participe afin de pouvoir l'exécuter localement. Juste à côté du bouton Upload, un bouton Download sera disponible une fois la release uploadée pour un sprint, permettant de la télécharger.| LOW | 2 |
| 20 | En tant que **développeur**, je veux ajouter une tâche à la liste de tâches liée à un sprint afin qu'elle soit listée avec les autres tâches et visible par les autres utilisateurs. Dans le menu des tâches d'un sprint nous avons un bouton Ajouter pour ajouter une tâche au sprint, qui sera directement ajoutée à la suite des autres avec un statut TODO.| LOW | 3 |
| 21 | En tant que **développeur**, je veux modifier une tâche comprise dans le sprint courant afin de mettre à jour son statut. Depuis le menu des tâches nous avons la possibilité de cliquer sur une tâche et ensuite cliquer sur le bouton Modifier de la tâche pour modifier des informations sur celle-ci comme son statut.| LOW | 3 |
| 22 | En tant que **développeur**, je veux ajouter des tests à une tâche et modifier leur état par la suite, afin de vérifier le bon fonctionnement de la réalisation de la tâche. Depuis le menu des tâches nous avons la possibilité de cliquer sur une tâche et ensuite cliquer sur le bouton Ajouter de la tâche pour ajouter des informations sur celle-ci comme des tests relatifs à cette dernière.| LOW | 3 |
| 23 | En tant que **développeur**, je veux signaler à l'équipe un bug relatif à une tâche présente dans un sprint afin de le corriger par la suite. Depuis le menu des tâches d'un sprint nous avons la possibilité, en modifiant une tâche dans un statut IN PROGRESS, d'exprimer le fait que la tâche comporte un bug, en ajoutant un commentaire si besoin pour décrire le bug rencontré. La tâche comportant un bug sera identifiable des autres tâches par un logo en croix sur celle-ci.| LOW | 3 |
| 24 | En tant que **développeur**, je veux observer le Burn-Down Chart de mon sprint afin d'estimer la charge de travail restante en fonction du temps. Nous pourrons le consulter depuis la page d'accueil du sprint actuel, à côté du menu des tâches.| LOW | 5 |

## Tasks

| Identifiant | Description | US | Dépendances | Coût |
|-------------|-------------|----|-------------|------|
| T8d | Design de la page permettant d'inviter d'autres développeurs à travailler sur un projet grâce un lien unique envoyé par email | 8 | Aucune | 0.5jh |
| T8r | Réalisation de la page permettant d'inviter d'autres développeurs à travailler sur un projet | 8 | T8d, T4d | 2.5jh |
| T8td | Design du test de la fonction d'invitation d'autre développeurs sur un projet | 8 | T8d | 0.5jh |
| T8tr | Réalisation du test de la fonction d'invitation d'autre développeurs sur un projet | 8 | T8td | 0.5jh |
| T9d | Design du mécanisme d'acceptation à une invitation à un projet par un lien reçu par email, redirigeant vers une page permettant de confirmer ou non de rejoindre le projet auquel l'utilisateur est invité | 9 | Aucune | 0.5jh |
| T9r | Réalisation du mécanisme d'acceptation à une invitaton à un projet | 9 | T9d, T8d | 1.5jh |
| T9td | Design du test de la fonction d'acceptation d'une invitation à un projet | 9 | T9d | 0.5jh |
| T9tr | Réalisation du test de la fonction d'acceptation d'une invitation à un projet | 9 | T9td | 0.5jh |
| T13d | Design de la page d'ajout d'US à la sandbox de la même manière que l'on ajoute une US au backlog | 13 | Aucune | 0.5jh |
| T13r | Réalisation de la page d'ajout d'US à la sandbox | 13 | T13d, T0d | 1.5jh |
| T13td | Design du test de l'ajout d'US à la sandbox | 13 | T13d | 0.5jh |
| T13tr | Réalisation du test de l'ajout d'US à la sandbox | 13 | T13td | 0.5jh |
| T14d | Design de la page présentant la sandbox des US qui sera représenté sous la même forme que la page d'un backlog  | 14 | Aucune | 0.5jh |
| T14r | Réalisation de la page présentant la sandbox des US | 14 | T14d, T0d | 1jh |
| T14td | Design du test de la consultation d'US et d'ajout au BL | 14 | T14d | 0.5jh |
| T14tr | Réalisation du test de la consultation d'US et d'ajout au BL | 14 | T14td | 0.5jh |
| T16d | Design du formulaire d'ajout de et modification d'un sprint en insérant des tâches à un sprint | 16 | Aucune | 0.5jh |
| T16r | Réalisation du formulaire d'ajout de et modification d'un sprint | 16 | T16d, T0d | 2jh |
| T16td | Design du test de l'ajout et de la modification d'un sprint | 16 | T16d | 0.5jh |
| T16tr | Réalisation du test de l'ajout et de la modification d'un sprint | 16 | T16td | 0.5jh |
| T17d | Design de la page permettant d'uploader une release de fin de sprint | 17 | Aucune | 0.5jh |
| T17r | Réalisation de la page permettant d'uploader une release de fin de sprint | 17 | T17d, T0d | 2jh |
| T17td | Design du test d'upload de release | 17 | T17d | 0.5jh |
| T17tr | Réalisation du test d'upload de release| 17 | T17td | 1jh |
| T18d | Design de la page permettant de télécharger une release de fin de sprint | 18 | Aucune | 0.5jh |
| T18r | Réalisation de la page permettant de télécharger une release de fin de sprint | 18 | T18d, T0d | 2jh |
| T18td | Design du test de téléchargement de release | 18 | T18d | 0.5jh |
| T18tr | Réalisation du test de téléchargement de release | 18 | T18td | 1jh |
| T20d | Design de la page permettant d'ajouter une tâche à un sprint | 20 | Aucune | 0.5jh |
| T20r | Réalisation de la page permettant d'ajouter une tâche à un sprint | 20 | T20d, T0d | 1jh |
| T20td | Design du test d'ajout d'une tâche | 20 | T20d | 0.5jh |
| T20tr | Réalisation du test d'ajout d'une tâche | 20 | T20td | 1jh |
| T21d | Design de la page permettant de modifier une tâche | 21 | Aucune | 0.5jh |
| T21r | Réalisation de la page permettant de modifier une tâche | 21 | T21d, T0d | 1jh |
| T21td | Design du test de modification d'une tâche | 21 | T21d | 0.5jh |
| T21tr | Réalisation du test de modification d'une tâche | 21 | T21td | 1jh |
| T22d | Design de la page permettant d'ajouter des tests à une tâche et de les modifier | 22 | Aucune | 0.5jh |
| T22r | Réalisation de la page d'ajout et de modification de tests assignés à une tâche | 22 | T22d, T0d | 2jh |
| T22td | Design du test d'ajout et de modification d'un test | 22 | T22d | 0.5jh |
| T22tr | Réalisation du test d'ajout et de modification d'un test | 22 | T22td | 1.5jh |
| T23d | Design de la page permettant de signaler un bug relatif à une tâche | 23 | Aucune | 0.5jh |
| T23r | Réalisation de la page permettant de signaler un bug relatif à une tâche | 23 | T23d, T0d | 2jh |
| T23td | Design du test de signalement d'un bug | 23 | T23d | 0.5jh |
| T23tr | Réalisation du test de signalement d'un bug | 23 | T23td | 1jh |
| T24d | Design de la page affichant le Burn-Down Chart d'un sprint | 24 | Aucune | 0.5jh |
| T24r | Réalisation de la page affichant le Burn-Down Chart d'un sprint | 24 | T24d, T0d | 2.5jh |
| T24td | Design du test de génération du Burn-Down Chart d'un sprint | 24 | T24d | 0.5jh |
| T24tr | Réalisation du test de génération du Burn-Down Chart d'un sprint | 24 | T24td | 2jh |