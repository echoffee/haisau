# haisau
comfy project manager

## User Stories

### Définitions

**Application** représente l'outil de gestion de projet développé ici.

**Utilisateur** représente une personne qui utilise l'application, pouvant être le
propriétaire d'un projet ou bien un développeur travaillant pour un
propriétaire.

**Développeur** représente un utilisateur de l'application participant à un projet
enregistré sur celle-ci. Le développeur a des des droits de gestion du
projet. Il n'y a a pas de différence de droits entre le créateur du projet et
les autres contributeurs.

### Liste
| Identifiant | Description | Priorité | Difficulté |
|-------------|-------------|----------|------------|
| 1 | En tant qu' **utilisateur**, je veux paramétrer mes identifiants (nom d'utilisateur et mot de passe) lors de ma première connexion à l'application. |  | 1 |
| 3 | En tant que **chef de projet**, je veux créer un projet sur l'application afin de le gérer, en renseignant un nom de projet. | | 1 |
| 4 | En tant que **chef de projet**, je veux supprimer un projet que je gère afin de l'enlever de ma liste de projets. | | 1 |
| 5 | En tant que **développeur**, je veux consulter la liste des projets auxquels je participe afin d'être au courant de l'avancement de chacun. | | 1 |
| 6 | En tant que **chef de projet**, je veux inviter des développeurs à mon projet afin qu'ils puissent travailler dessus. On pourra renseigner une adresse mail ou le nom d'utilisateur des dits développeurs pour les inviter.| | 1 |
| 7 | En tant que **développeur**, je veux répondre à une invitation de projet afin de travailler ou non dessus en cliquant sur un lien unique d'invitation. | | 1 |
| 8 | En tant qu' **utilisateur**, je veux me connecter à l'application à l'aide de mes identifiants afin de consulter l'état de mes projets. | | 1 |
| 9 | En tant que **développeur**, je veux consulter le backlog d'un projet auquel je participe afin de connaître les user stories de ce dernier. | | 1 |
| 10 | En tant que **chef de projet**, je veux ajouter une user story au backlog afin de la rendre lisible par les développeurs. Une user storie sera composée d'un numéro d'identification, d'une brève description, d'une priorité et d'un indice de difficulté. Elle sera aussi reliée à un ensemble de tâches associées.| | 1 |
| 11 | En tant que **chef de projet**, je veux modifier une user story afin de la mettre à jour. | | 1 |
| 12 | En tant que **développeur**, je veux proposer des user stories dans une "sandbox" afin de les rendre visibles par tous les utilisateurs sans impacter le projet. | | 1 |
| 13 | En tant que **chef de projet**, je veux accéder aux user stories proposées par mon équipe dans la "sandbox" afin de les inclure ou non dans le backlog du projet. | | 1 |
| 14 | En tant que **développeur**, je veux consulter la liste des sprints afin de voir l'avancement du projet | | 1 |
| 15 | En tant que **chef de projet**, je veux ajouter et modifier un sprint afin d'organiser l'avancement du projet. Un sprint est composé d'un nom et d'un ensemble de tâches. Les dates de début et fin du sprint sont définies automatiquement pour une période de deux semaines.| | 1 |
| 16 | En tant que **chef de projet**, je veux uploader en fin de sprint la release du projet que je gère afin de la rendre téléchargeable par les utilisateurs. | | 1 |
| 17 | En tant qu' **utilisateur**, je veux télécharger la release d'un sprint d'un projet auquel je participe afin de pouvoir l'exécuter localement. | | 1 |
| 18 | En tant que **développeur**, je veux consulter la liste des tâches associées à un sprint donné afin d'être au courant de l'avancement du travail sur ce sprint. | | 1 |
| 19 | En tant que **chef de projet**, je veux ajouter une tâche à la liste de tâches liée à une user story lors d'un sprint afin qu'elle soit listée avec les autres tâches et visible par les autres utilisateurs. Une tâche est composée d'un identifiant, d'une brève description, un ensemble de tests associés ainsi qu'un état (TODO, IN-PROGRESS, DONE/UNDONE). | | 1 |
| 20 | En tant que **chef de projet**, je veux modifier une tâche comprise dans le sprint courant afin de mettre à jour son statut. | | 1 |
| 21 | En tant que **développeur** je veux ajouter des tests à une tâche, afin de vérifier son bon fonctionnement. Un test est composé d'un nom, du résultat attendu au test ainsi que l'adresse de la classe de test et la méthode associée au test.| | 1 |
| 22 | En tant que **développeur**, je veux modifier l'état d'un test afin de mettre à jour son statut. | | 1 |
|E23 | En tant que **développeur**, je veux signaler à l'équipe un bug présent dans l'application afin de le corriger pour la suite. Le bug sera considéré comme une tâche dans le sprint, et pourra être identifié visuellement des autres tâches (couleur, préfixe au nom ou autre).| | 1 |
