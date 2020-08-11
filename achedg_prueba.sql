-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2020 a las 21:34:07
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `achedg_prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beds`
--

CREATE TABLE `beds` (
  `id` bigint(20) NOT NULL,
  `bed_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `type` varchar(150) CHARACTER SET latin1 NOT NULL,
  `servicio_cam` varchar(30) CHARACTER SET latin1 NOT NULL,
  `acomodacion_cam` varchar(30) CHARACTER SET latin1 NOT NULL,
  `ward` varchar(150) CHARACTER SET latin1 NOT NULL,
  `descripcion_cam` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `beds`
--

INSERT INTO `beds` (`id`, `bed_id`, `type`, `servicio_cam`, `acomodacion_cam`, `ward`, `descripcion_cam`) VALUES
(1, '201', 'Semi-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(2, '202', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(3, '203', 'Semi-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(4, '204', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(5, '205', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(6, '206', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(7, '207', 'Semi-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(8, '208', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(9, '209', 'Bariatrica', 'hospitalaria', 'INDIVIDUAL', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(10, '210', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(11, '211', 'Semi-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(12, '212', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(13, '213', 'Bariatrica', 'hospitalaria', 'INDIVIDUAL', 'Orthopedica', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(14, '214', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Orthopedica', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(15, '215', 'Semi-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Orthopedica', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(16, '216', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Orthopedica', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(17, '217', 'Bariatrica', 'hospitalaria', 'INDIVIDUAL', 'Orthopedica', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(18, '218', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Orthopedica', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(19, '219', 'Semi-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Orthopedica', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(20, '220', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Orthopedica', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(21, '221', 'Bariatrica', 'hospitalaria', 'INDIVIDUAL', 'Orthopedica', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(22, '222', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Orthopedica', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(23, '301', 'Semi-Electrica', 'pediatria-cuna', 'INDIVIDUAL', 'Postnatal', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(24, '302', 'Full-Electrica', 'pediatria-cuna', 'INDIVIDUAL', 'Postnatal', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(25, '303', 'Bariatrica', 'pediatria-cuna', 'INDIVIDUAL', 'Postnatal', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(26, '304', 'Manual', 'pediatria-cuna', 'INDIVIDUAL', 'Postnatal', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(27, '305', 'Manual', 'pediatria-cuna', 'INDIVIDUAL', 'Postnatal', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(28, '306', 'Manual', 'pediatriaadulto', 'INDIVIDUAL', 'Estado de Embarazo', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(29, '307', 'Manual', 'pediatriaadulto', 'INDIVIDUAL', 'Postnatal', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(30, '308', 'Manual', 'pediatriaadulto', 'INDIVIDUAL', 'Postnatal', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(31, '309', 'Manual', 'pediatriaadulto', 'INDIVIDUAL', 'Estado de Embarazo', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(32, '310', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Pediatria', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(33, '311', 'Semi-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Pediatria', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(34, '312', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Pediatria', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(35, '313', 'Semi-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Pediatria', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(36, '314', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Pediatria', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(37, '315', 'Semi-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Pediatria', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(38, '316', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Pediatria', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(39, '317', 'Semi-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Pediatria', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(40, '318', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Pediatria', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(41, '319', 'Semi-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Pediatria', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(42, '320', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Pediatria', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(43, '321', 'Semi-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Pediatria', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(44, '322', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Pediatria', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(45, '323', 'Semi-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Pediatria', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(46, '324', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Pediatria', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(47, '325', 'Semi-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Pediatria', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(48, '326', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Pediatria', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(49, '401', 'Semi-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Cuidado Critico', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(50, '402', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Cuidado Critico', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(51, '403', 'Bariatrica', 'hospitalaria', 'INDIVIDUAL', 'Cuidado Critico', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(52, '404', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Cuidado Critico', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(53, '405', 'Semi-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Cuidado Critico', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(54, '406', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Cuidado Critico', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(55, '407', 'Bariatrica', 'hospitalaria', 'INDIVIDUAL', 'Cuidado Critico', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(56, '408', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Cuidado Critico', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(57, '409', 'Semi-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Cuidado Critico', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(58, '410', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Cuidado Critico', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(59, '411', 'Bariatrica', 'hospitalaria', 'INDIVIDUAL', 'Cuidado Critico', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(60, '412', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Cuidado Critico', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(61, '413', 'Semi-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Cuidado Critico', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(62, '414', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(63, '415', 'Bariatrica', 'hospitalaria', 'INDIVIDUAL', 'Cuidado Critico', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(64, '416A', 'Full-Electrica', 'hospitalaria', 'COMPARTIDA', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(65, '416B', 'Semi-Electrica', 'hospitalaria', 'COMPARTIDA', 'Cuidado Critico', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(66, '417A', 'Full-Electrica', 'hospitalaria', 'COMPARTIDA', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(67, '417B', 'Bariatrica', 'hospitalaria', 'COMPARTIDA', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(68, '418A', 'Full-Electrica', 'hospitalaria', 'COMPARTIDA', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(69, '418B', 'Semi-Electrica', 'hospitalaria', 'COMPARTIDA', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(70, '419A', 'Full-Electrica', 'hospitalaria', 'COMPARTIDA', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(71, '419B', 'Bariatrica', 'hospitalaria', 'COMPARTIDA', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(72, '420A', 'Full-Electrica', 'hospitalaria', 'COMPARTIDA', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(73, '420B', 'Semi-Electrica', 'hospitalaria', 'COMPARTIDA', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(74, '421', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Cuidado Critico', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(75, '422', 'Bariatrica', 'hospitalaria', 'INDIVIDUAL', 'Cuidado Critico', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(76, '423A', 'Full-Electrica', 'hospitalaria', 'COMPARTIDA', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(77, '423B', 'Semi-Electrica', 'hospitalaria', 'COMPARTIDA', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(78, '424A', 'Full-Electrica', 'hospitalaria', 'COMPARTIDA', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(79, '424B', 'Bariatrica', 'hospitalaria', 'COMPARTIDA', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(80, '425A', 'Full-Electrica', 'hospitalaria', 'COMPARTIDA', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(81, '425B', 'Semi-Electrica', 'hospitalaria', 'COMPARTIDA', 'Accidentes y Emergencias', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento'),
(82, '426', 'Full-Electrica', 'hospitalaria', 'INDIVIDUAL', 'Cuidado Critico', 'Aplicaciones  para cuidados intensivos, medica Accionamiento:electrica Funciones  ajustable en altura, Trendelenburg, de inclinacion lateral Otras caracteristicas con ruedas, con sistema de pesaje Numero de secciones de 2 secciones Accionamiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citaph`
--

CREATE TABLE `citaph` (
  `id_citaph` bigint(20) NOT NULL,
  `pat_id_citaph` bigint(20) NOT NULL,
  `fechaCita_citaph` date NOT NULL,
  `fechaRegistro_citaph` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citaph`
--

INSERT INTO `citaph` (`id_citaph`, `pat_id_citaph`, `fechaCita_citaph`, `fechaRegistro_citaph`) VALUES
(1, 1, '2020-05-16', '2020-05-15 10:21:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patients`
--

CREATE TABLE `patients` (
  `pat_id` bigint(20) NOT NULL,
  `name` varchar(150) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(150) CHARACTER SET latin1 NOT NULL,
  `cedula` int(11) NOT NULL,
  `eps` varchar(150) CHARACTER SET latin1 NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(150) CHARACTER SET latin1 NOT NULL,
  `blood_group` varchar(150) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(150) CHARACTER SET latin1 NOT NULL,
  `prioridad` varchar(200) CHARACTER SET latin1 NOT NULL,
  `observacion` text CHARACTER SET latin1 NOT NULL,
  `FECHA_REGISTRO` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `patients`
--

INSERT INTO `patients` (`pat_id`, `name`, `lastname`, `cedula`, `eps`, `age`, `sex`, `blood_group`, `phone`, `prioridad`, `observacion`, `FECHA_REGISTRO`) VALUES
(1, 'kevin andrey', 'rojas fajardo', 12345, 'sanitas', 20, 'Masculino', 'O-', '54561321', 'Quinta Prioridad', 'ejemplo12', '2020-05-15 10:14:10'),
(2, 'carlos', 'kasjhdka', 1543453, 'colsubsidio', 19, 'Masculino', 'O-', '5354135', 'Cuarta Prioridad', 'cjzkjcbkhzbc', '2020-05-15 10:21:05');

--
-- Disparadores `patients`
--
DELIMITER $$
CREATE TRIGGER `PACIENTE_ELIMINADO` BEFORE DELETE ON `patients` FOR EACH ROW BEGIN 
INSERT INTO patients_drop SELECT * FROM patients WHERE pat_id = OLD.pat_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patients_drop`
--

CREATE TABLE `patients_drop` (
  `pat_id` bigint(20) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `lastname` varchar(150) DEFAULT NULL,
  `cedula` int(11) DEFAULT NULL,
  `eps` varchar(150) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(150) DEFAULT NULL,
  `blood_group` varchar(100) DEFAULT NULL,
  `phone` varchar(150) DEFAULT NULL,
  `prioridad` varchar(200) DEFAULT NULL,
  `observacion` text DEFAULT NULL,
  `FECHA_REGISTRO` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pat_to_bed`
--

CREATE TABLE `pat_to_bed` (
  `pat_id` bigint(20) NOT NULL,
  `bed_id` varchar(150) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pat_to_bed`
--

INSERT INTO `pat_to_bed` (`pat_id`, `bed_id`) VALUES
(1, '0'),
(2, 'none');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) NOT NULL,
  `name` varchar(150) CHARACTER SET latin1 NOT NULL,
  `uname` varchar(150) CHARACTER SET latin1 NOT NULL,
  `pword` varchar(150) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `name`, `uname`, `pword`) VALUES
(1, 'Edgar', 'Edgar50', '147'),
(2, 'krojas', 'krojas', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `beds`
--
ALTER TABLE `beds`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `citaph`
--
ALTER TABLE `citaph`
  ADD PRIMARY KEY (`id_citaph`),
  ADD KEY `citaph_ibfk_1` (`pat_id_citaph`);

--
-- Indices de la tabla `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`pat_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `beds`
--
ALTER TABLE `beds`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `citaph`
--
ALTER TABLE `citaph`
  MODIFY `id_citaph` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `patients`
--
ALTER TABLE `patients`
  MODIFY `pat_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citaph`
--
ALTER TABLE `citaph`
  ADD CONSTRAINT `citaph_ibfk_1` FOREIGN KEY (`pat_id_citaph`) REFERENCES `patients` (`pat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
