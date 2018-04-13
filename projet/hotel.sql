-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 13 avr. 2018 à 11:54
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
-- Base de données :  `hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE IF NOT EXISTS `chambre` (
  `id_chamb` int(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id_chamb`),
  KEY `id_chamb` (`id_chamb`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id_chamb`, `type`) VALUES
(1, 'simple'),
(2, 'simple'),
(3, 'simple'),
(4, 'simple'),
(5, 'simple'),
(6, 'simple'),
(7, 'simple'),
(8, 'simple'),
(9, 'simple'),
(10, 'simple'),
(11, 'simple'),
(12, 'simple'),
(13, 'simple'),
(14, 'simple'),
(15, 'simple'),
(16, 'simple'),
(17, 'simple'),
(18, 'simple'),
(19, 'simple'),
(20, 'simple'),
(21, 'simple'),
(22, 'double'),
(23, 'double'),
(24, 'double'),
(25, 'double'),
(26, 'double'),
(27, 'double'),
(28, 'double'),
(29, 'double'),
(30, 'double'),
(31, 'double'),
(32, 'double'),
(33, 'double'),
(34, 'double'),
(35, 'double'),
(36, 'double'),
(37, 'triple'),
(38, 'triple'),
(39, 'triple'),
(40, 'triple'),
(41, 'triple');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_clt` int(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `ddn` date NOT NULL,
  `mail` varchar(50) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `cin` int(20) NOT NULL,
  `tel` int(20) NOT NULL,
  PRIMARY KEY (`id_clt`),
  KEY `id_clt` (`id_clt`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_clt`, `nom`, `prenom`, `ddn`, `mail`, `adresse`, `cin`, `tel`) VALUES
(1, 'doe', 'jane', '2018-04-18', 'hkjh@mjlkjio.mlklm', 'zyx', 123, 53834341),
(2, 'doe', 'jhon', '2018-04-28', 'a.z@yahoo.fr', 'xyz', 456, 21134341);

-- --------------------------------------------------------

--
-- Structure de la table `consommation`
--

DROP TABLE IF EXISTS `consommation`;
CREATE TABLE IF NOT EXISTS `consommation` (
  `id_cons` int(20) NOT NULL AUTO_INCREMENT,
  `id_clt` int(20) NOT NULL,
  `id_produit` int(20) NOT NULL,
  `dateCons` date DEFAULT NULL,
  PRIMARY KEY (`id_cons`),
  KEY `id_cons` (`id_cons`),
  KEY `id_clt` (`id_clt`),
  KEY `id_produit` (`id_produit`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `consommation`
--

INSERT INTO `consommation` (`id_cons`, `id_clt`, `id_produit`, `dateCons`) VALUES
(1, 1, 1, '2018-04-03'),
(2, 2, 2, '2018-04-19'),
(3, 2, 5, '2018-04-11'),
(4, 1, 3, '2018-04-21'),
(5, 1, 3, '2018-04-19'),
(6, 1, 2, '2018-02-04'),
(7, 2, 3, '2017-12-12');

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin` int(20) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employee`
--

INSERT INTO `employee` (`login`, `password`, `admin`, `nom`, `prenom`, `mail`) VALUES
('Malek', '123456', 1, 'Ayadi', 'Malek', 'ayadi.malek@gmail.com'),
('Skander', '123456', 0, 'Meziane', 'Skander', 'meziane.skander@outlook.fr'),
('Amine', '123456', 0, 'Karoui', 'Amine', 'karoui.amin@gmail.com'),
('Khlil', '123456', 0, 'Turki', 'Khlil', 'turki.khlil@gmail.com'),
('Yahya', '123456', 0, 'Derbeli', 'yahya', 'yahya.derbeli@gmail.com'),
('Ahmed', '123456', 0, 'Hajyahmed', 'Ahmed', 'ahmed.hajyahmed@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(20) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  `prix` int(20) NOT NULL,
  PRIMARY KEY (`id_produit`),
  KEY `id_produit` (`id_produit`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `libelle`, `prix`) VALUES
(1, 'soda', 5),
(2, 'eau', 3),
(3, 'petit dejeuner', 20),
(4, 'plat', 30),
(5, 'spa', 50);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_res` int(20) NOT NULL AUTO_INCREMENT,
  `id_chamb` int(20) NOT NULL,
  `id_clt` int(20) NOT NULL,
  `dateArr` date NOT NULL,
  `dateDep` date NOT NULL,
  PRIMARY KEY (`id_res`),
  KEY `id_res` (`id_res`),
  KEY `id_chamb` (`id_chamb`),
  KEY `id_clt` (`id_clt`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_res`, `id_chamb`, `id_clt`, `dateArr`, `dateDep`) VALUES
(1, 31, 1, '2018-04-01', '2018-04-13'),
(2, 9, 2, '2018-04-20', '2018-04-22');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `consommation`
--
ALTER TABLE `consommation`
  ADD CONSTRAINT `id_clt` FOREIGN KEY (`id_clt`) REFERENCES `client` (`id_clt`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_prod` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `clt` FOREIGN KEY (`id_clt`) REFERENCES `client` (`id_clt`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idchamb` FOREIGN KEY (`id_chamb`) REFERENCES `chambre` (`id_chamb`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
