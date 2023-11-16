-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 02 avr. 2023 à 21:00
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bbpsurveybuilder`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `country` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `answered`
--

CREATE TABLE `answered` (
  `idanswered` int(11) NOT NULL,
  `answer` enum('Y','N') NOT NULL,
  `idanswer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `answered`
--

INSERT INTO `answered` (`idanswered`, `answer`, `idanswer`) VALUES
(1, 'Y', 1),
(2, 'N', 2),
(3, 'Y', 9),
(4, 'N', 10),
(5, 'Y', 11),
(6, 'N', 12),
(7, 'N', 13),
(8, 'Y', 14),
(9, 'N', 15),
(10, 'N', 16),
(11, 'N', 17),
(12, 'N', 3),
(13, 'N', 6),
(14, 'N', 3),
(15, 'N', 6),
(16, 'N', 1),
(17, 'N', 9),
(18, 'N', 11),
(19, 'N', 14),
(20, 'N', 19);

-- --------------------------------------------------------

--
-- Structure de la table `answers`
--

CREATE TABLE `answers` (
  `idanswer` int(11) NOT NULL,
  `intitle` text NOT NULL,
  `idquestion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `answers`
--

INSERT INTO `answers` (`idanswer`, `intitle`, `idquestion`) VALUES
(1, 'oui', 1),
(2, 'non', 1),
(3, 'CAMEROUN', 4),
(4, 'ALGERIE', 4),
(5, 'COTE D\'IVOIRE', 4),
(6, 'ETO\'O FILS', 5),
(7, 'ABOUBAKAR VINCENT', 5),
(8, 'SADIO MANE', 5),
(9, 'oui', 2),
(10, 'non', 2),
(11, 'en travaillant dur chaque jour', 3),
(12, 'en entrant dans des sectes compliqués', 3),
(13, 'en ramenant mes connaissances en pratique', 3),
(14, '10 ans', 6),
(15, '20 ans', 6),
(16, '35ans', 6),
(17, 'plus', 6),
(18, 'souvent', 1),
(19, '10-12ans', 7),
(20, '20-35ans', 7);

-- --------------------------------------------------------

--
-- Structure de la table `investigators`
--

CREATE TABLE `investigators` (
  `idinvestigator` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `country` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `investigators`
--

INSERT INTO `investigators` (`idinvestigator`, `name`, `country`, `phone`, `email`) VALUES
(1, 'diana', 'CAMEROUN', '677030302', 'tchatchouangfarel@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `idquestion` int(11) NOT NULL,
  `intitle` varchar(100) NOT NULL,
  `idsurvey` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`idquestion`, `intitle`, `idsurvey`) VALUES
(1, 'etes vous un adolescent?', 1),
(2, 'avez vous des enfants?', 1),
(3, 'comments pensez vous developper votre pays?', 1),
(4, 'Qui va gagner cette coupe?', 2),
(5, 'Quel joueur marquera le plus de but?', 2),
(6, 'a quel age allez vous vous marier?', 1),
(7, 'quel tranche d\'age?', 1);

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `idsession` int(11) NOT NULL,
  `ipadress` varchar(100) NOT NULL,
  `idsurvey` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `session`
--

INSERT INTO `session` (`idsession`, `ipadress`, `idsurvey`) VALUES
(1, 'B0-5C-DA-E9-37-48', 1),
(2, 'B0-5C-DA-E9-37-48', 2),
(3, 'B0-5C-DA-E9-37-48', 2),
(4, 'B0-5C-DA-E9-37-48', 1);

-- --------------------------------------------------------

--
-- Structure de la table `subscription`
--

CREATE TABLE `subscription` (
  `idsubscription` int(11) NOT NULL,
  `status` enum('P','E') NOT NULL,
  `begindate` date NOT NULL DEFAULT current_timestamp(),
  `enddate` date NOT NULL,
  `idinvestigator` int(11) NOT NULL,
  `idtypesubscription` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `subscription`
--

INSERT INTO `subscription` (`idsubscription`, `status`, `begindate`, `enddate`, `idinvestigator`, `idtypesubscription`) VALUES
(1, 'P', '2023-03-05', '2023-03-05', 1, 1),
(2, 'P', '2023-03-05', '2023-06-01', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `subscriptions_type`
--

CREATE TABLE `subscriptions_type` (
  `idsubscriptiontype` int(11) NOT NULL,
  `label` enum('personal','professionnal') NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `subscriptions_type`
--

INSERT INTO `subscriptions_type` (`idsubscriptiontype`, `label`, `amount`) VALUES
(1, 'personal', 5000),
(2, 'professionnal', 15000);

-- --------------------------------------------------------

--
-- Structure de la table `survey`
--

CREATE TABLE `survey` (
  `idsurvey` int(11) NOT NULL,
  `img_path` varchar(50) NOT NULL,
  `title` varchar(70) NOT NULL,
  `description` text NOT NULL,
  `token` varchar(20) NOT NULL,
  `idinvestigator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `survey`
--

INSERT INTO `survey` (`idsurvey`, `img_path`, `title`, `description`, `token`, `idinvestigator`) VALUES
(1, '641658f41a5f0image-removebg-preview (5).png', 'promotion de been house cameroun an america', 'nous sommes une entreprise de commerce generale basé au cameroun et mondiale', '641658f41a5f0', 1),
(2, '6416f405cce31R_2-removebg-preview.png', 'COUPE DU MONDE 2023', 'pour vous qui etes passionnés du football, donnez nous vos avis sur les pronostiques a venir...', '6416f405cce31', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `status` enum('A','I') NOT NULL DEFAULT 'I' COMMENT 'investigator or admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`iduser`, `email`, `password`, `status`) VALUES
(1, 'tchatchouangfarel@gmail.com', '$2y$10$2mAxx6XLAVEtKKROWO8UhuleAsfC4KKGHkVymaaSkYmNpeZw27CdO', 'I');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Index pour la table `answered`
--
ALTER TABLE `answered`
  ADD PRIMARY KEY (`idanswered`);

--
-- Index pour la table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`idanswer`);

--
-- Index pour la table `investigators`
--
ALTER TABLE `investigators`
  ADD PRIMARY KEY (`idinvestigator`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`idquestion`);

--
-- Index pour la table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`idsession`);

--
-- Index pour la table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`idsubscription`);

--
-- Index pour la table `subscriptions_type`
--
ALTER TABLE `subscriptions_type`
  ADD PRIMARY KEY (`idsubscriptiontype`);

--
-- Index pour la table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`idsurvey`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `answered`
--
ALTER TABLE `answered`
  MODIFY `idanswered` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `answers`
--
ALTER TABLE `answers`
  MODIFY `idanswer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `investigators`
--
ALTER TABLE `investigators`
  MODIFY `idinvestigator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `idquestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `idsession` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `idsubscription` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `subscriptions_type`
--
ALTER TABLE `subscriptions_type`
  MODIFY `idsubscriptiontype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `survey`
--
ALTER TABLE `survey`
  MODIFY `idsurvey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
