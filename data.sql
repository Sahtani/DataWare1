-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 28 nov. 2023 à 23:59
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dataware1`
--

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `idproject` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `idteam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `project`
--

INSERT INTO `project` (`idproject`, `name`, `start_date`, `end_date`, `idteam`) VALUES
(3, 'BRIEF', '2023-10-11', '2023-11-23', 4);

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE `team` (
  `idteam` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `datecreation` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `team`
--

INSERT INTO `team` (`idteam`, `name`, `datecreation`) VALUES
(2, 'CodeX', '2023-11-10'),
(3, 'DIGITAL_REVOLUTION', '2023-11-11'),
(4, 'TechTitans', '2023-10-17'),
(5, 'Adena Dotson', '2006-05-09'),
(6, 'Jorden Dickson', '2010-04-20'),
(7, 'Audra Fernandez', '1984-04-28'),
(8, 'Ezekiel Barrera', '2003-03-20'),
(9, 'Vance May', '2022-03-29');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `rol` int(11) DEFAULT 0,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `idteam` int(11) DEFAULT NULL,
  `idproject` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`iduser`, `password`, `email`, `rol`, `firstname`, `lastname`, `idteam`, `idproject`) VALUES
(1, 'Pa$$w0rd!', 'sacakomij@mailinator.com', 1, 'Suki', 'Cain', NULL, NULL),
(2, 'Pa$$w0rd!', 'hunirud@mailinator.com', 0, 'Silas', 'Ayala', 3, NULL),
(3, 'Pa$$w0rd!', 'moqetylewy@mailinator.com', 2, 'Ivy', 'Munoz', 2, NULL),
(4, 'Pa$$w0rd!', 'rogicigum@mailinator.com', 3, 'Shad', 'Tucker', NULL, NULL),
(5, 'Pa$$w0rd!', 'jynivafite@mailinator.com', 2, 'Tarik', 'Silva', NULL, NULL),
(6, 'Pa$$w0rd!', 'tavigoma@mailinator.com', 3, 'Boris', 'Hebert', 2, NULL),
(7, 'Pa$$w0rd!', 'mede@mailinator.com', 3, 'Nathaniel', 'Olson', 5, NULL),
(8, 'Pa$$w0rd!', 'zyhap@mailinator.com', 3, 'Catherine', 'Jordan', 3, NULL),
(9, 'Pa$$w0rd!', 'cofarujyf@mailinator.com', 3, 'Ashton', 'Compton', 7, NULL),
(10, 'Pa$$w0rd!', 'wupi@mailinator.com', 3, 'Richard', 'Joyner', 3, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`idproject`),
  ADD KEY `idteam` (`idteam`);

--
-- Index pour la table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`idteam`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `idteam` (`idteam`),
  ADD KEY `fk_project_user` (`idproject`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `idproject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `team`
--
ALTER TABLE `team`
  MODIFY `idteam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`idteam`) REFERENCES `team` (`idteam`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_project_user` FOREIGN KEY (`idproject`) REFERENCES `project` (`idproject`),
  ADD CONSTRAINT `idteam` FOREIGN KEY (`idteam`) REFERENCES `team` (`idteam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
