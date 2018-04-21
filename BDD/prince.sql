-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 21, 2018 at 10:08 AM
-- Server version: 5.7.21-0ubuntu0.17.10.1
-- PHP Version: 7.1.15-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prince`
--

-- --------------------------------------------------------

--
-- Table structure for table `Commande`
--

CREATE TABLE `Commande` (
  `IdCmmande` int(1) NOT NULL,
  `IdUser` int(11) NOT NULL,
  `Livraison` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Commande`
--

INSERT INTO `Commande` (`IdCmmande`, `IdUser`, `Livraison`) VALUES
(2, 1, 0),
(3, 1, 0),
(4, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Fromages`
--

CREATE TABLE `Fromages` (
  `idFromages` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prixKG` float NOT NULL,
  `imgPath` varchar(30) NOT NULL,
  `animal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Fromages`
--

INSERT INTO `Fromages` (`idFromages`, `nom`, `prixKG`, `imgPath`, `animal`) VALUES
(1, 'Cammenbert', 12.4, 'cheese-camembert.png', 'vache'),
(2, 'Brie', 18.2, 'cheese-brie.png', 'vache'),
(3, 'Emmental', 12.3, 'cheese-emmental.png', 'vache'),
(4, 'Cheddar', 5.4, 'cheese-cheddar.png', 'vache'),
(5, 'Raclette', 3.3, 'cheese-raclette.png', 'vache'),
(6, 'St-Nectaire', 21.5, 'cheese-stNectaire.png', 'vache'),
(7, 'Tomme', 16.2, 'cheese-tomme.png', 'vache'),
(8, 'Roquefort', 14.6, 'cheese-roquefort.png', 'vache');

-- --------------------------------------------------------

--
-- Table structure for table `Produits`
--

CREATE TABLE `Produits` (
  `idProduit` int(11) NOT NULL,
  `idCommande` int(11) NOT NULL,
  `idFromages` int(11) NOT NULL,
  `quantite` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Produits`
--

INSERT INTO `Produits` (`idProduit`, `idCommande`, `idFromages`, `quantite`) VALUES
(1, 2, 3, 4),
(2, 2, 6, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `IdUser` int(11) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `login` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(48) NOT NULL,
  `status` varchar(12) NOT NULL,
  `Addr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`IdUser`, `nom`, `prenom`, `login`, `password`, `email`, `status`, `Addr`) VALUES
(1, 'dupond', 'michel', 'michel', 'micheline', 'michel.micheline@hotmail.fr', 'client', ''),
(2, 'pinnochio', 'jacques', 'jacques', 'MaFromagerie{D4MN_U_G0D_1NJ3c71NG}', 'jacquesLePreparateur@gmail.com', 'preparateur', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Commande`
--
ALTER TABLE `Commande`
  ADD PRIMARY KEY (`IdCmmande`);

--
-- Indexes for table `Fromages`
--
ALTER TABLE `Fromages`
  ADD PRIMARY KEY (`idFromages`);

--
-- Indexes for table `Produits`
--
ALTER TABLE `Produits`
  ADD PRIMARY KEY (`idProduit`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Commande`
--
ALTER TABLE `Commande`
  MODIFY `IdCmmande` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Fromages`
--
ALTER TABLE `Fromages`
  MODIFY `idFromages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
