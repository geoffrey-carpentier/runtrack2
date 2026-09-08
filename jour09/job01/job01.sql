
-- -- Création de la base de données "jour09":
CREATE DATABASE jour09;

-- -- Sélection de la base de données "jour09":
USE jour09;

-- -- Création des tables "etudiants", "etage" et "salles":

-- Table des étudiants:
CREATE TABLE etudiants (
    id INT PRIMARY KEY AUTO_INCREMENT,  -- On ajoute une clé primaire auto-incrémentée, pour ne pas avoir à gérer manuellement les identifiants ou avoir de doublons.
    prenom VARCHAR(255),
    nom VARCHAR(255),
    naissance DATE,
    sexe VARCHAR(25),
    email VARCHAR(255)
);

-- Table des étages:
CREATE TABLE etage (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    numero INT,
    superficie INT
);

-- Table des salles:
CREATE TABLE salles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    id_etage INT,
    capacite INT
);

-- -- On exporte la base de données vers le fichier "./export01.sql": 
EXPORT DATABASE jour09 TO DISK = './export01.sql';   
