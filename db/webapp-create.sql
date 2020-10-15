-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql
-- Généré le : mar. 22 sep. 2020 à 11:31
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS webapp;

USE webapp;


--
-- Base de données : `webapp`
--

-- --------------------------------------------------------

--
-- Structure de la table `Basket`
--

CREATE TABLE `Basket` (
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

CREATE TABLE `Customers` (
  `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `familyname` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL
);

--
-- Structure de la table `Products`
--

CREATE TABLE `Products` (
  `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL
);


