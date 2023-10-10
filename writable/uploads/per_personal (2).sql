-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 02:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventario_inab`
--

-- --------------------------------------------------------

--
-- Table structure for table `per_personal`
--

CREATE TABLE `per_personal` (
  `per_id` int(11) NOT NULL,
  `per_nombre` varchar(50) NOT NULL,
  `per_apellido` varchar(50) NOT NULL,
  `per_correo` varchar(100) NOT NULL,
  `per_telefono` int(11) NOT NULL,
  `per_fecha_creacion` date NOT NULL,
  `per_estado` int(11) NOT NULL,
  `per_nit` int(11) DEFAULT NULL,
  `per_resguardo` int(11) DEFAULT NULL,
  `per_acceso_sistema` int(11) NOT NULL,
  `per_contrasena` varchar(100) DEFAULT NULL,
  `per_iddep` int(11) NOT NULL,
  `per_idcar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `per_personal`
--

INSERT INTO `per_personal` (`per_id`, `per_nombre`, `per_apellido`, `per_correo`, `per_telefono`, `per_fecha_creacion`, `per_estado`, `per_nit`, `per_resguardo`, `per_acceso_sistema`, `per_contrasena`, `per_iddep`, `per_idcar`) VALUES
(1, 'carlos', 'galindo', 'carlos@gmail.com', 1234567, '2023-09-07', 1, 123456, 1, 1, '$2a$10$tPNW2npbo57pUkA7TcS/lOCjVhjk3Lk8b3HvICpKcqvL.irPnxrHm', 1, 1),
(2, 'Eduardo', 'galindo', 'eduardo@gmail.com', 1234567, '2023-09-07', 1, 123456, 1, 1, '$2a$10$tPNW2npbo57pUkA7TcS/lOCjVhjk3Lk8b3HvICpKcqvL.irPnxrHm', 1, 2),
(3, 'Gustavo', 'M', 'gustavo@gmail.com', 12345678, '2023-09-23', 0, 12345678, 1, 1, '$2y$10$Jh2tYF4wQF0MxCWQ7.jRC.helThZWURKa3yp1F/YMuhSy9v5W0Lw.', 1, 2),
(4, 'Gustavo', 'Vides', 'gustavov@gmail.com', 12345679, '2023-09-22', 0, 1234567, 1, 1, '$2y$10$6KwStzH7bOf52UmvPKUph.QEaITiBSltKCkIEimbs6N.t/2HuJKSO', 1, 2),
(5, 'Juan', 'J', 'juan@gmail.com', 12345678, '2023-09-07', 1, 23589, 1, 1, '$2y$10$57BqrCt2LDFigKCLg8cqTuHHQS0R8QSnEu9aBAvGL3RWG1eH0SCGq', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `per_personal`
--
ALTER TABLE `per_personal`
  ADD PRIMARY KEY (`per_id`),
  ADD KEY `per_personal_car_cargo_fk` (`per_idcar`),
  ADD KEY `per_personal_dep_departamento_fk` (`per_iddep`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `per_personal`
--
ALTER TABLE `per_personal`
  MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `per_personal`
--
ALTER TABLE `per_personal`
  ADD CONSTRAINT `per_personal_car_cargo_fk` FOREIGN KEY (`per_idcar`) REFERENCES `car_cargo` (`car_id`),
  ADD CONSTRAINT `per_personal_dep_departamento_fk` FOREIGN KEY (`per_iddep`) REFERENCES `dep_departamento` (`dep_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
