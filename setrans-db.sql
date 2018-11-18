-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: nov. 18, 2018 la 12:14 PM
-- Versiune server: 10.1.36-MariaDB
-- Versiune PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `setrans-db`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(250) NOT NULL,
  `time_created` datetime NOT NULL,
  `account_type` enum('USER','ADMIN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `accounts`
--

INSERT INTO `accounts` (`account_id`, `fullname`, `username`, `email`, `phone`, `password`, `time_created`, `account_type`) VALUES
(1, 'Test User', 'testuser', 'test@user', '+40999999999', 'testuser', '2018-11-08 18:10:25', 'USER'),
(2, 'Admin', 'admin', 'admin@admin', '+00123123123', 'admin', '2018-11-08 18:11:25', 'ADMIN'),
(33, 'blabla', 'blabla', 'bla@bla.bla', '123412341234', '$2y$10$dEAtLcn4P08NQrHGxbfq0.O9fJUNlRsv6w2Qd.jFmcNHUnVKksbGa', '2018-11-08 21:34:42', 'ADMIN'),
(34, 'qwer', 'qwer', 'qwer@qwer.ll', '123412341234', '$2y$10$5W/Uw5WMXU46npbwYPo6MeyMGTmqGPLiQuILrKO9ckSb1jjTUQbGC', '2018-11-08 21:37:00', 'USER'),
(35, 'asdasd', 'asdas', 'adsasd@dsa.lol', '123412341234', '$2y$10$UXhA.1aDbvWjQWM0Of.nk.kTyHJZz/VtFKsGKYvhtbAG.bEsQGWmW', '2018-11-09 01:13:04', 'USER'),
(36, 'weqr', 'qwerqwre', 'qwer@erqwe', '099908', '$2y$10$MFlrUm1.7s9gLbYWhxDof.9536M8xJgjJv097Ticm5sDaxnIKBnIa', '2018-11-09 01:15:08', 'USER'),
(37, 'ccccc', 'ccccccccc', '1234@dsad.tet', 'ewrwe', '$2y$10$jlZILpvNi9rHeSIID2a6.eNcmCKbH8Fp1zgmoMszmc0kZeV34VAgS', '2018-11-09 01:16:25', 'USER'),
(40, 'administrator', 'Administrator', 'administrator@admin', '999999', '$2y$10$Ja9Jgu7kfZUIMX6hxlib..WuIVJTfHlgOZQ410jatM4sCNbYO7hy.', '2018-11-09 04:16:26', 'ADMIN'),
(50, 'Meches Sebastian', 'mechessebastian', 'meches.sebastian@gmail.com', '0731323323', '$2y$10$CWU9dgtFUOxgPlKufjqlu.ovBDrNSYbqJzA9IdfxVOWyNJix9x0M2', '2018-11-12 00:09:31', 'USER');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `pickup` varchar(300) NOT NULL,
  `destination` varchar(300) NOT NULL,
  `date` datetime NOT NULL,
  `seats` varchar(15) NOT NULL,
  `comfort` enum('ECONOMY','STANDARD','PREMIUM') NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `phone`, `pickup`, `destination`, `date`, `seats`, `comfort`, `details`) VALUES
(1, 'Meches Sebastian', 'abes_gaara@yahoo.com', '12341234', 'xx', 'xxxxxxxxxxxxxxxxxxxxxxxxx', '2019-12-15 00:05:00', '1', 'ECONOMY', ''),
(9, 'Meches Sebastian', 'meches.sebastian@gmail.com', '0731323323', 'Strada Buna ziua Cluj Napoca Nr 23', 'Jud. Arad, Loc. Lipova, Str. Oradea Nr. 7', '2018-11-16 17:30:00', '31+', 'PREMIUM', 'Nr total de persoane = 60'),
(24, 'Meches Sebastian', 'meches.sebastian@gmail.com', '0731323323', 'Leningrad Strada, Cannex, Avenue Lmartin', 'Oxford Street, Moscow', '2018-11-24 17:25:00', '14', 'PREMIUM', 'daa'),
(25, 'Meches Sebastian', 'meches.sebastian@gmail.com', '0731323323', 'Russia, Moscow, Leningrad Street A42 Flat', 'Russia, Moscow, Leningrad Street A42 Flat', '2018-11-17 21:50:00', '13', 'PREMIUM', 'I also need a gun to shut that guy.'),
(27, 'administrator', 'administrator@admin', '999999', 'johny test', 'salutare john', '2018-11-16 00:05:00', '1', 'ECONOMY', ''),
(31, 'administrator', 'administrator@admin', '999999', 'Admin Street', 'Admin Admin', '2020-12-22 00:05:00', '1', 'ECONOMY', ''),
(33, 'Meches Sebastian', 'meches.sebastian@gmail.com', '0731323323', 'OTHER ACCOUNT FROM ADMIN', 'OTHER ACCOUNT FROM ADMIN', '2018-11-17 00:05:00', '1', 'ECONOMY', 'ddd'),
(35, 'Meches Sebastian', 'meches.sebastian@gmail.com', '0731323323', 'NEW ACC FROM ADMIN', 'NEW ACC FROM ADMIN', '2019-05-05 00:25:00', '1', 'STANDARD', ''),
(36, 'Meches Sebastian', 'meches.sebastian@gmail.com', '0731323323', 'franta', 'ungaria', '2018-11-23 18:30:00', '4', 'STANDARD', '');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `contactus`
--

CREATE TABLE `contactus` (
  `messageid` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `contactus`
--

INSERT INTO `contactus` (`messageid`, `name`, `email`, `phone`, `message`, `date`) VALUES
(2, 'andrei dan', 'andreiiii@ddd', '+33000111000', 'nu merge siteul dvs', '2018-11-05 21:21:03'),
(3, 'testtest', 'test@testare', '+11000777888', 'buna as vrea o masina', '2018-11-05 00:00:00'),
(4, 'dadada', 'abes_gaara@yahoo.com', '+12321321321', 'asdafdasfasf', '2018-11-05 21:38:56'),
(5, 'Dorin Florin', 'abes_gaara@gmail.com', '+00332332332', 'salutare', '2018-11-05 21:46:30'),
(12, 'dadada', 'dada@dada', '+12123412344', '123412341234', '2018-11-09 01:19:56'),
(14, 'asd', 'asd@asd', '+40123412345', 'asd', '2018-11-09 01:50:43'),
(15, 'xcvadsf', 'sadfas@sdf', '+40141234', 'ASDFASF', '2018-11-11 15:18:53'),
(16, 'Meches Sebastian', 'meches.sebastian@gmail.com', '0731323323', 'Buna ziua, cand imi soseste rezervarea?', '2018-11-12 18:04:06');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexuri pentru tabele `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`messageid`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pentru tabele `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pentru tabele `contactus`
--
ALTER TABLE `contactus`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
