--SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
--START TRANSACTION;
--SET time_zone = "+00:00";

--
-- Base de données : `webapp`
--
CREATE DATABASE IF NOT EXISTS webapp;

USE webapp;

-- --------------------------------------------------------

--
-- Structure de la table `Basket`
--

CREATE TABLE IF NOT EXISTS Basket (
  `customer` int NOT NULL,
  `product` int NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`customer`,`product`),
  FOREIGN KEY (`product`) REFERENCES `Products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`customer`) REFERENCES `Customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
);


--
-- Structure de la table `Customers`
--

CREATE TABLE IF NOT EXISTS Customers (
  `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `familyname` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `username` TEXT NOT NULL,
  `password` TEXT NOT NULL
);

--
-- Structure de la table `Products`
--

CREATE TABLE IF NOT EXISTS Products (
  `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL
);


