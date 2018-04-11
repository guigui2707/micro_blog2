-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 11 avr. 2018 à 17:32
-- Version du serveur :  5.7.20-18-log
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `micro_blog_caroux`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `date` int(11) NOT NULL,
  `idUtilisateurs` int(11) NOT NULL,
  `IP` varchar(30) DEFAULT NULL,
  `nbVotes` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `contenu`, `date`, `idUtilisateurs`, `IP`, `nbVotes`) VALUES
(82, 'Bienvenue sur ce blog RÃ©mi !!', 1515869237, 107, NULL, NULL),
(16, 'Bienvenue Ã  tous ! L\'administrateur ', 1515523637, 104, NULL, NULL),
(18, 'Super ce blog ! :)', 1515523915, 105, NULL, NULL),
(94, 'Ce blog s\'agrandit c\'est super ! N\'hÃ©sitez pas Ã  inviter vos amis ! L\'administrateur.', 1516009604, 104, NULL, NULL),
(79, 'Je suis nouveau ici ! ', 1515868792, 108, NULL, NULL),
(68, 'Je suis le seul Ã  poster ! Je vais inviter mes amis sur ce micro blog ! ', 1515792913, 105, NULL, NULL),
(109, 'Ou habitez vous sinon ? :) Moi de Normandie', 1516012206, 105, '80.214.26.0', 1),
(110, 'Moi du Pas de calais ! ', 1516012232, 107, NULL, NULL),
(111, 'C\'est cool de pouvoir se parler tous ensemble  ', 1516012253, 107, NULL, NULL),
(112, 'Oui c\'est bien !', 1516012269, 105, NULL, NULL),
(113, 'HÃ© oui c\'est pour cela que j\'ai crÃ©er ce blog ! ', 1516012506, 104, '80.214.26.0', 1),
(122, 'Hello Guillaume, en quoi consiste ton blog, peux tu nous expliquer ? :)', 1516261861, 115, '80.214.26.0', 1),
(123, 'Mon blog consiste Ã  parler entre membres en publiant des messages :) Un peu le but d\'un blog :-p  @Zekiye', 1516262122, 104, '80.214.26.0', 1),
(125, 'test salut', 1519139609, 105, '80.214.26.0', 1),
(128, 'Voici un premier test url : http://www.pornhub.com', 1523466423, 118, '80.214.26.0', 1),
(129, 'Voici un deuxieme test mail : pronhub@porn.com ', 1523466446, 118, '80.214.26.0', 1),
(130, 'Et voici le dernier test du bouton lire la suite !!! En effet lorsque ce message dÃ©passera les 100 caractÃ¨res, un bouton lire la suite va apparaitre, codÃ© trÃ¨s proprement by @SmartyGuigui ! ', 1523466598, 118, '80.214.26.0', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `idUtilisateurs` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `sid` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateurs`, `email`, `mdp`, `nom`, `sid`) VALUES
(107, 'guillaume@guillaume.com', '0937d6b529933d0ef59ce458668013b9', 'guillaume', 'cd0a917035c08085e9d194c06d15e017'),
(106, 'caroux@caroux.com', 'a6011aaf3cb7bde24ecd58a179c8fa7c', 'caroux', 'db0a5500aed22290bed0aeceb14b97fc'),
(105, 'membre1@membre1.com', 'fe89440999123182414a6a96f7c9397a', 'Membre1', 'd505d637dc42eabc920b32277348b3ff'),
(104, 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Administrateur', '22d2e08ed8eff9c99e67e4352991c3eb'),
(108, 'remi@remi.com', 'f1067e7173c7b9e6714ec7c88cf04bb1', 'remi', '46158fd54a6ebaa2a2b2e41b0c42336d'),
(118, 'professeur@prof.com', '5a084bdbfe6c2839d49c4d0c4ec157b7', 'Professeur', 'edd6dff92ee60846663dda137b8a5684'),
(117, 'titi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'titi', '7300a049f3de5f655fa67b6137ece202'),
(116, 'salut@salut.com', '3ed7dceaf266cafef032b9d5db224717', 'salut', '351228241de50851d03f6390a3745130'),
(115, 'zekiye_1994@hotmail.fr', 'dad49270d1bcce71f0fd4736b6190410', 'Zekiye', '02e05a25aa85aa29190a4a0a4205773a');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`idUtilisateurs`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `idUtilisateurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
