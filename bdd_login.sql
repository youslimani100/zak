-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 17 oct. 2023 à 23:03
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdd_login`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `nom_utilisateur` varchar(100) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`nom_utilisateur`, `mot_de_passe`) VALUES
('user01', 'mp01'),
('user02', 'mp02'),
('dalger', 'dalger'),
('dadrar', 'dadrar'),
('dbatna', 'dbatna');

-- --------------------------------------------------------

--
-- Structure de la table `zawiya`
--

CREATE TABLE `zawiya` (
  `id_zawiya` int(3) NOT NULL,
  `nom_zawiya` varchar(50) NOT NULL,
  `adresse_zawiya` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `zawiya`
--

INSERT INTO `zawiya` (`id_zawiya`, `nom_zawiya`, `adresse_zawiya`) VALUES
(1, 'الزاوية التجانية', 'بلدية عين ماضي-الأغواط'),
(2, 'الزاوية الثعالبية', 'الجزائر العاصمة'),
(3, 'الزاوية الرحمانية', 'أولادجلال');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `zawiya`
--
ALTER TABLE `zawiya`
  ADD PRIMARY KEY (`id_zawiya`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `zawiya`
--
ALTER TABLE `zawiya`
  MODIFY `id_zawiya` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
