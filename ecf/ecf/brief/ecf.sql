-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Jeu 21 Mai 2020 à 19:23
-- Version du serveur: 5.1.36
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ecf`
--

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_post` datetime NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id_post`, `titre`, `contenu`, `date_post`) VALUES
(1, 'Bienvenue pour cet examen !', 'Lisez le fichier README pour savoir ce qu\'il faut réaliser et compléter ce projet php', '2020-05-21 19:10:31'),
(2, 'Attention!', 'Là où se trouve un commentaire dans le code, vous devez intervenir', '2020-05-21 19:11:10');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_post`, `auteur`, `commentaire`, `date_commentaire`) VALUES
(1, 1, 'Jim', 'Au travail les hards coders !', '2020-05-21 19:14:53'),
(2, 1, 'Damien', 'On ne lâche rien', '2020-05-21 19:15:16'),
(3, 2, 'Jim', 'Soyez rigoureux, analysez le code avant de vous lancez!', '2020-05-21 19:16:06'),
(4, 2, 'Damien', 'Vous devez d\'abord bien lire le sujet !', '2020-05-21 19:16:23');
