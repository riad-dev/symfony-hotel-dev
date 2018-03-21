-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 19 mars 2018 à 18:01
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `symfony-hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `id_chambre` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nb_pers` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id_chambre`, `nom`, `nb_pers`, `prix`, `description`, `image`) VALUES
(1, 'Angular', '2', '120', 'AngularJS est né en 2009 dans les locaux de Google. Deux développeurs du nom de Brad Green et Shyam Seshadri commençaient sérieusement à déprimer devant leur projet appelé \"Google Feedback\". Une immense frustration les envahissait au fur et à mesure que l', 'chambre_5.jpg'),
(2, 'Bootstrap', '3', '150', 'Avant l\'arrivée de Bootstrap, plusieurs bibliothèques existaient, ce qui menait à des incohérences et à un coût de maintenance élevé.\r\n\r\nCette plate-forme a été conçue par deux développeurs faisant partie de la mouvance de développeurs qui gravitent autou', 'chambre_4.jpg'),
(3, 'JavaScript', '1', '90', 'JavaScript a été créé en 1995 par Brendan Eich. Il a été standardisé sous le nom d\'ECMAScript en juin 1997 par Ecma International dans le standard ECMA-262. Le standard ECMA-262 en est actuellement à sa 8e édition. JavaScript n\'est depuis qu\'une implément', 'chambre_7.jpg'),
(4, 'Python', '2', '180', 'Python est un langage de programmation objet, multi-paradigme et multiplateformes. Il favorise la programmation impérative structurée, fonctionnelle et orientée objet. Il est doté d\'un typage dynamique fort, d\'une gestion automatique de la mémoire par ram', 'chambre_1.jpg'),
(5, 'Ruby', '1', '120', 'Ruby est un langage de programmation libre et dynamique, qui met l\'accent sur la simplicité et la productivité. Sa syntaxe élégante en facilite la lecture et l\'écriture.\r\n\r\nIl est interprété, orienté objet, et multi-paradigme.', 'chambre_2.jpg'),
(6, 'symfony', '3', '200', 'L\'agence web française SensioLabs est à l\'origine du framework Sensio Framework4. À force de toujours recréer les mêmes fonctionnalités de gestion d\'utilisateurs, gestion ORM, etc., elle a développé ce framework pour ses propres besoins[réf. nécessaire]. ', 'chambre_3.jpg'),
(7, 'JQuery', '2', '200', 'Depuis sa création en 2006 et notamment à cause de la complexification croissante des interfaces Web, jQuery a connu un large succès auprès des développeurs Web et son apprentissage est aujourd\'hui un des fondamentaux de la formation aux technologies du W', 'chambre_6.jpg'),
(8, 'PHP', '2', '180', 'PHP (acronyme récursif), est un langage de programmation libre5, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP4, mais pouvant également fonctionner comme n\'importe quel langage interprété de façon locale. PHP est un lan', 'chambre_8.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id_comm` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id_comm`, `content`, `note`) VALUES
(1, 'Magnifique', 5),
(2, 'Ouais bof', 2);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `telephone`, `message`) VALUES
(1, 'zitouni', 'riadzitou@yahoo.fr', '0612223212', 'premier message');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role`, `nom`) VALUES
(1, 'riadzitou@yahoo.fr', 'secret', 'ROLE_ADMIN', 'RIAD'),
(2, 'azaz@gmail.com', '$2y$13$62HSkYVAiAUt.tbGsU.7fOMi9jZTzV4Pg2vaCe/QoLXItAX0/1mUu', 'ROLE_USER', 'martin'),
(4, 'bbc@gmail.com', '$2y$13$tqHaVHhNn9kZhCwlGIV78.ES/zuQLgdZQ3voYusXdhZiE1Bc3tV8y', 'ROLE_USER', 'eric'),
(5, 'yoyo@gmail.com', '$2y$13$tFblVpK16HccJQ3WlDeFK.GB4XSG0gwdeox5NkV4HCNw3.mJDt6jC', 'ROLE_USER', 'yoyo'),
(6, 'paul@gmail.com', '$2y$13$huNvikcA2GdlBu5nBvepw.VK1qyKhoQC8YIUgO9pVbocU71a.5lQW', 'ROLE_USER', 'Paul');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id_chambre`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comm`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_4C62E638E7927C74` (`email`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id_chambre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
