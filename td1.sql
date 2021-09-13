-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mer 19 Septembre 2018 à 07:33
-- Version du serveur: 5.5.8
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `td1`
--

-- --------------------------------------------------------

--
-- Structure de la table `gestion`
--

CREATE TABLE IF NOT EXISTS `gestion` (
  `numero_dossier` varchar(20) NOT NULL,
  `code_user` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  PRIMARY KEY (`numero_dossier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `gestion`
--

INSERT INTO `gestion` (`numero_dossier`, `code_user`, `nom`, `prenom`, `tel`) VALUES
('000001', 'fasy721', 'Sy', 'Fatoumata', '72-12-06-80'),
('000004', 'sifa7904', 'fadiala', 'sidibe', '79-65-32-65'),
('000005', 'Hasi7105', 'sidibe', 'Hawa', '71-17-54-85'),
('000007', 'amcou93-', 'Coulibaly', 'Aminata', '93-41-28-66'),
('000008', 'haadm796', 'Administratr', 'Hawa', '79-65-32-65'),
('000009', 'siadm711', 'Administrateur', 'sidibÃ©', '71-17-54-85'),
('000010', 'toddd915', 'DDD', 'toure', '91-52-28-56'),
('000011', 'oukam915', 'kamate', 'oumar', '91-52-28-56'),
('000012', 'fasid721', 'sidibe_fadj', 'Fadiala', '72-12-06-80');
