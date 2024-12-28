-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 06 déc. 2024 à 12:22
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
(1, 'Bowl Burger', 'Vous vous faites enflé certes mais c\'est bon; en plus il y a du steak de la tomate et de la salade.', 70, 'product_img/bowl-burger.png'),
(2, 'Tacos Savoyard', 'Une arnaque enore plus grosse mais aussi plus gourmande, accompagnée de ses frites surgelées, de petites galettes de pomme de terres et de bacon périmé.', 225, 'product_img/tacos-savoyard.png'),
(3, 'Bowl Code42', 'Qualtitatif, fait maison par code 42, expliquant donc le prix car ils n\'ont pas le temps et bien sur accompagné d\'oignions frit, de celeri, de poulet mariné, de frite, \r\nde cornichons et de sauce algérienne, avec un assaisonnement sauce cancer. Cheh. Fallait pas gacher notre temps.', 305, 'product_img/bowl-code42.png'),
(4, 'Salade César', 'Nettement plus pire que le bowl code42, mais bien meilleur que le bowl burger. Avec celui ci vous avez une chance de pas mourir dans la journée. \r\nMais attendez vous à mourir dans la semaine. Et ouais, fallait passez à la caisse, même notre pire ennemi l\'a fait, il avait trop peur.', 185, 'product_img/salade-cesar.png'),
(5, 'Tacos Caliente', 'Va faire explosé votre colésthérol comme à troué votre porte feuille. Sale pauvre. \r\nCela va aussi exploser vos toilettes grâce au piment jalapeno et habanero et la sauce samourai. Votre ventre va aussi gonflé comme votre grand mère obèse grâce au steak, aux frites et aux tomates.', 70, 'product_img/tacos-caliente.png');

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
