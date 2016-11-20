/**
* Création des tables
**/

CREATE TABLE IF NOT EXISTS membre(
    `id` int AUTO_INCREMENT,
    `civilite` ENUM('Madame', 'Monsieur') NOT NULL,
    `nom` VARCHAR(50) NOT NULL,
    `prenom` VARCHAR(50) NOT NULL,
    `date_naissance` DATETIME NOT NULL,
    `adresse` VARCHAR(50) NOT NULL,
    `code_postal` INT(5) NOT NULL,
    `ville` VARCHAR(50) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `niveau_etude` ENUM('1', '2', '3', '4', '5', 'Autre') NOT NULL,
    `type_contrat` VARCHAR(50) NOT NULL,
    `id_utilisateur` int,
    `id_type_membre` int DEFAULT '2',
    `id_etat_inscription`int DEFAULT '1',
    CONSTRAINT PKM1 PRIMARY KEY (id)
)ENGINE=InnoDb;

CREATE TABLE IF NOT EXISTS utilisateur(
    `id` int AUTO_INCREMENT,
    `identifiant` VARCHAR(20) NOT NULL,
    `mot_de_passe` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `date_inscription` DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    `id_membre` int,
    `id_type_membre` int,
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
ADD CONSTRAINT FKM2 FOREIGN KEY (id_type_membre) REFERENCES type_membre(id),
ADD CONSTRAINT FKM3 FOREIGN KEY (id_etat_inscription) REFERENCES etat_inscription(id);

ALTER TABLE utilisateur
ADD CONSTRAINT FKU1 FOREIGN KEY (id_membre) REFERENCES membre(id),
ADD CONSTRAINT FKU2 FOREIGN KEY (id_type_membre) REFERENCES type_membre(id);