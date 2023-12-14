-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Jeu 14 Décembre 2023 à 15:13
-- Version du serveur: 4.1.22
-- Version de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `sport`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `matricule` int(11) NOT NULL default '0',
  `m2p` varchar(20) NOT NULL default '',
  `nom` varchar(20) NOT NULL default '',
  `adresse` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`matricule`, `m2p`, `nom`, `adresse`) VALUES
(11, 'SAIDI', 'AAAA', 'KJBVGSCXJH'),
(22, 'AA', 'ZAZ', 'AAA');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(8) NOT NULL default '0',
  `prenom` varchar(20) NOT NULL default '',
  `nom` varchar(20) NOT NULL default '',
  `age` int(3) NOT NULL default '0',
  `height` int(3) NOT NULL default '0',
  `weight` int(3) NOT NULL default '0',
  `email` varchar(30) NOT NULL default '',
  `m2p` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `prenom`, `nom`, `age`, `height`, `weight`, `email`, `m2p`) VALUES
(123, 'salmaA', 'EFGDTHTH', 10, 100, 190, '190', '190'),
(1443, 'ABIR', 'HHHHH', 16, 13, 140, 'saidiabir2003@gmail.com', 'AZERTY'),
(3455, 'mimi', 'saada', 19, 160, 60, 'saadamimi@gmail.com', 'azer'),
(111111, 'RRR', 'TTT', 1111, 11, 11, 'GGF', 'AAAAA'),
(123444, 'ABIR', 'SAIDI', 20, 167, 60, 'hacen', 'hacen'),
(12345678, 'AZERTY', 'AZERT', 12, 55, 233, 'NHNH', 'NHNBH');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE IF NOT EXISTS `cours` (
  `numC` int(11) NOT NULL auto_increment,
  `nomC` varchar(20) NOT NULL default '',
  `nom` varchar(20) NOT NULL default '',
  `heureD` varchar(5) NOT NULL default '',
  `duree` int(11) NOT NULL default '0',
  `prix` float NOT NULL default '0',
  PRIMARY KEY  (`numC`),
  KEY `nom` (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `cours`
--

INSERT INTO `cours` (`numC`, `nomC`, `nom`, `heureD`, `duree`, `prix`) VALUES
(1, 'AAA', 'BEN MANSOUR', '111', 2, 30),
(2, 'BB', 'BB', '1', 1, 20);

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL default '0',
  `nom` varchar(20) NOT NULL default '',
  `prenom` varchar(20) NOT NULL default '',
  `tache` varchar(20) NOT NULL default '',
  `salaire` float NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `employee`
--


-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE IF NOT EXISTS `salle` (
  `numS` int(11) NOT NULL auto_increment,
  `numC` int(11) NOT NULL default '0',
  `id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`numS`),
  KEY `numC` (`numC`,`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `salle`
--

