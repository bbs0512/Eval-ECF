-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 21 juil. 2025 à 14:02
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecoride`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `avis_id` int NOT NULL AUTO_INCREMENT,
  `commentaire` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `note` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `statut` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`avis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `covoiturage`
--

DROP TABLE IF EXISTS `covoiturage`;
CREATE TABLE IF NOT EXISTS `covoiturage` (
  `covoiturage_id` int NOT NULL AUTO_INCREMENT,
  `date_depart` date NOT NULL,
  `heure_depart` datetime NOT NULL,
  `lieu_depart` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `date_arrivee` date NOT NULL,
  `heure_arrivee` datetime NOT NULL,
  `lieu_arrivee` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `statut` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nb_place` int NOT NULL,
  `prix_personne` float NOT NULL,
  `voiture_id` int NOT NULL,
  PRIMARY KEY (`covoiturage_id`),
  KEY `voiture_id` (`voiture_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `employe_id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` int NOT NULL,
  PRIMARY KEY (`employe_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`employe_id`, `nom`, `prenom`, `email`, `password`, `role_id`) VALUES
(1, 'Garcia', 'José', 'jg@ecoride.fr', '$2y$10$U.zwAb3SgFZ25Eyed7DHNu2.06obfH54JTwmp0oE8RpJI/mzyXFjO', 1);

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `marque_id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`marque_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`role_id`, `libelle`) VALUES
(1, 'Administrateur'),
(2, 'Employe'),
(3, 'Utilisateur'),
(4, 'Chauffeur');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `utilisateur_id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telephone` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `adresse` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `photo` text COLLATE utf8mb4_general_ci NOT NULL,
  `pseudo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` int NOT NULL,
  PRIMARY KEY (`utilisateur_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`utilisateur_id`, `nom`, `prenom`, `email`, `password`, `telephone`, `adresse`, `date_naissance`, `photo`, `pseudo`, `role_id`) VALUES
(2, '', '', 'covoit01@gmail.com', '$2y$10$lD/zRV84ejcywGK/kLkWzuX6MFVoXoLGJMlIhhcbMmnvpfD2tBNkC', '', '', '0000-00-00', '', 'covoit01', 3),
(3, '', '', 'covoit2@gmail.com', '$2y$10$qWv2cQtrwZQRtmG83rCqa.BMu.yClIeVqUrN/BaHlTmAURo1.IN1S', '', '', '0000-00-00', '', 'covoit2', 3),
(4, '', '', 'covoit03@gmail.com', '$2y$10$zlsjWMl3E0Wnm1JUWEC/dOOTXfccC1C.FtSfldnHcw5pv6eG8dnxm', '', '', '0000-00-00', '', 'covoit03', 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_avis`
--

DROP TABLE IF EXISTS `utilisateur_avis`;
CREATE TABLE IF NOT EXISTS `utilisateur_avis` (
  `utilisateur_id` int NOT NULL,
  `avis_id` int NOT NULL,
  KEY `utilisateur_id` (`utilisateur_id`),
  KEY `avis_id` (`avis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_covoiturage`
--

DROP TABLE IF EXISTS `utilisateur_covoiturage`;
CREATE TABLE IF NOT EXISTS `utilisateur_covoiturage` (
  `utilisateur_id` int NOT NULL,
  `covoiturage_id` int NOT NULL,
  KEY `utilisateur_id` (`utilisateur_id`),
  KEY `covoiturage_id` (`covoiturage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `voiture_id` int NOT NULL AUTO_INCREMENT,
  `modele` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `immatriculation` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `energie` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `couleur` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `date_premiere_immatriculation` date NOT NULL,
  `marque_id` int NOT NULL,
  `utilisateur_id` int NOT NULL,
  PRIMARY KEY (`voiture_id`),
  KEY `marque_id` (`marque_id`),
  KEY `utilisateur_id` (`utilisateur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `covoiturage`
--
ALTER TABLE `covoiturage`
  ADD CONSTRAINT `covoiturage_ibfk_1` FOREIGN KEY (`voiture_id`) REFERENCES `voiture` (`voiture_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `employe`
--
ALTER TABLE `employe`
  ADD CONSTRAINT `employe_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `utilisateur_avis`
--
ALTER TABLE `utilisateur_avis`
  ADD CONSTRAINT `utilisateur_avis_ibfk_1` FOREIGN KEY (`avis_id`) REFERENCES `avis` (`avis_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `utilisateur_avis_ibfk_2` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`utilisateur_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `utilisateur_covoiturage`
--
ALTER TABLE `utilisateur_covoiturage`
  ADD CONSTRAINT `utilisateur_covoiturage_ibfk_1` FOREIGN KEY (`covoiturage_id`) REFERENCES `covoiturage` (`covoiturage_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `utilisateur_covoiturage_ibfk_2` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`utilisateur_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD CONSTRAINT `voiture_ibfk_1` FOREIGN KEY (`marque_id`) REFERENCES `marque` (`marque_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `voiture_ibfk_2` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`utilisateur_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
