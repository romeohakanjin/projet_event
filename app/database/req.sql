/**
* Création des tables
**/

CREATE TABLE IF NOT EXISTS membre(
    `id` int AUTO_INCREMENT,
    `civilite` VARCHAR(20) NOT NULL,
    `nom` VARCHAR(50) NOT NULL,
    `prenom` VARCHAR(50) NOT NULL,
    `date_naissance` DATETIME NOT NULL,
    `adresse` VARCHAR(50) NOT NULL,
    `code_postal` INT(5) NOT NULL,
    `ville` VARCHAR(50) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `niveau_etude` VARCHAR(50) NOT NULL,
    `type_contrat` VARCHAR(50) NOT NULL,
    `id_utilisateur` int,
    `id_type` int,
    `id_etat`int,
    CONSTRAINT PKM1 PRIMARY KEY (id)
)ENGINE=InnoDb;

CREATE TABLE IF NOT EXISTS utilisateur(
    `id` int AUTO_INCREMENT,
    `login` VARCHAR(20) NOT NULL,
    `password` VARCHAR(30) NOT NULL,
    `email` VARCHAR(30) NOT NULL,
    `date_inscription` DATETIME NOT NULL,
    CONSTRAINT PKC1 PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS type_membre(
    `id` int AUTO_INCREMENT,
    `libelle` VARCHAR(50) NOT NULL,
    CONSTRAINT PKC1 PRIMARY KEY (id)  
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS etat_inscription(
    `id` int AUTO_INCREMENT,
    `libelle` VARCHAR(50) NOT NULL,
    CONSTRAINT PKC1 PRIMARY KEY (id) 
)ENGINE=InnoDB;

/**
* Ajout des clés étrangères
**/

ALTER TABLE membre
ADD CONSTRAINT FKM1 FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id),
ADD CONSTRAINT FKM2 FOREIGN KEY (id_type) REFERENCES type_membre(id),
ADD CONSTRAINT FKM3 FOREIGN KEY (id_etat) REFERENCES etat_inscription(id);