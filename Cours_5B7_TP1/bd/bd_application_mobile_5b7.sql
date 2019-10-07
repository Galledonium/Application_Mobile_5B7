DROP DATABASE IF EXISTS bd_application_mobile_5b7;

CREATE DATABASE bd_application_mobile_5b7;

USE bd_application_mobile_5b7;

-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1:3306
-- Généré le :  Lun 07 Octobre 2019 à 17:29
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `application_mobile_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `prix` decimal(3,2) NOT NULL,
  `evaluation` int(2) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `applications`
--

INSERT INTO `applications` (`id`, `name`, `description`, `prix`, `evaluation`, `created`, `modified`) VALUES
(2, 'Minecraft - Pocket Edition', '', '9.99', 0, '2019-09-16 16:28:18', '2019-09-16 16:28:18');

-- --------------------------------------------------------

--
-- Structure de la table `applications_users`
--

CREATE TABLE `applications_users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `evaluations`
--

CREATE TABLE `evaluations` (
  `id` int(11) NOT NULL,
  `commentaires` varchar(255) DEFAULT NULL,
  `note` int(2) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `evaluations`
--

INSERT INTO `evaluations` (`id`, `commentaires`, `note`, `created`, `modified`) VALUES
(3, '446346', 5, '2019-10-07 16:13:56', '2019-10-07 16:13:56');

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

CREATE TABLE `paiements` (
  `id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `type_paiement_id` int(2) NOT NULL,
  `numero_carte` char(15) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `paiements`
--

INSERT INTO `paiements` (`id`, `application_id`, `type_paiement_id`, `numero_carte`, `created`, `modified`) VALUES
(1, 2, 1, '23408959082356', '2019-09-16 16:31:06', '2019-10-07 16:15:36');

-- --------------------------------------------------------

--
-- Structure de la table `types_paiements`
--

CREATE TABLE `types_paiements` (
  `id` int(2) NOT NULL,
  `typePaiement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `types_paiements`
--

INSERT INTO `types_paiements` (`id`, `typePaiement`) VALUES
(1, 'Débit');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created`, `modified`) VALUES
(1, 'TestBoy3', 'password', 'testboy@gmail.com', '0000-00-00 00:00:00', '2019-09-10 16:16:17'),
(3, 'TestBoy2', 'testboy', 'testboy2@gmail.com', '2019-09-10 16:15:33', '2019-09-10 16:15:33'),
(5, 'testboy4', 'testboy', 'testboy4@gmail.com', '2019-09-16 16:29:06', '2019-09-16 16:29:06');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `applications_users`
--
ALTER TABLE `applications_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_application_id_applications_users` (`application_id`);

--
-- Index pour la table `evaluations`
--
ALTER TABLE `evaluations`
  ADD PRIMARY KEY (`id`);

-- Index pour la table `paiements`
--
ALTER TABLE `paiements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_application_id_paiements` (`application_id`),
  ADD KEY `fk_type_paiement_id` (`type_paiement_id`);

--
-- Index pour la table `types_paiements`
--
ALTER TABLE `types_paiements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users` ADD `permissions` TINYINT NOT NULL AFTER `id`;

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `evaluations`
--
ALTER TABLE `evaluations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `paiements`
--
ALTER TABLE `paiements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `types_paiements`
--
ALTER TABLE `types_paiements`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `applications_users`
--
ALTER TABLE `applications_users`
  ADD CONSTRAINT `fk_application_id_applications_users` FOREIGN KEY (`application_id`) REFERENCES `applications` (`id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `paiements`
--
ALTER TABLE `paiements`
  ADD CONSTRAINT `fk_application_id_paiements` FOREIGN KEY (`application_id`) REFERENCES `applications` (`id`),
  ADD CONSTRAINT `fk_type_paiement_id` FOREIGN KEY (`type_paiement_id`) REFERENCES `types_paiements` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
