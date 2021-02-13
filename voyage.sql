-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 13 fév. 2021 à 14:53
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `voyage`
--

-- --------------------------------------------------------

--
-- Structure de la table `etape`
--

CREATE TABLE `etape` (
  `idEtape` int(4) NOT NULL,
  `type` varchar(10) NOT NULL,
  `transport_number` varchar(10) NOT NULL,
  `departure_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `arrival_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `departure` varchar(20) DEFAULT NULL,
  `arrival` varchar(20) DEFAULT NULL,
  `seat` varchar(5) DEFAULT NULL,
  `gate` varchar(5) DEFAULT NULL,
  `baggage_drop` varchar(5) DEFAULT NULL,
  `idTravel` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etape`
--

INSERT INTO `etape` (`idEtape`, `type`, `transport_number`, `departure_date`, `arrival_date`, `departure`, `arrival`, `seat`, `gate`, `baggage_drop`, `idTravel`) VALUES
(1, 'bus', '400', '2021-02-12 05:00:00', '2021-02-12 05:21:00', 'Vence', 'Cagnes sur Mer', NULL, NULL, NULL, 1),
(2, 'train', 'PA420', '2021-02-12 05:33:00', '2021-02-12 07:41:00', 'Cagnes Sur mer', 'Montpellier', NULL, NULL, NULL, 1),
(3, 'bus', '94', '2021-02-13 05:00:00', '2021-02-12 05:35:00', 'Vence', 'Nice', NULL, NULL, NULL, 2),
(4, 'plane', 'PA420', '2021-02-12 06:06:00', '2021-02-12 08:41:00', 'Nice', 'Paris', '3A', '45B', '123', 2),
(5, 'plane', 'MNC51', '2021-02-13 08:16:00', '2021-02-13 09:01:00', 'vallée infernale', 'Manicouagan', '53s', '3m', '', 3);

-- --------------------------------------------------------

--
-- Structure de la table `travel`
--

CREATE TABLE `travel` (
  `idTravel` int(4) NOT NULL,
  `creator` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `travel`
--

INSERT INTO `travel` (`idTravel`, `creator`) VALUES
(1, 'Guillaume'),
(2, 'Guillaume'),
(3, 'Bob');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etape`
--
ALTER TABLE `etape`
  ADD PRIMARY KEY (`idEtape`);

--
-- Index pour la table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`idTravel`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etape`
--
ALTER TABLE `etape`
  MODIFY `idEtape` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `travel`
--
ALTER TABLE `travel`
  MODIFY `idTravel` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
