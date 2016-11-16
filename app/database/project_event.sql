-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 15 Novembre 2016 à 13:46
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `project_event`
--
CREATE DATABASE IF NOT EXISTS `project_event` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `project_event`;

-- --------------------------------------------------------

--
-- Structure de la table `etat_inscription`
--

CREATE TABLE `etat_inscription` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `etat_inscription`
--

INSERT INTO `etat_inscription` (`id`, `libelle`) VALUES
(1, 'En attente de validation'),
(2, 'Validées'),
(3, 'Refusées');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `civilite` varchar(20) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` datetime NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `code_postal` int(5) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `niveau_etude` varchar(50) NOT NULL,
  `type_contrat` varchar(50) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL,
  `id_etat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `civilite`, `nom`, `prenom`, `date_naissance`, `adresse`, `code_postal`, `ville`, `email`, `niveau_etude`, `type_contrat`, `id_utilisateur`, `id_type`, `id_etat`) VALUES
(1, 'Mlle', 'testNom', 'testPrenom', '1996-11-29 00:00:00', 'testAdresse', 12345, 'testVille', 'test@test.com', 'Bac + 3', 'Contrat pro', 1, 1, 2),
(2, 'Mr', 'testNom2', 'testPrenom2', '1995-11-06 00:00:00', 'testAdresse2', 57456, 'testVille2', 'test2@test.com', 'Bac + 3', 'Contrat pro', 2, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `type_membre`
--

CREATE TABLE `type_membre` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type_membre`
--

INSERT INTO `type_membre` (`id`, `libelle`) VALUES
(1, 'Candidat'),
(2, 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date_inscription` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `password`, `email`, `date_inscription`) VALUES
(1, 'test', 'test1234', 'test@test.com', '2016-11-14 00:00:00'),
(2, 'admin', 'admin1234', 'test2@test.com', '2016-11-27 00:00:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `etat_inscription`
--
ALTER TABLE `etat_inscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKM1` (`id_utilisateur`),
  ADD KEY `FKM2` (`id_type`),
  ADD KEY `FKM3` (`id_etat`);

--
-- Index pour la table `type_membre`
--
ALTER TABLE `type_membre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `etat_inscription`
--
ALTER TABLE `etat_inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `type_membre`
--
ALTER TABLE `type_membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `FKM1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `FKM2` FOREIGN KEY (`id_type`) REFERENCES `type_membre` (`id`),
  ADD CONSTRAINT `FKM3` FOREIGN KEY (`id_etat`) REFERENCES `etat_inscription` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
