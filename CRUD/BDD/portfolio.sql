-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 18 juin 2019 à 14:39
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `idCompetences` int(11) NOT NULL,
  `icone` varchar(500) NOT NULL,
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`idCompetences`, `icone`, `texte`) VALUES
(1, '<i class=\"fas fa-code fa-3x\" style=\"color:#2f7bce;\"></i>', 'HTML/CSS<br>Javascript<br>JQuery<br>PHP<br>AJAX<br>'),
(2, '<i class=\"fas fa-layer-group fa-3x\" style=\"color:green\"></i>', 'UI/UX Design<br>Responsive Design<br>Wordpress<br>Bootstrap<br>Ligne de commande<br>'),
(3, '<i class=\"fab fa-adobe fa-3x\" style=\"color:red\"></i>', 'Photoshop<br>Illustrator<br>InDesign<br>Acrobat<br>Dreamweaver<br>'),
(4, '<i class=\"fas fa-camera fa-3x\" style=\"color:orange\"></i>', 'Photographie<br>Montage<br>Retouches photo<br>Colorimetrie<br>'),
(5, '<i class=\"fas fa-paste fa-3x\" style=\"color:yellow\"></i>', 'Word<br>Excel<br>Powerpoint<br>'),
(8, '<i class=\"fas fa-film fa-3x\" style=\"color:purple\"></i>', 'Flash<br>Windows Movie Maker<br>DaVinci Resolve<br>');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `age` varchar(2) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `email`, `avatar`, `age`, `password`) VALUES
(1, 'mojojojow', 'tiba@live.fr', '', '32', 'Abdoul270685');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`idCompetences`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `idCompetences` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
