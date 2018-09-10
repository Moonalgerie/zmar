-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 15 fév. 2018 à 16:48
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_hor`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(11, 'hani', 'hani', 'hani');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`client_id`, `name`, `username`, `password`) VALUES
(12, 'mm', 'mm', 'mm'),
(13, 'mm', 'mm', 'mm'),
(14, 'hh', 'hh', 'hh'),
(15, 'hh', 'hh', 'hh'),
(16, 'hh', 'hh', 'hh'),
(17, 'hh', 'hh', 'hh'),
(18, 'll', 'll', 'll'),
(19, 'Hani Bounedjar', 'hani', 'hani'),
(20, 'hh', 'hh', 'hh'),
(21, 'hh', 'hh', 'hh'),
(22, 'hh', 'hh', 'hh'),
(23, 'youss', 'youss', 'youss'),
(24, 'hani', 'hani', '12'),
(25, '1', '1', '00010'),
(26, '2', '2', 'aaaab');

-- --------------------------------------------------------

--
-- Structure de la table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactno` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `guest`
--

INSERT INTO `guest` (`guest_id`, `firstname`, `middlename`, `lastname`, `address`, `contactno`) VALUES
(10, 'hani', 'hani', '', 'hnai', '0555161466'),
(11, 'hani', 'hani', '', 'hani', 'hani'),
(12, 'hani', 'hani', '', 'hani', 'hani'),
(13, 'hani', 'hani', '', 'hani', 'hani'),
(14, 'hani', 'hani', '', 'hani', 'hani'),
(15, 'hani', 'hani', '', 'hani', 'hani'),
(16, 'yy', 'yy', '', 'yy', '0555161466'),
(17, 'hani', 'hani', '', 'hani', 'hani'),
(18, 'hani', 'hani', '', 'hani', 'hani'),
(19, 'hani', 'hani', '', 'hani', 'hani'),
(20, 'hani', 'hani', '', 'hani', 'hani'),
(21, 'hani', 'ha', '', 'nih', 'hani'),
(22, 'hani', 'hani', '', 'hani', 'hani'),
(23, 'hani', 'hani', '', 'hani', 'hani'),
(24, 'hani', 'hani', '', 'hani', 'hani'),
(25, 'hani', 'han', '', 'ihani', 'hani'),
(26, 'hani', 'hani', '', 'hani', 'hani'),
(27, 'hani', 'hani', '', 'hani', 'hani'),
(28, 'hani', 'hani', '', 'hani', 'hn'),
(29, 'hani', 'hani', '', 'hani', 'hani'),
(30, 'hani', 'hani', '', 'hani', 'hani'),
(31, 'hani', 'hani', '', 'hanik', 'hzkj'),
(32, 'hani', 'hani', '', 'hani', 'hani');

-- --------------------------------------------------------

--
-- Structure de la table `pan`
--

CREATE TABLE `pan` (
  `pan_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `pan_type` varchar(50) NOT NULL,
  `nbr` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pan`
--

INSERT INTO `pan` (`pan_id`, `room_id`, `pan_type`, `nbr`, `price`, `photo`, `client_id`) VALUES
(94, 12, 'Executive Suite', 3, 6000, '3.jpg', 23),
(101, 19, '1', 1, 8000, '2.jpg', 19),
(102, 29, '1', 1, 2000, '1.jpg', 19);

-- --------------------------------------------------------

--
-- Structure de la table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `price` varchar(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `room`
--

INSERT INTO `room` (`room_id`, `room_type`, `cat`, `price`, `photo`) VALUES
(29, '1', 'Bouquets', '2000', '1.jpg'),
(30, '2', 'Lys', '200', '2.jpg'),
(31, '3', 'Lys', '350', '6.jpg'),
(32, '4', 'Gypsophile', '150', '5.jpg'),
(33, '5', 'Ginger', '580', '3.jpg'),
(34, '6', 'Alstromeria', '250', 'e.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_no` int(5) NOT NULL,
  `extra_bed` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `days` int(2) NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `checkout_time` time NOT NULL,
  `bill` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `guest_id`, `room_id`, `room_no`, `extra_bed`, `status`, `days`, `checkin`, `checkin_time`, `checkout`, `checkout_time`, `bill`) VALUES
(14, 11, 0, 0, 0, 'Pending', 0, '2018-02-16', '00:00:00', '0000-00-00', '00:00:00', ''),
(15, 11, 0, 0, 0, 'Pending', 0, '2018-02-17', '00:00:00', '0000-00-00', '00:00:00', ''),
(16, 11, 0, 0, 0, 'Pending', 0, '2018-02-18', '00:00:00', '0000-00-00', '00:00:00', ''),
(17, 11, 0, 0, 0, 'Pending', 0, '2018-02-19', '00:00:00', '0000-00-00', '00:00:00', ''),
(18, 28, 0, 0, 0, 'Pending', 0, '2018-02-20', '00:00:00', '0000-00-00', '00:00:00', ''),
(19, 11, 0, 0, 0, 'Pending', 0, '2018-02-22', '00:00:00', '0000-00-00', '00:00:00', ''),
(20, 11, 0, 0, 0, 'Pending', 0, '2018-03-02', '00:00:00', '0000-00-00', '00:00:00', ''),
(21, 31, 0, 0, 0, 'Pending', 0, '2018-03-15', '00:00:00', '0000-00-00', '00:00:00', ''),
(22, 11, 0, 0, 0, 'Pending', 0, '2018-03-09', '00:00:00', '0000-00-00', '00:00:00', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Index pour la table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Index pour la table `pan`
--
ALTER TABLE `pan`
  ADD PRIMARY KEY (`pan_id`);

--
-- Index pour la table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Index pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `pan`
--
ALTER TABLE `pan`
  MODIFY `pan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT pour la table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
