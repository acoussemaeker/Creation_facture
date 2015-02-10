-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 10 Février 2015 à 12:01
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `creation_facture`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Adresse` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE IF NOT EXISTS `facture` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Localisation` varchar(200) NOT NULL,
  `ID_Structure` int(20) NOT NULL,
  `ID_Produit` int(50) NOT NULL,
  `ID_Client` int(50) NOT NULL,
  `Date` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Prix` int(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `structure`
--

CREATE TABLE IF NOT EXISTS `structure` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Logo` varchar(200) NOT NULL,
  `Nom_banque` varchar(50) NOT NULL,
  `IBAN` varchar(50) NOT NULL,
  `BIC` varchar(20) NOT NULL,
  `Adresse` varchar(50) NOT NULL,
  `Tel` varchar(20) NOT NULL,
  `Fax` varchar(20) NOT NULL,
  `N°TVA` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
