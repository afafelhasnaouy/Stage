-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 07 août 2020 à 07:44
-- Version du serveur :  5.7.23
-- Version de PHP :  5.6.38

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
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(33) NOT NULL AUTO_INCREMENT,
  `username_admin` varchar(250) NOT NULL,
  `password_admin` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username_admin`, `password_admin`) VALUES
(1, 'admin', 'admin');

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
  `action` varchar(33) NOT NULL DEFAULT 'Validation En Cours',
  `etat` varchar(33) DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`n_cheq`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cheques`
--

INSERT INTO `cheques` (`nom`, `date_cheq`, `ville`, `banq`, `n_cheq`, `montant`, `type`, `tiers`, `n_contrat`, `action`, `etat`, `username`) VALUES
('elhasnaouy', '31/07/2020', 'Tanger', 'POPULAIRE', 14785, 55555, 'Encours', 87777, 5522, '', NULL, 'afaf'),
('elhasnaouy', '30/07/2020', 'Rabat', 'BMCE', 12345566, 45782, 'Encours', 7865, 4522, '', NULL, 'afaf'),
('dfs', '28/07/2020', 'Rabat', 'POPULAIRE', 9663, 88888, 'Encours', 75585858, 77777, '', NULL, 'afaf'),
('hey', '05/07/2020', 'Tanger', 'BMCE', 1111, 1478, 'Encours', 745, 141, '', NULL, 'afaf'),
('drivelux', '14/07/2020', 'Tanger', 'BMCE', 991173, 20000, 'ccc', 145126, 814652, '', NULL, 'afaf'),
('fffff', '24/07/2020', 'Rabat', 'POPULAIRE', 2111, 1478, 'Encours', 471, 254, '', NULL, 'afaf'),
('hey', '24/07/2020', 'Rabat', 'BMCE', 123, 123, 'EnPortfeuille', 123, 123, 'ValidÃ©', '0', 'afaf'),
('drivelux', '01/08/2020', 'Tanger', 'POPULAIRE', 114, 147, 'Encours', 114, 147, 'ValidÃ©', '0', 'afaf'),
('aaaaaa', '07/08/2020', 'Rabat', 'BMCE', 444, 444, 'EnPortfeuille', 444, 444, 'EnCours', NULL, 'afaf'),
('elhasnaouy', '23/07/2020', 'Tanger', 'BMCE', 888, 888, 'EnPortfeuille', 888, 88, 'ValidÃ©', NULL, 'test'),
('elhasnaouy', '25/07/2020', 'Rabat', 'POPULAIRE', 6666, 666, 'CC', 666, 666, 'ValidÃ©', '0', 'afaf'),
('hey', '31/07/2020', 'Rabat', 'POPULAIRE', 456, 456, 'CC', 456, 456, 'ValidÃ©', NULL, 'afaf'),
('afaf', '11/07/2020', 'Rabat', 'BMCE', 44, 44, 'EnPortfeuille', 44, 44, 'Validation En Cours', NULL, 'afaf'),
('afaf', '25/07/2020', 'Rabat', 'BMCE', 987, 987, 'Encours', 987, 987, 'Validation En Cours', NULL, 'afaf');

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
('afaf', 'afaf'),
('test', 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
