-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 06 déc. 2022 à 08:48
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_immobiliere1`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartement`
--

CREATE TABLE `appartement` (
  `reference` int(11) NOT NULL,
  `proprietaire` varchar(50) NOT NULL,
  `localite` varchar(50) NOT NULL,
  `surface` decimal(10,0) NOT NULL,
  `nbPieces` int(11) NOT NULL,
  `domaineUsage` varchar(50) NOT NULL,
  `surfaceCommune` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `appartement`
--

INSERT INTO `appartement` (`reference`, `proprietaire`, `localite`, `surface`, `nbPieces`, `domaineUsage`, `surfaceCommune`) VALUES
(100, 'Omar', 'Tunis', '200', 5, 'Bureau', '20'),
(101, 'Ayda', 'Ariana', '90', 3, 'Domicile', '20'),
(102, 'Chawki', 'Sousse', '100', 4, 'Bureau', '10'),
(103, 'Omar', 'Sfax', '100', 4, 'Bureau', '25'),
(104, 'Anis', 'Ariana', '200', 7, 'Domicile', '24'),
(105, 'Imen ', 'Mahdia', '156', 5, 'Bureau', '25'),
(106, 'Lotfi', 'Ben Arous', '100', 4, 'Bureau', '10'),
(107, 'Imen ', 'Sfax', '103', 5, 'Bureau', '19'),
(108, 'Sami', 'Djerba', '200', 6, 'Domicile', '30'),
(109, 'Imen ', 'Sfax', '200', 5, 'Domicile', '25'),
(110, 'Riadh', 'Bizerte', '269', 7, 'Domicile', '50'),
(111, 'Amira', 'Mahdia', '200', 5, 'Bureau', '40');

-- --------------------------------------------------------

--
-- Structure de la table `villa`
--

CREATE TABLE `villa` (
  `reference` int(11) NOT NULL,
  `proprietaire` varchar(50) NOT NULL,
  `localite` varchar(50) NOT NULL,
  `surface` decimal(10,0) NOT NULL,
  `nbPieces` int(11) NOT NULL,
  `domaineUsage` varchar(50) NOT NULL,
  `nbEtages` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appartement`
--
ALTER TABLE `appartement`
  ADD PRIMARY KEY (`reference`);

--
-- Index pour la table `villa`
--
ALTER TABLE `villa`
  ADD PRIMARY KEY (`reference`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
