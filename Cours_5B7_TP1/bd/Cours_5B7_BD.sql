-- Base de données par: Gregson Destin

DROP DATABASE IF EXISTS Cours_5B7_BD;

CREATE DATABASE Cours_5B7_BD;

USE Cours_5B7_BD;

CREATE TABLE Users(

	id INT(11) AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(16) NOT NULL,
	password VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	created DATETIME NOT NULL,
	modified DATETIME NOT NULL

);

CREATE TABLE Applications(

	id INT(11) AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	description VARCHAR(255),
	prix DECIMAL(3,2) NOT NULL,
	evaluation INT(2),
	created DATETIME NOT NULL,
	modified DATETIME NOT NULL

);

CREATE TABLE Paiements(

	id INT(11) AUTO_INCREMENT PRIMARY KEY,
	application_id INT(11) NOT NULL,
	type_paiement_id INT(2) NOT NULL,
	numero_carte CHAR(15) NOT NULL,
	evaluation_id INT(11),
	created DATETIME NOT NULL,
	modified DATETIME NOT NULL

);

CREATE TABLE Evaluations(

	id INT(11) AUTO_INCREMENT PRIMARY KEY,
	commentaires VARCHAR(255),
	note INT(2),
	created DATETIME NOT NULL,
	modified DATETIME NOT NULL

);

CREATE TABLE Types_Paiements(

	id INT(2) AUTO_INCREMENT PRIMARY KEY,
	typePaiement VARCHAR(255)

);

CREATE TABLE Applications_Users(

	user_id INT(11) NOT NULL,
	application_id INT(11) NOT NULL

);

CREATE TABLE Evaluations_Paiements(

	paiement_id INT(11) NOT NULL,
	evaluation_id INT(11) NOT NULL

);

--Ajout des contraintes


ALTER TABLE Paiements ADD CONSTRAINT fk_application_id_paiements FOREIGN KEY (application_id)
	REFERENCES Applications(id);

ALTER TABLE Paiements ADD CONSTRAINT fk_type_paiement_id FOREIGN KEY (type_paiement_id)
	REFERENCES Types_Paiements(id);

ALTER TABLE Applications_Users ADD CONSTRAINT fk_user_id FOREIGN KEY (user_id)
	REFERENCES Users(id);

ALTER TABLE Applications_Users ADD CONSTRAINT fk_application_id_applications_users FOREIGN KEY (application_id)
	REFERENCES Applications(id);

ALTER TABLE Evaluations_Paiements ADD CONSTRAINT fk_application_id_evaluations_paiements FOREIGN KEY (paiement_id)
	REFERENCES Paiements(id);

ALTER TABLE Evaluations_Paiements ADD CONSTRAINT fk_evaluation_id_evaluations_paiements FOREIGN KEY (evaluation_id)
	REFERENCES Evaluations(id);