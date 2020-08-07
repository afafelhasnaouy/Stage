-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 16 juil. 2020 à 23:23
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `afaf`
--

-- --------------------------------------------------------

--
-- Structure de la table `cheques`
--

DROP TABLE IF EXISTS `cheques`;
CREATE TABLE IF NOT EXISTS `cheques` (
  `nom` varchar(50) DEFAULT NULL,
  `date_cheq` varchar(50) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `banq` varchar(50) NOT NULL,
  `n_cheq` int(50) NOT NULL,
  `montant` int(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `tiers` int(200) NOT NULL,
  `n_contrat` int(200) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`n_cheq`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cheques`
--

INSERT INTO `cheques` (`nom`, `date_cheq`, `ville`, `banq`, `n_cheq`, `montant`, `type`, `tiers`, `n_contrat`, `username`) VALUES
('elhasnaouy', '31/07/2020', 'Tanger', 'POPULAIRE', 14785, 55555, 'Encours', 87777, 5522, 'afaf');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('afaf', 'afaf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
