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
	idTravailler int NOT NULL AUTO_INCREMENT,
	idUtilisateur int NOT NULL,
	idProjet int NOT NULL,
	PRIMARY KEY(idTravailler)
);
CREATE TABLE Sprint (
	idSprint int NOT NULL AUTO_INCREMENT,
	nom varchar(255) NOT NULL,
	dateDebut timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	dateFin timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	idProjet int NOT NULL,
	PRIMARY KEY (idSprint)
);
CREATE TABLE UserStory (
	idUserStory int NOT NULL AUTO_INCREMENT,
	num int NOT NULL,
	description text,
	priorite varchar(16) NOT NULL,
	difficulte int,
	idProjet int NOT NULL,
	PRIMARY KEY (idUserStory)
);
CREATE TABLE Tache (
	idTache int NOT NULL AUTO_INCREMENT,
	nom text NOT NULL,
	cout decimal NOT NULL,
	statut varchar(16) NOT NULL,
	idProjet int NOT NULL,
	PRIMARY KEY (idTache)
);
