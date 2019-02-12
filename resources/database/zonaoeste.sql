-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2019 at 03:41 PM
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
-- Table structure for table `canton`
--

CREATE TABLE `canton` (
  `idprov` int(10) NOT NULL,
  `idcan` int(25) NOT NULL,
  `can` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `canton`
--

INSERT INTO `canton` (`idprov`, `idcan`, `can`) VALUES
(1, 1, 'sanjose'),
(1, 2, 'escazu'),
(1, 3, 'desamparados'),
(1, 4, 'puriscal'),
(1, 5, 'tarrazu'),
(1, 6, 'aserri'),
(1, 7, 'mora'),
(1, 8, 'goicochea'),
(1, 9, 'santaana'),
(1, 10, 'alajuelita'),
(1, 11, 'vazquezdecoronado'),
(1, 12, 'acosta'),
(1, 13, 'tibas'),
(1, 14, 'moravia');

-- --------------------------------------------------------

--
-- Table structure for table `caracteristicas`
--

CREATE TABLE `caracteristicas` (
  `idcaract` int(250) NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `habitaciones` int(10) NOT NULL,
  `banos` int(10) NOT NULL,
  `estacionamientos` int(10) NOT NULL,
  `metros2` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detalles`
--

CREATE TABLE `detalles` (
  `iddetalle` int(250) NOT NULL,
  `idpropiedad2` int(250) DEFAULT NULL,
  `detalle` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `detalles`
--

INSERT INTO `detalles` (`iddetalle`, `idpropiedad2`, `detalle`) VALUES
(1, NULL, 'petfriendly'),
(3, NULL, 'escuela'),
(4, NULL, 'montanas'),
(5, NULL, 'garajetechado'),
(6, NULL, 'parqueovisitas'),
(7, NULL, 'seguridad'),
(8, NULL, 'areasocial'),
(9, NULL, 'gimnasio'),
(10, NULL, 'piscina'),
(11, NULL, 'jardin');

-- --------------------------------------------------------

--
-- Table structure for table `distrito`
--

CREATE TABLE `distrito` (
  `idcan` int(25) NOT NULL,
  `iddist` int(250) NOT NULL,
  `dist` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `distrito`
--

INSERT INTO `distrito` (`idcan`, `iddist`, `dist`) VALUES
(1, 1, 'carmen');

-- --------------------------------------------------------

--
-- Table structure for table `fotos`
--

CREATE TABLE `fotos` (
  `idfoto` int(250) NOT NULL,
  `idpropiedad` int(250) NOT NULL,
  `foto` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `infoprincipal`
--

CREATE TABLE `infoprincipal` (
  `id` int(250) NOT NULL,
  `categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(20) NOT NULL,
  `creado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provincia`
--

CREATE TABLE `provincia` (
  `idubic` int(250) DEFAULT NULL,
  `idprov` int(10) NOT NULL,
  `prov` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `provincia`
--

INSERT INTO `provincia` (`idubic`, `idprov`, `prov`) VALUES
(NULL, 1, 'sanjose'),
(NULL, 2, 'alajuela'),
(NULL, 3, 'cartago'),
(NULL, 4, 'heredia'),
(NULL, 5, 'guanacaste'),
(NULL, 6, 'puntarenas'),
(NULL, 7, 'limon');

-- --------------------------------------------------------

--
-- Table structure for table `ubicacion`
--

CREATE TABLE `ubicacion` (
  `idpropiedad` int(250) NOT NULL,
  `idubic` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
-- Indexes for table `canton`
--
ALTER TABLE `canton`
  ADD PRIMARY KEY (`idcan`),
  ADD KEY `idprov` (`idprov`);

--
-- Indexes for table `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`idcaract`);

--
-- Indexes for table `detalles`
--
ALTER TABLE `detalles`
  ADD PRIMARY KEY (`iddetalle`),
  ADD KEY `idpropiedad2` (`idpropiedad2`);

--
-- Indexes for table `distrito`
--
ALTER TABLE `distrito`
  ADD PRIMARY KEY (`iddist`),
  ADD KEY `idcan` (`idcan`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`idfoto`),
  ADD KEY `idpropiedad` (`idpropiedad`);

--
-- Indexes for table `infoprincipal`
--
ALTER TABLE `infoprincipal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`idprov`),
  ADD KEY `idubic` (`idubic`);

--
-- Indexes for table `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`idubic`),
  ADD KEY `idprovincia` (`idpropiedad`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `idcaract` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detalles`
--
ALTER TABLE `detalles`
  MODIFY `iddetalle` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `idfoto` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infoprincipal`
--
ALTER TABLE `infoprincipal`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `canton`
--
ALTER TABLE `canton`
  ADD CONSTRAINT `canton_ibfk_1` FOREIGN KEY (`idprov`) REFERENCES `provincia` (`idprov`);

--
-- Constraints for table `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD CONSTRAINT `PK_caracteristicas` FOREIGN KEY (`idcaract`) REFERENCES `infoprincipal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detalles`
--
ALTER TABLE `detalles`
  ADD CONSTRAINT `detalles_ibfk_1` FOREIGN KEY (`idpropiedad2`) REFERENCES `infoprincipal` (`id`);

--
-- Constraints for table `distrito`
--
ALTER TABLE `distrito`
  ADD CONSTRAINT `distrito_ibfk_1` FOREIGN KEY (`idcan`) REFERENCES `canton` (`idcan`);

--
-- Constraints for table `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_ibfk_1` FOREIGN KEY (`idpropiedad`) REFERENCES `infoprincipal` (`id`);

--
-- Constraints for table `provincia`
--
ALTER TABLE `provincia`
  ADD CONSTRAINT `provincia_ibfk_1` FOREIGN KEY (`idubic`) REFERENCES `ubicacion` (`idubic`);

--
-- Constraints for table `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD CONSTRAINT `ubicacion_ibfk_1` FOREIGN KEY (`idpropiedad`) REFERENCES `infoprincipal` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
