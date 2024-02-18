-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 18, 2024 at 11:20 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solocrossfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventos_competiciones`
--

DROP TABLE IF EXISTS `eventos_competiciones`;
CREATE TABLE IF NOT EXISTS `eventos_competiciones` (
  `id_evento` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int DEFAULT NULL,
  `numero_eventos_mes` int DEFAULT NULL,
  `horas_entrenamiento_semana` int DEFAULT NULL,
  `fecha_evento` date DEFAULT NULL,
  `costo_total` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id_evento`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eventos_competiciones`
--

INSERT INTO `eventos_competiciones` (`id_evento`, `id_usuario`, `numero_eventos_mes`, `horas_entrenamiento_semana`, `fecha_evento`, `costo_total`) VALUES
(1, 1, 20, 5, '2024-02-18', NULL),
(2, 2, 21, 5, '2024-02-18', NULL),
(3, 3, 24, 6, '2024-02-18', NULL),
(4, 4, 17, 7, '2024-02-18', NULL),
(5, 5, 26, 5, '2024-02-18', NULL),
(6, 6, 13, 8, '2024-02-18', NULL),
(7, 7, 14, 3, '2024-02-18', NULL),
(8, 8, 22, 5, '2024-02-18', NULL),
(9, 9, 25, 10, '2024-02-18', NULL),
(10, 10, 14, 7, '2024-02-18', NULL),
(11, 11, 22, 9, '2024-02-18', NULL),
(12, 12, 22, 7, '2024-02-18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `plan_trabajo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `peso_actual` decimal(5,2) NOT NULL,
  `categoria_peso` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `eventos_mes` int NOT NULL,
  `horas_extra_mes` int NOT NULL,
  `gastos_detallados` text COLLATE utf8mb4_general_ci,
  `costo_total` decimal(8,2) NOT NULL,
  `comparacion_peso_categoria` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `plan_trabajo`, `peso_actual`, `categoria_peso`, `eventos_mes`, `horas_extra_mes`, `gastos_detallados`, `costo_total`, `comparacion_peso_categoria`) VALUES
(1, 'Juan', 'Perder peso', 80.00, 'Sobrepeso', 2, 0, 'Comida, bebida', 50.00, 'Bajar de peso'),
(2, 'Pepe', 'Bajar de peso', 80.00, 'Sobrepeso', 0, 0, 'Ninguno', 0.00, 'Ninguna'),
(3, 'Juan', 'Ganar masa muscular', 70.00, 'Normal', 2, 1, 'Gimnasio', 100.00, 'Ninguna'),
(4, 'Maria', 'Mantener forma', 60.00, 'Normal', 3, 0, 'Yoga', 0.00, 'Ninguna'),
(5, 'Carlos', 'Bajar de peso', 90.00, 'Sobrepeso', 0, 2, 'Ninguno', 0.00, 'Ninguna'),
(6, 'Ana', 'Ganar flexibilidad', 55.00, 'Normal', 1, 0, 'Pilates', 50.00, 'Ninguna'),
(7, 'Pedro', 'Ganar masa muscular', 75.00, 'Normal', 2, 1, 'Gimnasio', 100.00, 'Ninguna'),
(8, 'Isabel', 'Mantener forma', 65.00, 'Normal', 3, 0, 'Yoga', 0.00, 'Ninguna'),
(9, 'Javier', 'Bajar de peso', 95.00, 'Sobrepeso', 0, 2, 'Ninguno', 0.00, 'Ninguna'),
(10, 'Carmen', 'Ganar flexibilidad', 50.00, 'Normal', 1, 0, 'Pilates', 50.00, 'Ninguna'),
(11, 'Luis', 'Ganar masa muscular', 80.00, 'Normal', 2, 1, 'Gimnasio', 100.00, 'Ninguna'),
(12, 'Sofia', 'Mantener forma', 70.00, 'Normal', 3, 0, 'Yoga', 0.00, 'Ninguna');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eventos_competiciones`
--
ALTER TABLE `eventos_competiciones`
  ADD CONSTRAINT `eventos_competiciones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
