CREATE DATABASE haisau;
use haisau;
CREATE TABLE Utilisateur (
	idUtilisateur int NOT NULL AUTO_INCREMENT,
	login varchar(255) NOT NULL,
	password varchar(255) NOT NULL,
	mail varchar(255),
	PRIMARY KEY (idUtilisateur)
);
CREATE TABLE Projet (
	idProjet int NOT NULL AUTO_INCREMENT,
	nom varchar(255) NOT NULL,
	dureeSprint int,
	PRIMARY KEY(idProjet)
);
CREATE TABLE Travailler (
	idUtilisateur int NOT NULL,
	idProjet int NOT NULL,
	status varchar(255) NOT NULL,
	FOREIGN KEY (idProjet) REFERENCES Projet(idProjet) ON DELETE CASCADE,
	FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur(idUtilisateur) ON DELETE CASCADE 

);
CREATE TABLE Sprint (
	idSprint int NOT NULL AUTO_INCREMENT,
	nom varchar(255) NOT NULL,
	dateDebut timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	dateFin timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	idProjet int NOT NULL,
	PRIMARY KEY (idSprint),
	FOREIGN KEY (idProjet) REFERENCES Projet(idProjet) ON DELETE CASCADE
);
CREATE TABLE UserStory (
	idUserStory int NOT NULL AUTO_INCREMENT,
	num int NOT NULL,
	description text,
	priorite varchar(16) NOT NULL,
	difficulte int,
	type text,
	idProjet int NOT NULL,
	PRIMARY KEY (idUserStory),
	FOREIGN KEY (idProjet) REFERENCES Projet(idProjet) ON DELETE CASCADE
);
CREATE TABLE Tache (
	idTache int NOT NULL AUTO_INCREMENT,
	nom text NOT NULL,
	description text NOT NULL,
	cout decimal NOT NULL,
	statut varchar(16) NOT NULL,
	idSprint int NOT NULL,
	PRIMARY KEY (idTache),
	FOREIGN KEY (idSprint) REFERENCES Sprint(idSprint) ON DELETE CASCADE
);

/*add 5 project*/
INSERT INTO `Projet` (`idProjet`, `nom`, `dureeSprint`) VALUES
(NULL, 'Project1', '3'),
(NULL, 'Project2', '3'), 
(NULL, 'Project3', '2'), 
(NULL, 'Project4', '2'),
(NULL, 'Project5', '3');

/*add 3 user story to each project*/
INSERT INTO `UserStory` (`idUserStory`, `num`, `description`, `priorite`, `difficulte`, `type`, `idProjet`) VALUES

/*project1*/
(NULL, 1, 'This is us 1 ', 'Low', '10', 'backlog', '1'),
(NULL, 2, 'This is us 2 ', 'Low', '10', 'backlog', '1'),
(NULL, 3, 'This is us 3 ', 'Low', '10', 'sandbox', '1'),
/*project2*/
(NULL, 1, 'This is us 1 ', 'Low', '10', 'backlog', '2'),
(NULL, 2, 'This is us 2 ', 'Low', '10', 'sandbox', '2'),
(NULL, 3, 'This is us 3 ', 'Low', '10', 'backlog', '2'),
/*project3*/
(NULL, 1, 'This is us 1 ', 'Low', '10', 'backlog', '3'),
(NULL, 2, 'This is us 2 ', 'Low', '10', 'sandbox', '3'),
(NULL, 3, 'This is us 3 ', 'Low', '10', 'backlog', '3'),
/*project4*/
(NULL, 1, 'This is us 1 ', 'Low', '10', 'backlog', '4'),
(NULL, 2, 'This is us 2 ', 'Low', '10', 'sandbox', '4'),
(NULL, 3, 'This is us 3 ', 'Low', '10', 'backlog', '4'),
/*project5*/
(NULL, 1, 'This is us 1 ', 'Low', '10', 'backlog', '5'),
(NULL, 2, 'This is us 2 ', 'Low', '10', 'sandbox', '5'),
(NULL, 3, 'This is us 3 ', 'Low', '10', 'backlog', '5');
