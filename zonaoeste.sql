-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2019 at 12:42 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zonaoeste`
--

-- --------------------------------------------------------

--
-- Table structure for table `infoprincipal`
--

CREATE TABLE `infoprincipal` (
  `id` int(250) NOT NULL,
  `foto` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(20) NOT NULL,
  `creado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `infoprincipal`
--

INSERT INTO `infoprincipal` (`id`, `foto`, `categoria`, `ubicacion`, `descripcion`, `precio`, `creado`) VALUES
(2, 'propiedadpics/apart1.jpg', 'alquiler', 'San Rafael de Escazu', 'Hermoso apartamento amueblado', 1500, '2019-02-12'),
(3, 'propiedadpics/kitchen1.jpg', 'alquiler', 'Trejos Montealegre', 'Condomio con cocina equipada, area de barbecue y gimnasio.', 2000, '2019-02-12'),
(4, 'propiedadpics/apart3.jpg', 'Venta', 'Santa Ana', 'Casa de 2 pisos, piscina, patio, 4 cuartos.', 250000, '2019-02-12'),
(5, 'propiedadpics/house1.jpg', 'Venta', 'Santa Ana', 'Hermosa Mansion con piscina, 5 cuartos, patio. ', 1000000, '2019-02-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'jackmar', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infoprincipal`
--
ALTER TABLE `infoprincipal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infoprincipal`
--
ALTER TABLE `infoprincipal`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
