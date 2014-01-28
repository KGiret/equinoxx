-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 04 Janvier 2014 à 21:53
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `equinoxx`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_titre` varchar(70) NOT NULL,
  `article_contenu` varchar(2000) NOT NULL,
  `article_date` varchar(20) NOT NULL,
  `article_id_screen` int(11) NOT NULL,
  `article_id_video` int(11) NOT NULL,
  `article_id_tier` int(11) NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`article_id`, `article_titre`, `article_contenu`, `article_date`, `article_id_screen`, `article_id_video`, `article_id_tier`) VALUES
(18, 'Siegecrafter Blackfuse Heroic !', '<p>Il aura fallu que nous trouvions chaussure &agrave; notre pied mais voil&agrave; qui est fait, bravo &agrave; tous !</p>\r\n<p>Plus que deux avant al fin, on y arrive !</p>', '2013-12-15', 21, 6, 6),
(19, 'General Nazgrim Heroic !', '<p>Un peu de repos apr&egrave;s les Dark shamans avec le down rapide du p&eacute;on Nazgrim aka le boss le plus moche de tout les temps (apr&egrave;s Doomy) avec sa superbe armure !</p>', '2013-09-23', 20, 15, 6),
(20, 'Lei Shen heroic !', '<p>Il est enfin tomb&eacute;, apr&egrave;s 200 try de fails persos et autre plantage de box !</p>', '2013-05-06', 18, 9, 5),
(21, 'Raden 1st FR', '<p>Premier first realm de la guilde et first fr &eacute;galement ! C''est ouf !</p>', '2013-05-16', 19, 5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `classe_id` int(11) NOT NULL AUTO_INCREMENT,
  `classe_nom` varchar(20) NOT NULL,
  PRIMARY KEY (`classe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `classes`
--

INSERT INTO `classes` (`classe_id`, `classe_nom`) VALUES
(1, 'Paladin'),
(2, 'Death Knight'),
(3, 'Chaman'),
(4, 'Chasseur'),
(5, 'Moine'),
(6, 'Démoniste'),
(7, 'Mage'),
(8, 'Prêtre'),
(9, 'Guerrier'),
(10, 'Druide'),
(11, 'Voleur');

-- --------------------------------------------------------

--
-- Structure de la table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `player_id` int(11) NOT NULL AUTO_INCREMENT,
  `player_nom` varchar(20) NOT NULL,
  `player_id_class` int(11) NOT NULL,
  `player_id_spe` int(11) NOT NULL,
  `player_id_role` int(11) NOT NULL,
  `player_password` varchar(8) NOT NULL,
  `player_id_grade` int(11) NOT NULL,
  PRIMARY KEY (`player_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `players`
--

INSERT INTO `players` (`player_id`, `player_nom`, `player_id_class`, `player_id_spe`, `player_id_role`, `player_password`, `player_id_grade`) VALUES
(1, 'Taeldar', 1, 1, 2, '', 1),
(2, 'Mëg', 7, 17, 3, '', 2),
(3, 'Doomy', 2, 4, 1, '', 3),
(4, 'Komä', 11, 29, 3, '', 3),
(5, 'Theatreof', 8, 19, 2, '', 4),
(6, 'Sombrargent', 9, 22, 1, '', 4),
(7, 'Blåckheàrt', 3, 8, 3, '', 3),
(8, 'Silaenoz', 4, 12, 3, '', 2),
(9, 'Natsul', 5, 33, 2, '', 4),
(11, 'Märnok', 6, 15, 3, '', 4);

-- --------------------------------------------------------

--
-- Structure de la table `rang`
--

CREATE TABLE IF NOT EXISTS `rang` (
  `rang_id` int(11) NOT NULL AUTO_INCREMENT,
  `rang_nom` varchar(11) NOT NULL,
  PRIMARY KEY (`rang_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `rang`
--

INSERT INTO `rang` (`rang_id`, `rang_nom`) VALUES
(1, 'GM'),
(2, 'Officier'),
(3, 'Vétéran'),
(4, 'Membre');

-- --------------------------------------------------------

--
-- Structure de la table `recrutement`
--

CREATE TABLE IF NOT EXISTS `recrutement` (
  `recrutement_id` int(11) NOT NULL AUTO_INCREMENT,
  `recrutement_contenu` varchar(5000) NOT NULL,
  PRIMARY KEY (`recrutement_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `recrutement`
--

INSERT INTO `recrutement` (`recrutement_id`, `recrutement_contenu`) VALUES
(1, 'Nous ne souhaitons pas faire un deuxième roster "banc de touche" où nous recrutons des personnes pour ne rien en faire derrière, notre objectif est de tourner avec 14/15 personnes (maximum) pour pouvoir aligner les compos les plus optimisées possible sur les "first kill". N''ayez donc pas peur d''apply même si vous voyez déjà votre classe guildée chez nous, toute concurrence saine est la bienvenue.');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_nom` varchar(10) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`role_id`, `role_nom`) VALUES
(1, 'Tank'),
(2, 'Heal'),
(3, 'Dps');

-- --------------------------------------------------------

--
-- Structure de la table `screenshot`
--

CREATE TABLE IF NOT EXISTS `screenshot` (
  `screen_id` int(11) NOT NULL AUTO_INCREMENT,
  `screen_nom` varchar(25) NOT NULL,
  `screen_id_tier` int(2) NOT NULL,
  PRIMARY KEY (`screen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `screenshot`
--

INSERT INTO `screenshot` (`screen_id`, `screen_nom`, `screen_id_tier`) VALUES
(1, 'Pas de screenshot', 1),
(2, 'Pas de screenshot', 2),
(3, 'Pas de screenshot', 3),
(4, 'Pas de screenshot', 4),
(5, 'Pas de screenshot', 5),
(6, 'Pas de screenshot', 6),
(10, 'chogall-10-hm', 1),
(11, 'nefarian-10-hm', 1),
(12, 'baleroc-10-hm', 2),
(13, 'ragnaros-10-hm', 2),
(14, 'zonozz-10-hm', 3),
(15, 'ultraxion-10-hm', 3),
(16, 'tsulong-10-hm', 4),
(17, 'shaoffear-10-hm', 4),
(18, 'leishen-10-hm', 5),
(19, 'raden-10-hm', 5),
(20, 'nazgrim-10-hm', 6),
(21, 'blackfuse-10-hm', 6);

-- --------------------------------------------------------

--
-- Structure de la table `spe`
--

CREATE TABLE IF NOT EXISTS `spe` (
  `spe_id` int(11) NOT NULL AUTO_INCREMENT,
  `spe_nom` varchar(30) NOT NULL,
  `spe_etat` int(1) NOT NULL,
  `spe_id_classe` int(11) NOT NULL,
  PRIMARY KEY (`spe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Contenu de la table `spe`
--

INSERT INTO `spe` (`spe_id`, `spe_nom`, `spe_etat`, `spe_id_classe`) VALUES
(1, 'Sacré', 0, 1),
(2, 'Protection', 0, 1),
(3, 'Vindicte', 0, 1),
(4, 'Sang', 0, 2),
(5, 'Givre', 0, 2),
(6, 'Impie', 1, 2),
(7, 'Restauration', 1, 3),
(8, 'Amélioration', 0, 3),
(9, 'Élémentaire', 0, 3),
(10, 'Maîtrise des bêtes', 1, 4),
(11, 'Survie', 1, 4),
(12, 'Précision', 1, 4),
(13, 'Destruction', 1, 6),
(14, 'Affliction', 1, 6),
(15, 'Démonologie', 1, 6),
(16, 'Givre', 0, 7),
(17, 'Feu', 0, 7),
(18, 'Arcane', 0, 7),
(19, 'Discipline', 1, 8),
(20, 'Sacré', 1, 8),
(21, 'Ombre', 0, 8),
(22, 'Protection', 0, 9),
(23, 'Armes', 1, 9),
(24, 'Fureur', 1, 9),
(25, 'Équilibre', 1, 10),
(26, 'Gardien', 0, 10),
(27, 'Restauration', 1, 10),
(28, 'Farouche', 0, 10),
(29, 'Combat', 0, 11),
(30, 'Finesse', 0, 11),
(31, 'Assassinat', 0, 11),
(32, 'Maître brasseur', 0, 5),
(33, 'Tisse-brume', 0, 5),
(34, 'Marche-vent', 0, 5);

-- --------------------------------------------------------

--
-- Structure de la table `tier`
--

CREATE TABLE IF NOT EXISTS `tier` (
  `tier_id` int(11) NOT NULL AUTO_INCREMENT,
  `tier_nom` varchar(70) NOT NULL,
  `tier_numero` int(11) NOT NULL,
  `tier_etat` int(11) NOT NULL,
  PRIMARY KEY (`tier_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `tier`
--

INSERT INTO `tier` (`tier_id`, `tier_nom`, `tier_numero`, `tier_etat`) VALUES
(1, 'Cataclysm', 11, 0),
(2, 'Rage of the Firelands', 12, 0),
(3, 'Hour Of Twilight', 13, 0),
(4, 'Mists of Pandaria', 14, 0),
(5, 'The ThunderKing', 15, 0),
(6, 'Siege of Orgrimmar', 16, 1);

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_lien` varchar(100) NOT NULL,
  `video_nom` varchar(30) NOT NULL,
  `video_id_tier` int(11) NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`video_id`, `video_lien`, `video_nom`, `video_id_tier`) VALUES
(1, 'vide', 'Pas de vidéo', 1),
(2, 'vide', 'Pas de vidéo', 2),
(3, 'vide', 'Pas de vidéo', 3),
(4, 'vide', 'Pas de vidéo', 4),
(5, 'vide', 'Pas de vidéo', 5),
(6, 'vide', 'Pas de vidéo', 6),
(9, 'kOpD4wkoP3A', 'Lei shen 10 hm', 5),
(10, 'dt2b9vx4nJk', 'Ragnaros 10 hm', 2),
(11, 'gFWdGYYPB94', 'Nefarian 10 hm', 1),
(12, 'ByGYjpPIiCs', 'Baleroc 10 hm', 2),
(13, 'LAn_f8sI47g', 'Tsulong 10 hm', 4),
(14, 'Sv0TDZTmeFU', 'Sha of Fear hm', 4),
(15, 'iRTuW-JPy68', 'Nazgrim 10 hm', 6),
(16, '-EnDu2ubZ2Y', 'Yorsahj 10 hm', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
