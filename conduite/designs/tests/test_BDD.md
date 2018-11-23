## Schéma Relationnel Base de Données

Utilisateur(__idUtilisateur__, login, password, mail)

Projet(__idProjet__, nom, dureeSprint)

Travailler(__idTravailler__, __#idUtilisateur, #idProjet__)

Sprint(__idSprint__, nom, dateDebut, dateFin, _#idProjet_)

UserStory(__idUserStory__, num, description, priorite, difficulte, _#idProjet_)

Taches(__idTache__, nom, description, cout, statut, _#idProjet_)

## Tests sur BDD

- Tester l'existence de la base de données : 

`use haisau`

- Tester l'existence des tables Utilisateur, Projet, Travailler, Sprint, UserStory, Taches :

`SELECT * FROM <table> WHERE 1;`

- Tester les structures des tables par insertion de données :

`INSERT INTO <table> (<fields>) VALUES (<values>);`

- Tester l'incrémentation des champs `id` sur les différentes tables :

`INSERT INTO <table> (<fileds w/o id>) VALUES (<values w/o id>)`

L'insertion de telles valeurs ne devraient pas poser de problème même si identiques.

- Tester les structures des tables par récupération de données :

`SELECT * FROM <table> WHERE 1;`

Tester ensuite le formatage des types (int ou string +timestamp)

