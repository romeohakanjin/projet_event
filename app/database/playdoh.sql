-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 07 Juillet 2016 à 17:37
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `playdoh`
--

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `id` int(11) NOT NULL,
  `ip` int(20) NOT NULL,
  `derniere-connexion` datetime NOT NULL,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `connexion`
--

INSERT INTO `connexion` (`id`, `ip`, `derniere-connexion`, `id_membre`) VALUES
(1, 255, '2016-07-07 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `liste_contact`
--

CREATE TABLE `liste_contact` (
  `id` int(11) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `code-postal` int(10) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `tel` int(17) DEFAULT NULL,
  `tel_fix` int(17) DEFAULT NULL,
  `date_ajout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `liste_contact`
--

INSERT INTO `liste_contact` (`id`, `genre`, `nom`, `prenom`, `adresse`, `code-postal`, `ville`, `tel`, `tel_fix`, `date_ajout`, `id_membre`) VALUES
(1, 'Féminin', 'Lim', 'Sindy', '4 square des ', 93800, 'Epinay-Sur-Seine', 761250699, NULL, '2016-07-07 15:36:12', 1);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `code_postal` int(10) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `date-naissance` date DEFAULT NULL,
  `tel` int(17) DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `etat_membre` enum('Inscrit','Actif','Inactif') DEFAULT 'Inscrit',
  `news_letter` int(1) DEFAULT '0',
  `score` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `mail`, `password`, `genre`, `nom`, `prenom`, `adresse`, `code_postal`, `ville`, `date-naissance`, `tel`, `date_creation`, `etat_membre`, `news_letter`, `score`, `ip_membre`) VALUES
(1, 'hakanjin.romeo@hotmail.fr', 'testtest', 'Masculin', 'Hakanjin', 'Roméo', '6 villa contact', 78410, 'Aubergenville', '1996-04-05', 602677213, '2016-07-07 15:34:35', 'Actif', 1, 0, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD PRIMARY KEY (`id`,`id_membre`,`ip`),
  ADD KEY `FKC1` (`id_membre`);

--
-- Index pour la table `liste_contact`
--
ALTER TABLE `liste_contact`
  ADD PRIMARY KEY (`id`,`id_membre`),
  ADD KEY `FKLC1` (`id_membre`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`,`ip_membre`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `connexion`
--
ALTER TABLE `connexion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `liste_contact`
--
ALTER TABLE `liste_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD CONSTRAINT `FKC1` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id`);

--
-- Contraintes pour la table `liste_contact`
--
ALTER TABLE `liste_contact`
  ADD CONSTRAINT `FKLC1` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
