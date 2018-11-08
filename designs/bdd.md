## Schéma Relationnel Base de Données

Utilisateur(__idUtilisateur__, login, password, mail)

Projet(__idProjet__, nom, dureeSprint)

Travailler(__#idUtilisateur, #idProjet__)

Sprint(__idSprint__, nom, dateDebut, dateFin, _#idProjet_)

UserStory(__idUserStory__, num, description, priorite, difficulte, _#idProjet_)

Taches(__idTache__, nom, cout, statut, _#idProjet_)
