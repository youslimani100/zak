-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 23 oct. 2023 à 09:08
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
  `id_utilisateur` int(3) NOT NULL,
  `nom_utilisateur` varchar(100) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom_utilisateur`, `mot_de_passe`) VALUES
(1, 'user01', 'mp01'),
(2, 'user02', 'mp02'),
(3, 'dalger', 'dalger'),
(4, 'dadrar', 'dadrar'),
(5, 'dbatna', 'dbatna');

-- --------------------------------------------------------

--
-- Structure de la table `zaouia`
--

CREATE TABLE `zaouia` (
  `id_zaouia` int(6) NOT NULL,
  `nom_zaouia` varchar(100) NOT NULL,
  `tariqua_sofia` varchar(100) NOT NULL,
  `fondateur_zaouia` text NOT NULL,
  `annee_etablissement_mil` date NOT NULL,
  `annee_etablissement_hidj` date NOT NULL,
  `travaillant` tinyint(1) NOT NULL,
  `type_activite` varchar(100) NOT NULL,
  `wilaya` varchar(50) NOT NULL,
  `commune` varchar(50) NOT NULL,
  `Adresse` varchar(200) NOT NULL,
  `tel_fixe` int(9) NOT NULL,
  `fax` int(9) NOT NULL,
  `tel_portable` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `coordonees_maps` varchar(50) NOT NULL,
  `nbr_encadreurs_employes` int(3) NOT NULL,
  `nbr_encadreurs_non_employes` int(3) NOT NULL,
  `nbr_etudiants_internes` int(4) NOT NULL,
  `nbr_etudiants_externes` int(4) NOT NULL,
  `nbr_etudiants_externes_masculin` int(4) NOT NULL,
  `nbr_etudiants_externes_feminin` int(4) NOT NULL,
  `nbr_etudiants_externes_etrangers` int(4) NOT NULL,
  `pays_etudiants_etrangers` mediumtext NOT NULL,
  `connex_Internet` tinyint(1) NOT NULL,
  `plateformes_enligne` mediumtext NOT NULL,
  `nom_actuel_cheikh_zaouia` varchar(50) NOT NULL,
  `Date_naiss_cheikh_zaouia` date NOT NULL,
  `onction_cheikh_zaouia` varchar(50) NOT NULL,
  `photo_cheikh_zaouia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `zawiya`
--

CREATE TABLE `zawiya` (
  `id_zaouia` int(3) NOT NULL,
  `nom_zaouia` varchar(50) NOT NULL,
  `adresse_zaouia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `zawiya`
--

INSERT INTO `zawiya` (`id_zaouia`, `nom_zaouia`, `adresse_zaouia`) VALUES
(1, 'الزاوية التجانية', 'بلدية عين ماضي-الأغواط'),
(2, 'الزاوية الثعالبية', 'الجزائر العاصمة'),
(3, 'الزاوية الرحمانية', 'أولادجلال');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- Index pour la table `zaouia`
--
ALTER TABLE `zaouia`
  ADD PRIMARY KEY (`id_zaouia`);

--
-- Index pour la table `zawiya`
--
ALTER TABLE `zawiya`
  ADD PRIMARY KEY (`id_zaouia`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `zaouia`
--
ALTER TABLE `zaouia`
  MODIFY `id_zaouia` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `zawiya`
--
ALTER TABLE `zawiya`
  MODIFY `id_zaouia` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `zawiya`
--
ALTER TABLE `zawiya`
  ADD CONSTRAINT `supp_user` FOREIGN KEY (`id_zaouia`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
