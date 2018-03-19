-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 19 mars 2018 à 15:40
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
-- Base de données :  `bddstefaneplagiat`
--
CREATE DATABASE IF NOT EXISTS `bddstefaneplagiat` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bddstefaneplagiat`;

-- --------------------------------------------------------

--
-- Structure de la table `biens`
--

DROP TABLE IF EXISTS `biens`;
CREATE TABLE IF NOT EXISTS `biens` (
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `adresse` varchar(50) NOT NULL,
  `surface` int(11) NOT NULL,
  `jardin` char(3) NOT NULL,
  `nbPieces` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`numero`),
  KEY `type` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `biens`
--

INSERT INTO `biens` (`numero`, `adresse`, `surface`, `jardin`, `nbPieces`, `prix`, `ville`, `type`) VALUES
(1, '27 rue de Lachelite', 215, 'oui', 10, 800000, 'Flours', 1),
(2, '43 rue de Lichnerre', 128, 'oui', 8, 148240, 'Flers', 1),
(3, '38 rue du Tapis', 118, 'oui', 6, 415360, 'Audierne', 1),
(4, '17 rue des Pommiers', 157, 'oui', 9, 352820, 'Bignou', 1),
(5, '52 rue Cocinelle', 146, 'non', 146, 353600, 'Pornichet', 1),
(6, '5 rue Lavoisier', 45, 'non', 2, 156000, 'Leers', 2),
(7, '12 rue Poitije', 40, 'non', 2, 156000, 'Saint-Maurice', 2),
(8, '19 rue Patate', 51, 'non', 3, 165000, 'Nice', 2),
(9, '11 rue Loupite', 50, 'non', 2, 265000, 'Levallois', 2),
(10, '95 rue Maurice', 36, 'non', 2, 250000, 'Paris', 2),
(11, '52 rue de la Balade', 32, 'non', 2, 260000, 'Galande', 2),
(12, '27 rue Hospote', 36, 'non', 2, 165000, 'Muette', 2),
(13, '14 rue Klagoun', 162, 'non', 32, 752000, 'Lille', 3),
(14, '23 rue Jaures', 400, 'non', 8, 950000, 'Roubaix', 3),
(15, '26 rue Louvre', 90, 'oui', 9, 854200, 'Marseille', 3);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `lien` varchar(200) NOT NULL,
  `numero` int(11) NOT NULL,
  PRIMARY KEY (`lien`),
  KEY `ceimagesbiens` (`numero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`lien`, `numero`) VALUES
('../pictures/imageSlider/slidermaison/slidermaison1/image1maison1.jpg', 1),
('../pictures/imageSlider/slidermaison/slidermaison1/image2maison1.jpg', 1),
('../pictures/imageSlider/slidermaison/slidermaison1/image3maison1.jpg', 1),
('../pictures/imageSlider/slidermaison/slidermaison2/image1maison2.jpg', 2),
('../pictures/imageSlider/slidermaison/slidermaison2/image2maison2.jpg', 2),
('../pictures/imageSlider/slidermaison/slidermaison2/image3maison2.jpg', 2),
('../pictures/imageSlider/slidermaison/slidermaison3/image1maison3.jpg', 3),
('../pictures/imageSlider/slidermaison/slidermaison3/image2maison3.jpg', 3),
('../pictures/imageSlider/slidermaison/slidermaison3/image3maison3.jpg', 3),
('../pictures/imageSlider/slidermaison/slidermaison4/image1maison4.jpg', 4),
('../pictures/imageSlider/slidermaison/slidermaison4/image2maison4.jpg', 4),
('../pictures/imageSlider/slidermaison/slidermaison4/image3maison4.jpg', 4),
('../pictures/imageSlider/slidermaison/slidermaison5/image1maison5.jpg', 5),
('../pictures/imageSlider/slidermaison/slidermaison5/image2maison5.jpg', 5),
('../pictures/imageSlider/slidermaison/slidermaison5/image3maison5.jpg', 5),
('../pictures/imageSlider/sliderappart/sliderappart1/appart1photo2.jpg', 6),
('../pictures/imageSlider/sliderappart/sliderappart1/appart1photo3.jpg', 6),
('../pictures/imageSlider/sliderappart/sliderappart1/appartement1.jpg', 6),
('../pictures/imageSlider/sliderappart/sliderappart2/appart2photo2.jpg', 7),
('../pictures/imageSlider/sliderappart/sliderappart2/appart2photo3.jpg', 7),
('../pictures/imageSlider/sliderappart/sliderappart2/appartement2.jpg', 7),
('../pictures/imageSlider/sliderappart/sliderappart3/appart3photo2.jpg', 8),
('../pictures/imageSlider/sliderappart/sliderappart3/appart3photo3.jpg', 8),
('../pictures/imageSlider/sliderappart/sliderappart3/appartement3.jpg', 8),
('../pictures/imageSlider/sliderappart/sliderappart4/appart4photo2.jpg', 9),
('../pictures/imageSlider/sliderappart/sliderappart4/appart4photo3.jpg', 9),
('../pictures/imageSlider/sliderappart/sliderappart4/appartement4.jpg', 9),
('../pictures/imageSlider/sliderappart/sliderappart5/appart5photo2.jpg', 10),
('../pictures/imageSlider/sliderappart/sliderappart5/appart5photo3.jpg', 10),
('../pictures/imageSlider/sliderappart/sliderappart5/appartement5.jpg', 10),
('../pictures/imageSlider/sliderappart/sliderappart6/appart6photo2.jpeg', 11),
('../pictures/imageSlider/sliderappart/sliderappart6/appart6photo3.jpeg', 11),
('../pictures/imageSlider/sliderappart/sliderappart6/appartement6.jpg', 11),
('../pictures/imageSlider/sliderappart/sliderappart7/appart7photo2.jpg', 12),
('../pictures/imageSlider/sliderappart/sliderappart7/appart7photo3.jpg', 12),
('../pictures/imageSlider/sliderappart/sliderappart7/appartement7.jpg', 12),
('../pictures/imageSlider/sliderlocaux/sliderlocal1/image1local1.jpg', 13),
('../pictures/imageSlider/sliderlocaux/sliderlocal1/image2local1.jpg', 13),
('../pictures/imageSlider/sliderlocaux/sliderlocal1/image3local1.jpg', 13),
('../pictures/imageSlider/sliderlocaux/sliderlocal2/image1local2.jpg', 14),
('../pictures/imageSlider/sliderlocaux/sliderlocal2/image2local2.jpg', 14),
('../pictures/imageSlider/sliderlocaux/sliderlocal2/image3local2.jpg', 14),
('../pictures/imageSlider/sliderlocaux/sliderlocal3/image1local3.jpg', 15),
('../pictures/imageSlider/sliderlocaux/sliderlocal3/image2local3.jpg', 15),
('../pictures/imageSlider/sliderlocaux/sliderlocal3/image3local3.jpg', 15);

-- --------------------------------------------------------

--
-- Structure de la table `typebien`
--

DROP TABLE IF EXISTS `typebien`;
CREATE TABLE IF NOT EXISTS `typebien` (
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `typebien`
--

INSERT INTO `typebien` (`numero`, `libelle`) VALUES
(1, 'Maison'),
(2, 'Appartements'),
(3, 'Locaux'),
(4, 'Immeubles'),
(5, 'Terrains Nus');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` varchar(12) NOT NULL,
  `Mot de passe` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `Mot de passe`) VALUES
('admin', 'admin');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `biens`
--
ALTER TABLE `biens`
  ADD CONSTRAINT `biens_ibfk_1` FOREIGN KEY (`type`) REFERENCES `typebien` (`numero`);

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `ceimagesbiens` FOREIGN KEY (`numero`) REFERENCES `biens` (`numero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
