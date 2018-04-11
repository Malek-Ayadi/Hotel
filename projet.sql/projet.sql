-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 09 avr. 2018 à 21:04
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE IF NOT EXISTS `chambre` (
  `id_chamb` int(11) NOT NULL AUTO_INCREMENT COMMENT 'L''id de la chambre (numéro de la chambre) ',
  `id_res` int(11) NOT NULL COMMENT 'id de la réservation (null si la chambre n''est pas reservée)',
  PRIMARY KEY (`id_chamb`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_clt` int(11) NOT NULL AUTO_INCREMENT COMMENT 'L''id du client',
  `nom` varchar(255) NOT NULL COMMENT 'le nom du client',
  `prenom` varchar(255) NOT NULL COMMENT 'le prenom du client ',
  `ddn` date NOT NULL COMMENT 'la date de naissance du client',
  `mail` varchar(255) NOT NULL COMMENT 'l''adresse email du client',
  `adresse` varchar(255) NOT NULL COMMENT 'l''adresse du client',
  `cin` int(11) NOT NULL COMMENT 'la carte d''identité nationale du client',
  `tel` int(11) NOT NULL COMMENT 'le numéro du téléphone du client',
  PRIMARY KEY (`id_clt`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `consommation`
--

DROP TABLE IF EXISTS `consommation`;
CREATE TABLE IF NOT EXISTS `consommation` (
  `id_cons` int(11) NOT NULL COMMENT 'L''id de consomation',
  `id_clt` int(11) NOT NULL COMMENT 'L''id de client',
  `libellé` int(11) NOT NULL COMMENT 'Le nom de la consommation',
  `prix` int(11) NOT NULL COMMENT 'le prix de la consommation',
  `nbr` int(11) NOT NULL COMMENT 'le nombre de consommation d''un produit par un client '
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `login` varchar(255) NOT NULL COMMENT 'login (unique) du réceptionniste',
  `password` varchar(255) NOT NULL COMMENT 'le mot de passe du réceptionniste'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employee`
--

INSERT INTO `employee` (`login`, `password`) VALUES
('Skander', '123456'),
('Malek', '123456'),
('Khlil', '123456'),
('Ahmed', '123456'),
('Amine', '123456'),
('Yahya', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_res` int(11) NOT NULL AUTO_INCREMENT COMMENT 'L''id de réservation',
  `id_clt` int(11) NOT NULL COMMENT 'L''id de client',
  `dateArr` date NOT NULL COMMENT 'Date Arrivé du client',
  `dateDep` date NOT NULL COMMENT 'Date départ du client',
  PRIMARY KEY (`id_res`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_res`, `id_clt`, `dateArr`, `dateDep`) VALUES
(1, 5, '2018-04-11', '2018-04-04'),
(2, 5, '2018-04-23', '2018-04-11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
