-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 06 déc. 2024 à 12:32
-- Version du serveur : 5.7.24
-- Version de PHP : 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `eat42`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_description` text NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`p_id`, `p_name`, `p_description`, `p_price`, `p_photo`) VALUES
(1, 'Bowl Burger', 'Découvrez le Bowl Burger, une fusion savoureuse de tous les ingrédients classiques d\'un burger, présenté de manière innovante dans un bol. Composé de steak haché de bœuf, légumes frais, fromage fondant et sauce maison, ce plat offre une alternative rafraîchissante au burger traditionnel. Idéal pour ceux qui cherchent à éviter le pain tout en savourant un repas consistant et délicieux.', 70, 'product_img/bowl-burger.png'),
(2, 'Tacos Savoyard', 'Découvrez le Tacos Savoyard, une fusion gourmande des saveurs montagnardes et du street food mexicain. Composé de morceaux de raclette fondante, de pommes de terre sautées, de lardons croustillants et d\'oignons caramélisés, le tout enveloppé dans une tortilla moelleuse. Une sauce crémeuse à l\'ail et aux herbes rehausse ce mariage unique de textures et de goûts. Ce tacos revisité est un véritable régal pour les amateurs de plats réconfortants.', 225, 'product_img/tacos-savoyard.png'),
(3, 'Bowl Code42', 'Découvrez le Bowl Code 42, une combinaison exquise de saveurs et de textures. Ce plat unique inclut des oignons frits croustillants, du céleri frais, du poulet mariné tendre, de la sauce algérienne épicée, des frites dorées et des cornichons croquants. Le tout est parfaitement agencé dans un bol pour une expérience culinaire complète et satisfaisante. Idéal pour les amateurs de plats riches en goût et en caractère.', 305, 'product_img/bowl-code42.png'),
(4, 'Salade César', 'Savourez notre Salade César, une combinaison classique et irrésistible de laitue croquante, de poulet grillé tendre, de croûtons dorés et d\'oignons frits. Le tout est agrémenté de parmesan râpé et nappé d\'une sauce César crémeuse et savoureuse. Chaque bouchée est un équilibre parfait de textures et de saveurs, pour un repas léger et délicieux.', 185, 'product_img/salade-cesar.png'),
(5, 'Tacos Caliente', 'Découvrez notre Tacos Caliente, une explosion de saveurs épicées et savoureuses. Ce tacos est garni de viande de boeuf assaisonnée et marinée, d\'oignons frits, de tomates fraîches, et d\'un mélange de fromages fondants. Le tout est relevé par notre sauce maison épicée qui apporte une touche de chaleur à chaque bouchée. Parfait pour les amateurs de plats piquants et délicieux.', 70, 'product_img/tacos-caliente.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
