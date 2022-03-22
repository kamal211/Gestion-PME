-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 16, 2022 at 03:57 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestionemploye`
--

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

CREATE TABLE `employe` (
  `Id` int(11) NOT NULL,
  `matricule` char(4) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prénom` varchar(50) NOT NULL,
  `datenaissance` date NOT NULL,
  `département` varchar(50) NOT NULL,
  `salaire` decimal(50,0) NOT NULL,
  `fonction` varchar(100) NOT NULL,
  `photo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`Id`, `matricule`, `nom`, `prénom`, `datenaissance`, `département`, `salaire`, `fonction`, `photo`) VALUES
(25, '1224', 'ghjv', 'hgc', '2022-01-01', 'gestion commerciale', '30', 'Marketing', 'https://cdn2.hubspot.net/hub/550275/hubfs/ADMB/Liantis-employer%20branding.jpg?width=750&name=Liantis-employer%20branding.jpg'),
(117, '1234', 'taouali', 'kamal', '2022-01-02', 'gestion commerciale', '60', 'Marketing', 'https://cdn2.hubspot.net/hub/550275/hubfs/ADMB/Liantis-employer%20branding.jpg?width=750&name=Liantis-employer%20branding.jpg'),
(123, '1238', 'df', 'kamal', '2022-01-01', 'gestion commerciale', '50', 'Marketing', 'https://cdn2.hubspot.net/hub/550275/hubfs/ADMB/Liantis-employer%20branding.jpg?width=750&name=Liantis-employer%20branding.jpg'),
(130, '8990', 'taouali', 'df', '2022-12-02', 'gestion commerciale', '10', 'Marketing', 'https://cdn2.hubspot.net/hub/550275/hubfs/ADMB/Liantis-employer%20branding.jpg?width=750&name=Liantis-employer%20branding.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`Id`) USING BTREE,
  ADD UNIQUE KEY `matricule` (`matricule`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employe`
--
ALTER TABLE `employe`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
