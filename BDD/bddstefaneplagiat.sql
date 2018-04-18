-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 18 avr. 2018 à 20:18
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
  `titre` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`numero`),
  KEY `type` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `biens`
--

INSERT INTO `biens` (`numero`, `adresse`, `surface`, `jardin`, `nbPieces`, `prix`, `ville`, `type`, `titre`, `description`, `image`) VALUES
(1, '27 rue de Lachelite', 215, 'oui', 10, 800000, 'Flours', 1, 'Maison d\'architecte originale', 'Maison plein pied - 10 pièces - 215m²', NULL),
(2, '43 rue de Lichnerre', 128, 'oui', 8, 148240, 'Flers', 1, 'Maison à vendre Flers', 'Maison deux étages - 8 pièces - 128m²', NULL),
(3, '38 rue du Tapis', 118, 'oui', 6, 415360, 'Audierne', 1, 'Maison à vendre Audierne', 'Maison deux étages et cave - 6 pièces - 118m²', NULL),
(4, '17 rue des Pommiers', 157, 'oui', 9, 352820, 'Bignou', 1, 'Maison à vendre Bignou', 'Maison deux étages avec grenier - 9 pièces - 157m²', NULL),
(5, '52 rue Cocinelle', 146, 'non', 8, 353600, 'Pornichet', 1, 'Maison à vendre Pornichet', 'Maison deux étages - 8 pièces - 146m²', NULL),
(6, '5 rue Lavoisier', 45, 'non', 2, 156000, 'Leers', 2, 'Appartement Leers', 'Appartement 2 Pièces 44,83 m2', NULL),
(7, '12 rue Poitije', 40, 'non', 2, 156000, 'Saint-Maurice', 2, 'Appartement Saint-Maur-Des-Fosses', 'Vente appartement 2 pièces 40 m² Saint-Maur-Des-Fosses (94)', NULL),
(8, '19 rue Patate', 51, 'non', 3, 165000, 'Nice', 2, 'Appartement Saint-Maur-Des-Fosses', 'Vente appartement 3 pièces 51 m² Nice', NULL),
(9, '11 rue Loupite', 50, 'non', 2, 265000, 'Levallois', 2, 'Appartement Levallois-Perret', 'Vente appartement 2 pièces 50 m² Levallois-Perret (92300)', NULL),
(10, '95 rue Maurice', 36, 'non', 2, 250000, 'Paris', 2, 'Appartement à Paris', 'charmant loft de 2 pièces au dernier étage avec ascenseur 36m²', NULL),
(11, '52 rue de la Balade', 32, 'non', 2, 260000, 'Galande', 2, 'Appartement à Galande', 'Appartement T1 Bis de 31,55 m² LC non meublé situé au 4ème étage d\'un immeuble sécurisé de 1600', NULL),
(12, '27 rue Hospote', 36, 'non', 2, 165000, 'Muette', 2, 'Appartement à Muette', 'charmant loft de 2 pièces au dernier étage avec ascenseur 36m²', NULL),
(13, '14 rue Klagoun', 162, 'non', 32, 752000, 'Lille', 3, 'Local LE SEDAF', ' local a louer - 162m² - 310€/m²/an', NULL),
(14, '23 rue Jaures', 400, 'non', 8, 950000, 'Roubaix', 3, 'Local Show Room type loft', 'local a louer - 400m² - 600€/m²/an', NULL),
(15, '26 rue Louvre', 90, 'oui', 9, 854200, 'Marseille', 3, 'Local Galerie d’Art au Cœur de Saint Germain', ' local a louer - 90m² - 1000€/m²/an', NULL),
(16, '27 rue Mer', 848, 'non', 80, 1400000, 'Bourget', 4, 'Vente immeuble Le Bourget (93350)', '10 appartements, 5 garages dans 2 immeubles sur terrain 848 m²', NULL),
(17, '42 rue Pavis', 820, 'non', 59, 990000, 'Luxe', 4, 'Vente immeuble Portugal', 'Residence de Luxe 820m²', NULL),
(18, '46 rue Lavoisier', 150, 'oui', 0, 80000, 'Bloup', 5, 'Terrain 500m² Boisemont', ' terrain 500 m² Boisemont (95000)', NULL),
(19, '57 rue Loupille', 1000, 'oui', 0, 150000, 'Basses', 5, 'Terrain 1.000 m² Basses', 'Vente terrain 1.000 m² Basses (86200)', NULL),
(20, '62 rue Belleverte', 750, 'oui', 0, 85000, 'Bignou', 5, 'Terrain 750m²', 'Vente terrain 750m² Bignou', NULL),
(21, '75 rue Lafoison', 686, 'oui', 0, 152258, 'Iledyeu', 5, 'Terrain 686 m²', 'terrain 686 m² L\'ile-D\'yeu (85350)', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `critere`
--

DROP TABLE IF EXISTS `critere`;
CREATE TABLE IF NOT EXISTS `critere` (
  `piece` int(11) NOT NULL,
  `surface` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`piece`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `critere`
--

INSERT INTO `critere` (`piece`, `surface`, `prix`) VALUES
(10, 200, 200000),
(20, 400, 400000),
(30, 600, 600000),
(40, 800, 800000),
(50, 1000, 1000000);

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
('pictures/imageSlider/slidermaison/slidermaison1/image1maison1.jpg', 1),
('pictures/imageSlider/slidermaison/slidermaison1/image2maison1.jpg', 1),
('pictures/imageSlider/slidermaison/slidermaison1/image3maison1.jpg', 1),
('pictures/imageSlider/slidermaison/slidermaison2/image1maison2.jpg', 2),
('pictures/imageSlider/slidermaison/slidermaison2/image2maison2.jpg', 2),
('pictures/imageSlider/slidermaison/slidermaison2/image3maison2.jpg', 2),
('pictures/imageSlider/slidermaison/slidermaison3/image1maison3.jpg', 3),
('pictures/imageSlider/slidermaison/slidermaison3/image2maison3.jpg', 3),
('pictures/imageSlider/slidermaison/slidermaison3/image3maison3.jpg', 3),
('pictures/imageSlider/slidermaison/slidermaison4/image1maison4.jpg', 4),
('pictures/imageSlider/slidermaison/slidermaison4/image2maison4.jpg', 4),
('pictures/imageSlider/slidermaison/slidermaison4/image3maison4.jpg', 4),
('pictures/imageSlider/slidermaison/slidermaison5/image1maison5.jpg', 5),
('pictures/imageSlider/slidermaison/slidermaison5/image2maison5.jpg', 5),
('pictures/imageSlider/slidermaison/slidermaison5/image3maison5.jpg', 5),
('pictures/imageSlider/sliderappart/sliderappart1/appart1photo2.jpg', 6),
('pictures/imageSlider/sliderappart/sliderappart1/appart1photo3.jpg', 6),
('pictures/imageSlider/sliderappart/sliderappart1/appartement1.jpg', 6),
('pictures/imageSlider/sliderappart/sliderappart2/appart2photo2.jpg', 7),
('pictures/imageSlider/sliderappart/sliderappart2/appart2photo3.jpg', 7),
('pictures/imageSlider/sliderappart/sliderappart2/appartement2.jpg', 7),
('pictures/imageSlider/sliderappart/sliderappart3/appart3photo2.jpg', 8),
('pictures/imageSlider/sliderappart/sliderappart3/appart3photo3.jpg', 8),
('pictures/imageSlider/sliderappart/sliderappart3/appartement3.jpg', 8),
('../pictures/imageSlider/sliderappart/sliderappart4/appart4photo3.jpg', 9),
('../pictures/imageSlider/sliderappart/sliderappart4/appartement4.jpg', 9),
('pictures/imageSlider/sliderappart/sliderappart4/appart4photo2.jpg', 9),
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
('../pictures/imageSlider/sliderlocaux/sliderlocal3/image3local3.jpg', 15),
('../pictures/imageSlider/sliderimmeuble/sliderimmeuble1/image1immeuble1.jpg', 16),
('../pictures/imageSlider/sliderimmeuble/sliderimmeuble1/image2immeuble1.jpg', 16),
('../pictures/imageSlider/sliderimmeuble/sliderimmeuble1/image3immeuble1.jpg', 16),
('../pictures/imageSlider/sliderimmeuble/sliderimmeuble2/image1immeuble2.jpg', 17),
('../pictures/imageSlider/sliderimmeuble/sliderimmeuble2/image2immeuble2.jpg', 17),
('../pictures/imageSlider/sliderimmeuble/sliderimmeuble2/image3immeuble2.jpg', 17),
('../pictures/imageSlider/sliderterrain/sliderterrain1/image1terrain1.jpg', 18),
('../pictures/imageSlider/sliderterrain/sliderterrain1/image2terrain1.jpg', 18),
('../pictures/imageSlider/sliderterrain/sliderterrain1/image3terrain1.jpg', 18),
('../pictures/imageSlider/sliderterrain/sliderterrain2/image1terrain2.jpg', 19),
('../pictures/imageSlider/sliderterrain/sliderterrain2/image2terrain2.jpg', 19),
('../pictures/imageSlider/sliderterrain/sliderterrain2/image3terrain2.jpg', 19),
('../pictures/imageSlider/sliderterrain/sliderterrain3/image1terrain3.jpg', 20),
('../pictures/imageSlider/sliderterrain/sliderterrain3/image2terrain3.jpg', 20),
('../pictures/imageSlider/sliderterrain/sliderterrain3/image3terrain3.jpg', 20),
('../pictures/imageSlider/sliderterrain/sliderterrain4/image1terrain4.jpg', 21),
('../pictures/imageSlider/sliderterrain/sliderterrain4/image2terrain4.jpg', 21),
('../pictures/imageSlider/sliderterrain/sliderterrain4/image3terrain4.jpg', 21);

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
  `mdp` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `mdp`) VALUES
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
