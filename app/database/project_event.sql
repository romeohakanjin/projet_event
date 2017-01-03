-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 22 Novembre 2016 à 11:10
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
(1, 'En attente'),
(2, 'Validées'),
(3, 'Refusées');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `code_postal` varchar(20) NOT NULL,
  `ville` varchar(250) NOT NULL,
  `type_contrat` varchar(50) NOT NULL,
  `id_etat_inscription` int(11) DEFAULT '1',
  `civilite` enum('Mme','Mr') DEFAULT NULL,
  `niveau_etude` enum('1','2','3','4','5','autre') DEFAULT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `nom`, `prenom`, `email`, `date_naissance`, `adresse`, `code_postal`, `ville`, `type_contrat`, `id_etat_inscription`, `civilite`, `niveau_etude`, `date_inscription`) VALUES
(1, 'Martin', 'Jean', 'sindy@test.com', '1996-11-29', '2 rue des roses', '12345', 'Paris', 'Contrat professionnalisation', 1, 'Mr', '5', '2016-11-22 12:04:36'),
(2, 'Petit', 'Pierre', 'test@test.com', '1995-11-06', '5 rue des halles', '57456', 'Lille', 'Contrat professionnalisation', 2, 'Mr', '1', '2016-11-22 12:04:36'),
(3, 'Durand', 'Paul', 'sindy@test.com', '1996-11-29', '35 rue de saint gratien', '12345', 'Aubergenville', 'Stage', 3, 'Mr', '5', '2016-11-22 12:04:36'),
(4, 'Dubois', 'Jacque', 'test@test.com', '1995-11-06', '56 rue louis pasteur', '57456', 'Epinay sur seine', 'CDD', 2, 'Mr', '1', '2016-11-22 12:04:36'),
(5, 'Moreau', 'Jane', 'sindy@test.com', '1996-11-29', '23 rue danjoux', '12345', 'Flins', 'Contrat Apprentissage', 1, 'Mme', '5', '2016-11-22 12:04:36'),
(6, 'Lefebvre', 'Charlene', 'test@test.com', '1995-11-06', '56 squares des alles', '57456', 'Mantes la jolie', 'CDI', 3, 'Mme', '1', '2016-11-22 12:04:36'),
(7, 'Leroy', 'Billy', 'sindy@test.com', '1996-11-29', '7 place salvador allende', '12345', 'Eaubonne', 'Stage', 3, 'Mr', '5', '2016-11-22 12:04:36'),
(8, 'Roux', 'Sophie', 'test@test.com', '1995-11-06', '1 rue de lyon', '57456', 'Deuil la barre', 'Contrat Apprentissage', 1, 'Mme', '1', '2016-11-22 12:04:36'),
(9, 'Morel', 'Julien', 'sindy@test.com', '1996-11-29', '4 square Argenteuil', '12345', 'Paris', 'Contrat professionnalisation', 2, 'Mr', '5', '2016-11-22 12:04:36'),
(10, 'Dupond', 'Roméo', 'test@test.com', '1995-11-06', '34 boulevard haussman', '57456', 'Courbevoie', 'CDD', 3, 'Mr', '1', '2016-11-22 12:04:36'),
(11, 'Loye', 'Laura', 'sindy@test.com', '1996-11-29', '12 rue olympes', '12345', 'Courbevoie', 'Contrat Apprentissage', 2, 'Mme', '5', '2016-11-22 12:04:36'),
(12, 'Apou', 'Sandra', 'test@test.com', '1995-11-06', '56  rue des nains', '57456', 'Paris', 'CDI', 1, 'Mme', '1', '2016-11-22 12:04:36');

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
  ADD KEY `FKM3` (`id_etat_inscription`);

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
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `FKM3` FOREIGN KEY (`id_etat_inscription`) REFERENCES `etat_inscription` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
