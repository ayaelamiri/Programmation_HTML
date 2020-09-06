-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 02 sep. 2020 à 13:14
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ensajcapfin`
--

-- --------------------------------------------------------

--
-- Structure de la table `alarmes`
--

CREATE TABLE `alarmes` (
  `id` int(11) NOT NULL,
  `Injectionreseau` int(11) NOT NULL,
  `onduleur` int(11) NOT NULL,
  `Pertecommunication` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `alarmes`
--

INSERT INTO `alarmes` (`id`, `Injectionreseau`, `onduleur`, `Pertecommunication`) VALUES
(1, 631, 330, 201),
(2, 30, 254, 874),
(3, 759, 654, 123),
(4, 235, 987, 456),
(5, 256, 321, 147),
(6, 45, 25, 63),
(7, 25, 12, 35);

-- --------------------------------------------------------

--
-- Structure de la table `blanceenergrtique`
--

CREATE TABLE `blanceenergrtique` (
  `id` int(11) NOT NULL,
  `Reseau` int(11) NOT NULL,
  `energiesolaire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `blanceenergrtique`
--

INSERT INTO `blanceenergrtique` (`id`, `Reseau`, `energiesolaire`) VALUES
(1, 631, 459),
(2, 20, 50),
(6, 30, 120),
(7, 90, 45),
(8, 63, 60),
(9, 64, 78),
(10, 35, 98),
(11, 971, 28),
(12, 654, 582),
(13, 421, 123);

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `id` int(11) NOT NULL,
  `capteurv` varchar(255) NOT NULL,
  `capteurnam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`id`, `capteurv`, `capteurnam`) VALUES
(1, '10', 'Réseau\r\n'),
(2, '631KWH/Février', 'Réseau\r\n'),
(3, '13.6 KWp(DC)', 'energie solaire'),
(4, '12.7 KW5AC', 'energie solaire'),
(5, '459 KWh/ Février', 'energie solaire'),
(6, '2.104 KWh /Février', 'energie solaire/Objective :'),
(7, '459 KWh', 'FEVRIER'),
(8, '4411 \'DH\'', 'FEVRIER'),
(9, '-257 Kg', 'FEVRIER'),
(10, '610.6 K/m2', 'Température solaire'),
(11, '19 c', 'Température amblante'),
(12, '44 c', 'Température des modules'),
(13, '24 m/s', 'Vitesse du vent'),
(14, '23.23 kW', 'Utilisation'),
(15, '5.773 kWh/Février', 'Utilisation');

-- --------------------------------------------------------

--
-- Structure de la table `fractionsolaire`
--

CREATE TABLE `fractionsolaire` (
  `id` int(11) NOT NULL,
  `matin` int(11) NOT NULL,
  `apresmidi` int(11) NOT NULL,
  `finjeurnee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fractionsolaire`
--

INSERT INTO `fractionsolaire` (`id`, `matin`, `apresmidi`, `finjeurnee`) VALUES
(4, 154, 242, 30),
(8, 70, 845, 30),
(9, 952, 923, 14),
(10, 956, 321, 20),
(11, 852, 951, 123),
(12, 123, 456, 231),
(13, 456, 987, 321);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `alarmes`
--
ALTER TABLE `alarmes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blanceenergrtique`
--
ALTER TABLE `blanceenergrtique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fractionsolaire`
--
ALTER TABLE `fractionsolaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `alarmes`
--
ALTER TABLE `alarmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `blanceenergrtique`
--
ALTER TABLE `blanceenergrtique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `capteur`
--
ALTER TABLE `capteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `fractionsolaire`
--
ALTER TABLE `fractionsolaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
