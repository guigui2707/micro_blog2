-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 15 jan. 2018 à 10:56
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
-- Base de données :  `micro_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text NOT NULL,
  `date` int(11) NOT NULL,
  `idUtilisateurs` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `contenu`, `date`, `idUtilisateurs`) VALUES
(82, 'Bienvenue sur ce blog RÃ©mi !!', 1515869237, 107),
(16, 'Bienvenue Ã  tous ! L\'administrateur ', 1515523637, 104),
(18, 'Super ce blog ! :)', 1515523915, 105),
(94, 'Ce blog s\'agrandit c\'est super ! N\'hÃ©sitez pas Ã  inviter vos amis ! L\'administrateur.', 1516009604, 104),
(79, 'Je suis nouveau ici ! ', 1515868792, 108),
(68, 'Je suis le seul Ã  poster ! Je vais inviter mes amis sur ce micro blog ! ', 1515792913, 105),
(109, 'Ou habitez vous sinon ? :) Moi de Normandie', 1516012206, 105),
(110, 'Moi du Pas de calais ! ', 1516012232, 107),
(111, 'C\'est cool de pouvoir se parler tous ensemble  ', 1516012253, 107),
(112, 'Oui c\'est bien ! :)', 1516012269, 105),
(113, 'HÃ© oui c\'est pour cela que j\'ai crÃ©er ce blog ! ', 1516012506, 104);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `idUtilisateurs` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `sid` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idUtilisateurs`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateurs`, `email`, `mdp`, `nom`, `sid`) VALUES
(107, 'guillaume@guillaume.com', '0937d6b529933d0ef59ce458668013b9', 'guillaume', '0921328764a932b43006219d11514195'),
(106, 'caroux@caroux.com', 'a6011aaf3cb7bde24ecd58a179c8fa7c', 'caroux', 'db0a5500aed22290bed0aeceb14b97fc'),
(105, 'membre1@membre1.com', 'fe89440999123182414a6a96f7c9397a', 'Membre1', 'bf838ff78991ad853de688b3c59bc679'),
(104, 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Administrateur', '58fa2d1abea7b55a58678e27f9035963'),
(108, 'remi@remi.com', 'f1067e7173c7b9e6714ec7c88cf04bb1', 'remi', '46158fd54a6ebaa2a2b2e41b0c42336d'),
(109, 'ert@ert.com', 'e3e84538a1b02b1cc11bf71fe3169958', 'ert', '9085e9a11c0c6aaa47086c2cc2caf708'),
(110, 'aze@aze.com', '0a5b3913cbc9a9092311630e869b4442', 'aze', 'f488ad0b78f737aa33beea39298fea37'),
(111, 'salut@salut.fr', '3ed7dceaf266cafef032b9d5db224717', 'salut', 'c77646340d91ff39c1c441bdc398f2cd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
