-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 01 oct. 2025 à 16:50
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `smartbike`
--

-- --------------------------------------------------------

--
-- Structure de la table `velos`
--

CREATE TABLE `velos` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `date_ajout` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `velos`
--

INSERT INTO `velos` (`id`, `nom`, `prix`, `description`, `photo`, `date_ajout`) VALUES
(1, 'EfreiBike', 1299.99, 'Le vélo électrique parfait pour aller dans paris', 'velo1.jpg', '2025-10-01 15:25:36'),
(2, 'MaelBike', 1599.99, 'Velo de mael', 'velo2.jpg', '2025-10-01 15:25:36'),
(3, 'veloidir', 1899.99, 'le velo de idir', 'velo3.jpg', '2025-10-01 15:25:36'),
(4, 'velosofiane', 2299.99, 'le velo de sofiane', 'velo4.jpg', '2025-10-01 15:25:36');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `velos`
--
ALTER TABLE `velos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `velos`
--
ALTER TABLE `velos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
