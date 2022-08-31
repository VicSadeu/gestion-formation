-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 28 fév. 2022 à 19:28
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_eval`
--

-- --------------------------------------------------------

--
-- Structure de la table `evaluer`
--

CREATE TABLE `evaluer` (
  `Id_eval` int(11) NOT NULL,
  `11` varchar(3) NOT NULL,
  `12` varchar(50) NOT NULL,
  `21` int(11) NOT NULL,
  `22` int(11) NOT NULL,
  `23` int(11) NOT NULL,
  `24` int(11) NOT NULL,
  `25` int(11) NOT NULL,
  `31` int(11) NOT NULL,
  `32` int(11) NOT NULL,
  `33` int(11) NOT NULL,
  `34` int(11) NOT NULL,
  `35` int(11) NOT NULL,
  `41` int(11) NOT NULL,
  `42` int(11) NOT NULL,
  `43` int(11) NOT NULL,
  `44` int(11) NOT NULL,
  `45` int(11) NOT NULL,
  `51` varchar(3) NOT NULL,
  `52` varchar(3) NOT NULL,
  `53` varchar(20) NOT NULL,
  `54` date NOT NULL,
  `61` text NOT NULL,
  `62` text NOT NULL,
  `63` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_for` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nom_for` varchar(50) NOT NULL,
  `lib_for` varchar(100) NOT NULL,
  `formateur` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_for`, `id_user`, `nom_for`, `lib_for`, `formateur`, `date_debut`, `date_fin`) VALUES
(1, 0, 'serveur ', 'azerty', 2, '2022-02-10', '2022-02-19'),
(2, 0, 'imp', 'qsd', 2, '2022-02-04', '2022-02-17'),
(3, 0, 'ecran', 'comment depanné un ecran ', 0, '2022-02-04', '2022-02-10'),
(4, 0, 'ITIL', 'azerty', 3, '2022-02-09', '2022-02-16'),
(5, 0, 'Electronique', 'ee aa vv bb gghjyh hujkhgheqrtq ykyryotrthy,t sh ujeketyeytk sk', 1, '2022-02-23', '2022-02-25'),
(6, 0, 'Machine Learning', 'Apprendre les techniques de l\'apprentissage automatique.', 2, '2022-03-25', '2022-04-10');

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE `participant` (
  `id_part` varchar(10) NOT NULL,
  `nom_part` varchar(50) NOT NULL,
  `prenom_part` varchar(50) NOT NULL,
  `pseudo_part` varchar(50) NOT NULL,
  `email_part` varchar(50) NOT NULL,
  `password_part` varchar(20) NOT NULL,
  `tel_part` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `participant`
--

INSERT INTO `participant` (`id_part`, `nom_part`, `prenom_part`, `pseudo_part`, `email_part`, `password_part`, `tel_part`, `role`) VALUES
('', 'aaa', 'aaa', 'aaa', 'A@gmail.com', 'aaa', 123, ''),
('bbb', 'sadeu', 'viky', '', 'vicsadeu@gmail.com', 'bbb', 123456, '0'),
('part1', 'MBE', 'VIKY', '', 'vicsadeu@gmail.com', '12345678', 2147483647, '0'),
('part2', 'talla', 'yvan', '', 'yvantalla@gmail.com', '12345678', 2147483647, '0'),
('raouf', 'Mekou', 'Raouf', '', 'raoufmekou@gmail.com', 'm', 0, '0'),
('vic', '', '', '', '', 'Meukouontchou', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `responsable`
--

CREATE TABLE `responsable` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(50) NOT NULL,
  `prenom_user` varchar(50) NOT NULL,
  `pseudo_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(20) NOT NULL,
  `tel_user` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `responsable`
--

INSERT INTO `responsable` (`id_user`, `nom_user`, `prenom_user`, `pseudo_user`, `email_user`, `password_user`, `tel_user`, `role`) VALUES
(1, 'sadeu', 'viky', 'aaa', 'vicsadeu@gmail.com', 'aaa', 1234567, '1'),
(3, 'zzz', 'eee', 'iii', 'iii@gmail.com', 'iii', 1234456, 'personnel');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `evaluer`
--
ALTER TABLE `evaluer`
  ADD PRIMARY KEY (`Id_eval`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_for`);

--
-- Index pour la table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id_part`);

--
-- Index pour la table `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `evaluer`
--
ALTER TABLE `evaluer`
  MODIFY `Id_eval` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_for` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `responsable`
--
ALTER TABLE `responsable`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
