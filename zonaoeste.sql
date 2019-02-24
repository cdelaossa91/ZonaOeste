-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2019 at 08:31 AM
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
  `habitaciones` int(20) NOT NULL,
  `banos` int(20) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(20) NOT NULL,
  `creado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `infoprincipal`
--

INSERT INTO `infoprincipal` (`id`, `foto`, `categoria`, `ubicacion`, `habitaciones`, `banos`, `descripcion`, `precio`, `creado`) VALUES
(1, 'propiedadpics/apart1.jpg', 'Alquiler', 'Trejos Montealegre', 2, 2, 'Apartamento amueblado, parqueo y piscina.', 1200, '2019-02-24'),
(2, 'propiedadpics/apart2.jpg', 'Venta', 'San Rafael de Escazu', 3, 2, 'Hermosa casa con seguridad 24/7', 250000, '2019-02-24'),
(3, 'propiedadpics/apart3.jpg', 'Alquiler', 'Santa Ana', 1, 1, 'Apartamento en Condominios del Sol. Parqueo para visitas', 1000, '2019-02-24'),
(4, 'propiedadpics/house1.jpg', 'Venta', 'Santa Ana', 5, 3, 'Casa con vista a la ciudad. Piscina.', 500000, '2019-02-24'),
(5, 'propiedadpics/kitchen1.jpg', 'Alquiler', 'Heredia', 3, 2, 'Casa totalmente equipada y amueblada. Parqueo para 2 carros.', 1700, '2019-02-24'),
(6, 'propiedadpics/local1.jpg', 'Alquiler', 'Villas de Ayarco', 0, 2, 'Local comercial para restaurante.', 2000, '2019-02-24'),
(7, 'propiedadpics/oficina1.jpg', 'Alquiler', 'Sabana Sur', 4, 2, 'Espacio para oficinas. Parqueo para 20 vehiculos.', 4500, '2019-02-24'),
(8, 'propiedadpics/terreno1.JPG', 'Venta', 'San Rafael de Escazu', 0, 0, 'Terreno para construir.', 50000, '2019-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id` int(11) NOT NULL,
  `foto` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `inmueble` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `contrato` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `solicitudes`
--

INSERT INTO `solicitudes` (`id`, `foto`, `nombre`, `email`, `telefono`, `inmueble`, `contrato`, `ubicacion`, `precio`) VALUES
(1, 'resources/database/propiedadpics/solicitudes/apart1.jpg', 'Carolina De La Ossa', 'caro@gmail.com', '22598080', 'Casa', 'Alquiler', 'San Pedro', 800);

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
-- Indexes for table `solicitudes`
--
ALTER TABLE `solicitudes`
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
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
