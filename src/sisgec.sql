-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 01, 2018 at 11:27 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisgec`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int(4) unsigned NOT NULL,
  `street` varchar(45) DEFAULT NULL,
  `exterior_number` varchar(5) DEFAULT NULL,
  `interior_number` varchar(6) DEFAULT NULL,
  `postal_code` varchar(6) DEFAULT NULL,
  `colony` varchar(35) DEFAULT NULL,
  `city` varchar(35) DEFAULT NULL,
  `state` varchar(31) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `street`, `exterior_number`, `interior_number`, `postal_code`, `colony`, `city`, `state`, `country`) VALUES
(1, 'Tulipán', '1270', NULL, '48290', 'La Floresta', 'Puerto Vallarta', 'Jalisco', 'México'),
(2, 'TulipÃ¡n', '1270', '', '48290', 'La Floresta', 'Puerto Vallarta', 'Jalisco', 'MÃ©xico'),
(3, 'TulipÃ¡n', '1270', '', '48290', 'La Floresta', 'Puerto Vallarta', 'Jalisco', 'MÃ©xico'),
(4, 'TulipÃ¡n', '1270', '', '48290', 'La Floresta', 'Puerto Vallarta', 'Jalisco', 'MÃ©xico'),
(5, 'San Francisco', '1245', '', '48230', 'Desmoronado', 'Talpa de Allende', 'Jalisco', 'MÃ©xico'),
(6, 'Tulipan', '1270', '', '48290', 'La Floresta', 'Puerto Vallarta', 'Jalisco', 'MÃ©xico'),
(7, 'Gladiola', '1286', '', '48290', 'Paseo del HipÃ³dromo', 'Puerto Vallarta', 'Jalisco', 'MÃ©xico'),
(8, 'Las pitagoras', '7525', '14A', '62000', 'Cuernavaca Centro', 'Cuernavaca', 'Morelos', 'MÃ©xico'),
(9, 'Las pitagoras', '7525', '14A', '62000', 'Cuernavaca Centro', 'Cuernavaca', 'Morelos', 'MÃ©xico'),
(10, 'Las pitagoras', '7525', '14A', '62000', 'Cuernavaca Centro', 'Cuernavaca', 'Morelos', 'MÃ©xico'),
(11, 'Las Pitagoricas', '2545', '14A', '62000', 'Cuernavaca Centro', 'Cuernavaca', 'Morelos', 'MÃ©xico'),
(12, 'Hoteles del mirador', '1452', '', '48290', 'Jardines Del Bosque', 'Puerto Vallarta', 'Jalisco', 'MÃ©xico'),
(13, 'Hoteles del mirador', '1452', '', '48290', 'Jardines Del Bosque', 'Puerto Vallarta', 'Jalisco', 'MÃ©xico'),
(14, 'Hoteles del mirador', '1452', '', '48290', 'Jardines Del Bosque', 'Puerto Vallarta', 'Jalisco', 'MÃ©xico'),
(15, 'Don Juaquin', '3456', '', '48290', 'HipÃ³dromo', 'Puerto Vallarta', 'Jalisco', 'MÃ©xico');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(4) NOT NULL,
  `lkey` varchar(60) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `lkey`, `value`, `created_date`) VALUES
(1, 'new_patient', 'Se agrego un nuevo paciente: JosefaOrtiz', '2018-05-17 16:26:31'),
(2, 'new_patient', 'Se agrego un nuevo paciente: Nora Zatarain', '2018-05-17 20:49:32'),
(3, 'new_patient', 'Se actualizo el paciente: Nora Zatarain', '2018-05-17 20:50:27'),
(4, 'new_report', 'Se ingreso el reporte: 0', '2018-05-17 20:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `medical_history`
--

CREATE TABLE IF NOT EXISTS `medical_history` (
  `id` int(4) NOT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medical_history`
--

INSERT INTO `medical_history` (`id`, `updated_date`, `created_date`) VALUES
(1, '2018-05-15 07:27:43', '2018-05-15 06:05:43'),
(2, '2018-05-15 07:27:50', '2018-05-15 06:05:50'),
(3, '2018-05-15 07:28:01', '2018-05-15 06:05:01'),
(4, '2018-05-15 07:29:31', '2018-05-15 06:05:31'),
(5, '2018-05-15 07:32:18', '2018-05-15 06:05:18'),
(6, '2018-05-15 07:34:20', '2018-05-15 06:05:20'),
(7, '2018-05-15 07:45:42', '2018-05-15 06:05:42'),
(8, '2018-05-16 06:23:17', '2018-05-16 05:05:17'),
(9, '2018-05-17 14:23:27', '2018-05-17 13:05:27'),
(10, '2018-05-17 14:24:12', '2018-05-17 13:05:12'),
(11, '2018-05-17 14:26:54', '2018-05-17 13:05:54'),
(12, '2018-05-17 14:28:30', '2018-05-17 13:05:30'),
(13, '2018-05-17 16:21:28', '2018-05-17 15:05:28'),
(14, '2018-05-17 16:22:27', '2018-05-17 15:05:27'),
(15, '2018-05-17 16:26:31', '2018-05-17 15:05:31'),
(16, '2018-05-17 20:49:32', '2018-05-17 19:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(4) unsigned NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `lastname` varchar(55) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `address_id` int(4) unsigned NOT NULL,
  `origin` varchar(45) DEFAULT NULL,
  `reside` varchar(45) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `religion` varchar(45) DEFAULT NULL,
  `scholarship` varchar(45) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `medical_history_id` int(4) NOT NULL DEFAULT '0',
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `lastname`, `birthdate`, `gender`, `address_id`, `origin`, `reside`, `phone`, `religion`, `scholarship`, `email`, `medical_history_id`, `updated_date`, `created_date`) VALUES
(1, 'Jesus Orlando', 'Magallon Hilario', '1997-05-20', 'M', 2, 'Puerto Vallarta', 'Puerto Vallarta', '3221154503', 'Ateo', 'Universitario', 'magallonj23@gmail.com', 3, '2018-05-16 05:28:08', NULL),
(4, 'Jose Luis', 'Gutierres Padilla', '1985-05-09', 'M', 5, 'Puerto Vallarta', 'Puerto Vallarta', '3224514785', 'Cristiano', 'Universitario', 'jose_luis@gmail.com', 6, '2018-05-15 07:34:20', '2018-05-15 06:05:20'),
(5, 'Sinforosa', 'Magallon Hilario', '1968-07-18', 'F', 6, 'Guerrero', 'Ometepec', '3221717416', 'Catolica', 'Preparatoria', 'smh_2377@gmail.com', 7, '2018-05-16 05:17:15', '2018-05-15 06:05:42'),
(6, 'Esteban', 'Hilario', '1997-05-20', 'M', 7, 'San Isidro', 'Puerto Vallarta', '3221415658', 'Catolico', 'Nula', 'esteban.h@gmail.com', 8, '2018-05-16 06:24:58', '2018-05-16 05:05:17'),
(10, 'Gerardo', 'Gutierrez', '1994-07-27', 'M', 11, 'Cuernavaca', 'Puerto Vallarta', '4526859423', 'Catolico', 'Universidad', 'gerardog@gmail.com', 12, '2018-05-17 14:28:30', '2018-05-17 13:05:30'),
(11, 'Josefa', 'Ortiz', '2001-08-09', 'F', 12, 'Zacatecas', 'Ixtapa', '3221545658', 'Atea', 'Preparatoria', 'josefao@gmail.com', 15, '2018-05-17 16:26:31', '2018-05-17 15:05:31'),
(12, 'Nora', 'Zatarain', '1997-08-20', 'F', 15, 'Culiacan', 'Puerto Vallarta', '3224567854', 'Catolica', 'Maestria', 'nora@gmail.com', 16, '2018-05-17 20:50:27', '2018-05-17 19:05:32');

--
-- Triggers `patients`
--
DELIMITER $$
CREATE TRIGGER `LogPaciente1` BEFORE UPDATE ON `patients`
 FOR EACH ROW INSERT INTO log (`lkey`, `value`) VALUES ('new_patient', CONCAT("Se actualizo el paciente: ", NEW.name, " ", NEW.lastname))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `LogPacientes` BEFORE INSERT ON `patients`
 FOR EACH ROW INSERT INTO log (`lkey`, `value`) VALUES ('new_patient', CONCAT("Se agrego un nuevo paciente: ", NEW.name, " ", NEW.lastname))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int(4) NOT NULL,
  `patient_id` int(4) unsigned DEFAULT NULL,
  `date` date DEFAULT NULL,
  `report_id` int(4) DEFAULT NULL,
  `folio` int(6) unsigned DEFAULT '0',
  `content` mediumtext,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `patient_id`, `date`, `report_id`, `folio`, `content`, `updated_date`, `created_date`) VALUES
(1, 1, '2018-05-17', 18, 64574, '<p>Esto es una prueba de receta.</p>', '2018-05-17 19:45:04', '2018-05-17 18:05:04'),
(2, 10, '2018-05-17', 27, 41055, '<p>Ejemplo de receta.</p>', '2018-05-17 20:25:12', '2018-05-17 19:05:12'),
(3, 12, '2018-05-17', 28, 77544, '<p>Bla bla bla bla</p>', '2018-05-17 20:53:25', '2018-05-17 19:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `id` int(4) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `value` varchar(255) NOT NULL,
  `slug` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `name`, `value`, `slug`) VALUES
(2, 'Diabetes', 'Tio', 'diabetes'),
(4, 'Hepatopatia', 'ToÃ±o', 'hepatopatia'),
(10, 'Enf. Alergicas', 'Juan', 'enf.-alergicas'),
(15, 'Hepatopatia', 'ToÃ±o', 'hepatopatia5afcb40759b8f'),
(16, 'Hepatopatia', 'ToÃ±o', 'hepatopatia5afcb43cae888'),
(17, 'Enf. Alergicas', 'Juan', 'enf.-alergicas5afcb43cdd8c8'),
(18, 'Hepatopatia', 'ToÃ±o', 'hepatopatia5afcb4f145fd2'),
(19, 'Enf. Alergicas', 'Juan', 'enf.-alergicas5afcb4f174f6c'),
(20, 'Hepatopatia', 'ToÃ±o', 'hepatopatia5afcb5ae4b12f'),
(21, 'Enf. Alergicas', 'Juan', 'enf.-alergicas5afcb5ae78d4b'),
(22, 'Hepatopatia', 'ToÃ±o', 'hepatopatia5afcb60fb6069'),
(23, 'Enf. Alergicas', 'Juan', 'enf.-alergicas5afcb60fe0b38'),
(24, 'Hepatopatia', 'ToÃ±o', 'hepatopatia5afcbd186e381'),
(25, 'Enf. Alergicas', 'Juan', 'enf.-alergicas5afcbd1898af9'),
(26, 'Hepatopatia', 'ToÃ±o', 'hepatopatia5afcbd463b08b'),
(27, 'Enf. Alergicas', 'Juan', 'enf.-alergicas5afcbd46656d4'),
(28, 'Hepatopatia', 'ToÃ±o', 'hepatopatia5afcbdb253d09'),
(29, 'Enf. Alergicas', 'Juan', 'enf.-alergicas5afcbdb27e5d2'),
(30, 'Diabetes', 'Jose', 'diabetes5afcbdd41017c'),
(31, 'Cancer', 'Pepe', 'cancer5afcbdd43b068'),
(32, 'Hepatopatia', 'Jose', 'hepatopatia_5afcc153e9782'),
(33, 'Asma', 'Pepe', 'asma_5afcc1541fb5b'),
(34, 'Otros', 'Maria', 'otros_5afcc1544b27c'),
(35, 'Hepatopatia', 'Jose', 'hepatopatia_5afcc169be586'),
(36, 'Asma', 'Pepe', 'asma_5afcc169e8a99'),
(37, 'Otros', 'Maria', 'otros_5afcc16a1fe22'),
(38, 'Hepatopatia', 'Jose', 'hepatopatia_5afcc1ea8e3b0'),
(39, 'Asma', 'Pepe', 'asma_5afcc1eab8ad0'),
(40, 'Otros', 'Maria', 'otros_5afcc1eae417f'),
(41, 'Hepatopatia', 'Jose', 'hepatopatia_5afcc1f84a02c'),
(42, 'Asma', 'Pepe', 'asma_5afcc1f874e05'),
(43, 'Otros', 'Maria', 'otros_5afcc1f8a03fd'),
(44, 'Hepatopatia', 'Jose', 'hepatopatia_5afcc388c42f7'),
(45, 'Asma', 'Pepe', 'asma_5afcc38902cda'),
(46, 'Otros', 'Maria', 'otros_5afcc3892e0f0'),
(47, 'Hepatopatia', 'Jose', 'hepatopatia_5afcc5f2db234'),
(48, 'Asma', 'Pepe', 'asma_5afcc5f31167a'),
(49, 'Otros', 'Maria', 'otros_5afcc5f34a64d'),
(50, 'Hepatopatia', 'Jose', 'hepatopatia_5afcc606f3ecf'),
(51, 'Asma', 'Pepe', 'asma_5afcc60729e99'),
(52, 'Otros', 'Maria', 'otros_5afcc6075565a'),
(53, 'Hepatopatia', 'Jose', 'hepatopatia_5afcc8106cd39'),
(54, 'Asma', 'Pepe', 'asma_5afcc810a1e44'),
(55, 'Otros', 'Maria', 'otros_5afcc810cd614'),
(56, 'Hepatopatia', 'Jose', 'hepatopatia_5afcc81db5972'),
(57, 'Asma', 'Pepe', 'asma_5afcc81de030a'),
(58, 'Otros', 'Maria', 'otros_5afcc81e181b2'),
(59, 'Hepatopatia', 'Jose', 'hepatopatia_5afcc962db5e7'),
(60, 'Asma', 'Pepe', 'asma_5afcc96311771'),
(61, 'Otros', 'Maria', 'otros_5afcc9633cde6'),
(62, 'Hepatopatia', 'Jose', 'hepatopatia_5afcca01c0d34'),
(63, 'Asma', 'Pepe', 'asma_5afcca01eb733'),
(64, 'Otros', 'Maria', 'otros_5afcca0222cb6'),
(65, 'Hepatopatia', 'Jose', 'hepatopatia_5afccc698929e'),
(66, 'Asma', 'Pepe', 'asma_5afccc69b3dbe'),
(67, 'Otros', 'Maria', 'otros_5afccc69df363'),
(68, 'Hepatopatia', 'Jose', 'hepatopatia_5afccd061863f'),
(69, 'Asma', 'Pepe', 'asma_5afccd0642cb2'),
(70, 'Otros', 'Maria', 'otros_5afccd066e2a1'),
(71, 'Hepatopatia', 'Jose', 'hepatopatia_5afccd2a171b6'),
(72, 'Asma', 'Pepe', 'asma_5afccd2a56045'),
(73, 'Otros', 'Maria', 'otros_5afccd2a817e2'),
(74, 'Diabetes', 'Tio', 'diabetes_5afcd62c3aac3'),
(75, 'Cancer', 'Papa', 'cancer_5afcd62c64b1c'),
(76, 'Enf. Alergicas', 'Al sol', 'enf.-alergicas_5afcd62c8ffbd'),
(77, 'Otros', 'Gripa', 'otros_5afcd62cc2b30'),
(78, 'Diabetes', 'Tio', 'diabetes_5afd28287b37d'),
(79, 'Asma', 'Sobrina', 'asma_5afd2828a5eb8'),
(80, 'Cancer', 'CuÃ±ado', 'cancer_5afd2828d3eac'),
(81, 'Enf. Alergicas', 'Hermana', 'enf.-alergicas_5afd2829152de'),
(82, 'Diabetes', 'Tio', 'diabetes_5afd9235b888b'),
(83, 'Asma', 'Sobrina', 'asma_5afd9235e4f3d'),
(84, 'Nefropatia', 'Abuela', 'nefropatia_5afd92361c2a7'),
(85, 'Cardiopatia', 'Abuelo', 'cardiopatia_5afd92364c325'),
(86, 'Enf. Alergicas', 'Familia', 'enf.-alergicas_5afd923679d20'),
(87, 'Hepatopatia', 'Tia', 'hepatopatia_5afd9faaf2f76'),
(88, 'Hepatopatia', 'Tia', 'hepatopatia_5afd9ff81a3f4'),
(89, 'Endocrinas', 'Suego', 'endocrinas_5afd9ff845900'),
(90, 'Cancer', 'CuÃ±ado', 'cancer_5afd9ff87bdc7'),
(91, 'Enf. Alergicas', 'Sobrina', 'enf.-alergicas_5afd9ff8b4c85'),
(92, 'Diabetes', 'Abuelo', 'diabetes_5afda23ee1868'),
(93, 'Asma', 'Tio', 'asma_5afda23f18946'),
(94, 'Hipertension', 'Abuelo', 'hipertension_5afda23f531d7'),
(95, 'Cancer', 'Primo', 'cancer_5afda23f825d0'),
(96, 'Enf. Alergicas', 'Abuela', 'enf.-alergicas_5afda23fc6022'),
(97, 'Diabetes', 'Tia', 'diabetes_5afda6e5d8e19'),
(98, 'Hepatopatia', 'ToÃ±o', 'hepatopatia_5afda6e6180f4'),
(99, 'Asma', 'Juliana', 'asma_5afda6e64e1de'),
(100, 'Cancer', 'Esmeralda', 'cancer_5afda6e67ee9b'),
(101, 'Enfactuales', 'Tos, gripa, fiebre, dolor de cabeza', 'enfactuales_5afda703cc2b0'),
(102, 'Alergias', 'Al sol', 'alergias_5afda70402927'),
(103, 'Adicciones', 'Tabaco, cerveza', 'adicciones_5afda7043a8a2'),
(104, 'Hepatopatia', 'test', 'hepatopatia_5afdeb44dab78'),
(105, 'Asma', 'test', 'asma_5afdeb4514c19'),
(106, 'Hipertension', 'test', 'hipertension_5afdeb4544c0d'),
(107, 'Cancer', 'test', 'cancer_5afdeb456e317'),
(108, 'Enf. Mentales', 'test', 'enf.-mentales_5afdeb45999fc'),
(109, 'Enfactuales', 'test', 'enfactuales_5afdeb5d61b72'),
(110, 'Quirurgicos', 'test', 'quirurgicos_5afdeb5d8c423'),
(111, 'Transfusionales', 'test', 'transfusionales_5afdeb5db79e1'),
(112, 'Traumaticos', 'test', 'traumaticos_5afdeb5dea47e'),
(113, 'Adicciones', 'test', 'adicciones_5afdeb5e1f9f9');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(4) NOT NULL,
  `current_condition` longtext,
  `diagnosis` longtext,
  `treatment` longtext,
  `medical_history_id` int(4) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `current_condition`, `diagnosis`, `treatment`, `medical_history_id`, `updated_date`, `created_date`) VALUES
(18, '', '', '', 7, '2018-05-17 00:27:21', '2018-05-16 23:05:21'),
(19, '', '', '', 7, '2018-05-17 00:29:57', '2018-05-16 23:05:57'),
(20, '', '', '', 7, '2018-05-17 00:30:33', '2018-05-16 23:05:33'),
(21, '<p>Hola!</p>\r\n<p>Esto es una prueba para ver como jala este pedo.<br />Esto es una linea seguida de otra.</p>', '<p>Esto es un tratamiento <strong>PROVICIONAL</strong></p>\r\n<p>No es una solucion definitiva.</p>', '<p>El tratamiento es mucho reposo. Se recomienda entre tres y 4 dias de reposo.</p>', 8, '2018-05-17 04:07:43', '2018-05-17 00:05:00'),
(22, '<p>Esto es una prueba, es solo para ver como funciona este pedo.</p>', '<p>Esto es una prueba. Es para ver que tal funciona este <strong>pedo</strong>.</p>', '<p>El tratamiento es que deje de fumar el wey.</p>', 6, '2018-05-17 06:59:55', '2018-05-17 05:05:48'),
(23, '<p>Es paciente presenta un cuadro de... Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tristique quam, et tincidunt purus rutrum sit amet. Nam posuere cursus eros, at commodo neque hendrerit non. Praesent scelerisque facilisis est sed placerat. Vestibulum pellentesque justo vel pretium pretium. In malesuada vel orci eget ullamcorper. Nulla dignissim magna eu ipsum pharetra, ac placerat dui pulvinar. Phasellus quis ullamcorper odio, vitae bibendum arcu. Sed placerat aliquam rhoncus. Donec faucibus, augue ac mollis aliquet, sem lectus elementum ipsum, vitae pretium sapien ante quis nulla.&nbsp;</p>', '<p>El diagnostico es... Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tristique quam, et tincidunt purus rutrum sit amet. Nam posuere cursus eros, at commodo neque hendrerit non. Praesent scelerisque facilisis est sed placerat. Vestibulum pellentesque justo vel pretium pretium. In malesuada vel orci eget ullamcorper. Nulla dignissim magna eu ipsum pharetra, ac placerat dui pulvinar. Phasellus quis ullamcorper odio, vitae bibendum arcu. Sed placerat aliquam rhoncus. Donec faucibus, augue ac mollis aliquet, sem lectus elementum ipsum, vitae pretium sapien ante quis nulla.&nbsp;</p>', '<p>Se ha recetado... Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tristique quam, et tincidunt purus rutrum sit amet. Nam posuere cursus eros, at commodo neque hendrerit non. Praesent scelerisque facilisis est sed placerat. Vestibulum pellentesque justo vel pretium pretium. In malesuada vel orci eget ullamcorper. Nulla dignissim magna eu ipsum pharetra, ac placerat dui pulvinar. Phasellus quis ullamcorper odio, vitae bibendum arcu. Sed placerat aliquam rhoncus. Donec faucibus, augue ac mollis aliquet, sem lectus elementum ipsum, vitae pretium sapien ante quis nulla.&nbsp;</p>', 12, '2018-05-17 14:35:38', '2018-05-17 13:05:17'),
(24, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel faucibus sapien. Nunc ut bibendum neque, ullamcorper ornare enim. In a purus sed elit eleifend venenatis. Donec nibh tortor, laoreet eget volutpat ut, blandit placerat nibh. Vestibulum laoreet eget metus a sollicitudin. Sed suscipit, tellus nec imperdiet dictum, sem sem elementum ex, ultricies gravida odio erat quis odio. Curabitur odio lectus, dignissim sed mauris quis, varius tempor nisl. Curabitur lobortis vitae massa at rutrum. Vestibulum nec nunc sed enim porttitor molestie sed vitae erat. Sed auctor lectus metus, sit amet finibus velit dictum a. Sed eget feugiat nisl. Quisque scelerisque consequat diam, et molestie tellus dictum sit amet. Cras et magna nec ex viverra euismod. Fusce sit amet sagittis libero, nec rutrum justo.</p>\r\n<p>Curabitur a cursus justo. Vestibulum aliquam rutrum erat quis imperdiet. Aliquam euismod urna est, non ullamcorper tellus luctus nec. Cras sed rhoncus arcu, at euismod enim. Maecenas nec placerat nisl. Fusce purus nunc, imperdiet nec tellus ac, consectetur tristique tortor. Sed sollicitudin, ligula et condimentum porta, sem urna tincidunt sem, auctor auctor velit lorem id diam. Nullam sed vulputate erat. Suspendisse in libero et odio convallis pharetra sed vel lorem.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel faucibus sapien. Nunc ut bibendum neque, ullamcorper ornare enim. In a purus sed elit eleifend venenatis. Donec nibh tortor, laoreet eget volutpat ut, blandit placerat nibh. Vestibulum laoreet eget metus a sollicitudin. Sed suscipit, tellus nec imperdiet dictum, sem sem elementum ex, ultricies gravida odio erat quis odio. Curabitur odio lectus, dignissim sed mauris quis, varius tempor nisl. Curabitur lobortis vitae massa at rutrum. Vestibulum nec nunc sed enim porttitor molestie sed vitae erat. Sed auctor lectus metus, sit amet finibus velit dictum a. Sed eget feugiat nisl. Quisque scelerisque consequat diam, et molestie tellus dictum sit amet. Cras et magna nec ex viverra euismod. Fusce sit amet sagittis libero, nec rutrum justo.</p>\r\n<p>Curabitur a cursus justo. Vestibulum aliquam rutrum erat quis imperdiet. Aliquam euismod urna est, non ullamcorper tellus luctus nec. Cras sed rhoncus arcu, at euismod enim. Maecenas nec placerat nisl. Fusce purus nunc, imperdiet nec tellus ac, consectetur tristique tortor. Sed sollicitudin, ligula et condimentum porta, sem urna tincidunt sem, auctor auctor velit lorem id diam. Nullam sed vulputate erat. Suspendisse in libero et odio convallis pharetra sed vel lorem.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel faucibus sapien. Nunc ut bibendum neque, ullamcorper ornare enim. In a purus sed elit eleifend venenatis. Donec nibh tortor, laoreet eget volutpat ut, blandit placerat nibh. Vestibulum laoreet eget metus a sollicitudin. Sed suscipit, tellus nec imperdiet dictum, sem sem elementum ex, ultricies gravida odio erat quis odio. Curabitur odio lectus, dignissim sed mauris quis, varius tempor nisl. Curabitur lobortis vitae massa at rutrum. Vestibulum nec nunc sed enim porttitor molestie sed vitae erat. Sed auctor lectus metus, sit amet finibus velit dictum a. Sed eget feugiat nisl. Quisque scelerisque consequat diam, et molestie tellus dictum sit amet. Cras et magna nec ex viverra euismod. Fusce sit amet sagittis libero, nec rutrum justo.</p>\r\n<p>Curabitur a cursus justo. Vestibulum aliquam rutrum erat quis imperdiet. Aliquam euismod urna est, non ullamcorper tellus luctus nec. Cras sed rhoncus arcu, at euismod enim. Maecenas nec placerat nisl. Fusce purus nunc, imperdiet nec tellus ac, consectetur tristique tortor. Sed sollicitudin, ligula et condimentum porta, sem urna tincidunt sem, auctor auctor velit lorem id diam. Nullam sed vulputate erat. Suspendisse in libero et odio convallis pharetra sed vel lorem.</p>', 12, '2018-05-17 15:40:48', '2018-05-17 14:05:42'),
(25, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel faucibus sapien. Nunc ut bibendum neque, ullamcorper ornare enim. In a purus sed elit eleifend venenatis. Donec nibh tortor, laoreet eget volutpat ut, blandit placerat nibh. Vestibulum laoreet eget metus a sollicitudin. Sed suscipit, tellus nec imperdiet dictum, sem sem elementum ex, ultricies gravida odio erat quis odio. Curabitur odio lectus, dignissim sed mauris quis, varius tempor nisl. Curabitur lobortis vitae massa at rutrum. Vestibulum nec nunc sed enim porttitor molestie sed vitae erat. Sed auctor lectus metus, sit amet finibus velit dictum a. Sed eget feugiat nisl. Quisque scelerisque consequat diam, et molestie tellus dictum sit amet. Cras et magna nec ex viverra euismod. Fusce sit amet sagittis libero, nec rutrum justo.</p>\r\n<p>Curabitur a cursus justo. Vestibulum aliquam rutrum erat quis imperdiet. Aliquam euismod urna est, non ullamcorper tellus luctus nec. Cras sed rhoncus arcu, at euismod enim. Maecenas nec placerat nisl. Fusce purus nunc, imperdiet nec tellus ac, consectetur tristique tortor. Sed sollicitudin, ligula et condimentum porta, sem urna tincidunt sem, auctor auctor velit lorem id diam. Nullam sed vulputate erat. Suspendisse in libero et odio convallis pharetra sed vel lorem.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel faucibus sapien. Nunc ut bibendum neque, ullamcorper ornare enim. In a purus sed elit eleifend venenatis. Donec nibh tortor, laoreet eget volutpat ut, blandit placerat nibh. Vestibulum laoreet eget metus a sollicitudin. Sed suscipit, tellus nec imperdiet dictum, sem sem elementum ex, ultricies gravida odio erat quis odio. Curabitur odio lectus, dignissim sed mauris quis, varius tempor nisl. Curabitur lobortis vitae massa at rutrum. Vestibulum nec nunc sed enim porttitor molestie sed vitae erat. Sed auctor lectus metus, sit amet finibus velit dictum a. Sed eget feugiat nisl. Quisque scelerisque consequat diam, et molestie tellus dictum sit amet. Cras et magna nec ex viverra euismod. Fusce sit amet sagittis libero, nec rutrum justo.</p>\r\n<p>Curabitur a cursus justo. Vestibulum aliquam rutrum erat quis imperdiet. Aliquam euismod urna est, non ullamcorper tellus luctus nec. Cras sed rhoncus arcu, at euismod enim. Maecenas nec placerat nisl. Fusce purus nunc, imperdiet nec tellus ac, consectetur tristique tortor. Sed sollicitudin, ligula et condimentum porta, sem urna tincidunt sem, auctor auctor velit lorem id diam. Nullam sed vulputate erat. Suspendisse in libero et odio convallis pharetra sed vel lorem.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel faucibus sapien. Nunc ut bibendum neque, ullamcorper ornare enim. In a purus sed elit eleifend venenatis. Donec nibh tortor, laoreet eget volutpat ut, blandit placerat nibh. Vestibulum laoreet eget metus a sollicitudin. Sed suscipit, tellus nec imperdiet dictum, sem sem elementum ex, ultricies gravida odio erat quis odio. Curabitur odio lectus, dignissim sed mauris quis, varius tempor nisl. Curabitur lobortis vitae massa at rutrum. Vestibulum nec nunc sed enim porttitor molestie sed vitae erat. Sed auctor lectus metus, sit amet finibus velit dictum a. Sed eget feugiat nisl. Quisque scelerisque consequat diam, et molestie tellus dictum sit amet. Cras et magna nec ex viverra euismod. Fusce sit amet sagittis libero, nec rutrum justo.</p>\r\n<p>Curabitur a cursus justo. Vestibulum aliquam rutrum erat quis imperdiet. Aliquam euismod urna est, non ullamcorper tellus luctus nec. Cras sed rhoncus arcu, at euismod enim. Maecenas nec placerat nisl. Fusce purus nunc, imperdiet nec tellus ac, consectetur tristique tortor. Sed sollicitudin, ligula et condimentum porta, sem urna tincidunt sem, auctor auctor velit lorem id diam. Nullam sed vulputate erat. Suspendisse in libero et odio convallis pharetra sed vel lorem.</p>', 12, '2018-05-17 15:35:19', '2018-05-17 14:05:59'),
(26, '', '', '', 12, '2018-05-17 15:39:42', '2018-05-17 14:05:42'),
(27, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel faucibus sapien. Nunc ut bibendum neque, ullamcorper ornare enim. In a purus sed elit eleifend venenatis. Donec nibh tortor, laoreet eget volutpat ut, blandit placerat nibh. Vestibulum laoreet eget metus a sollicitudin. Sed suscipit, tellus nec imperdiet dictum, sem sem elementum ex, ultricies gravida odio erat quis odio. Curabitur odio lectus, dignissim sed mauris quis, varius tempor nisl. Curabitur lobortis vitae massa at rutrum. Vestibulum nec nunc sed enim porttitor molestie sed vitae erat. Sed auctor lectus metus, sit amet finibus velit dictum a. Sed eget feugiat nisl. Quisque scelerisque consequat diam, et molestie tellus dictum sit amet. Cras et magna nec ex viverra euismod. Fusce sit amet sagittis libero, nec rutrum justo.</p>\r\n<p>Curabitur a cursus justo. Vestibulum aliquam rutrum erat quis imperdiet. Aliquam euismod urna est, non ullamcorper tellus luctus nec. Cras sed rhoncus arcu, at euismod enim. Maecenas nec placerat nisl. Fusce purus nunc, imperdiet nec tellus ac, consectetur tristique tortor. Sed sollicitudin, ligula et condimentum porta, sem urna tincidunt sem, auctor auctor velit lorem id diam. Nullam sed vulputate erat. Suspendisse in libero et odio convallis pharetra sed vel lorem.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel faucibus sapien. Nunc ut bibendum neque, ullamcorper ornare enim. In a purus sed elit eleifend venenatis. Donec nibh tortor, laoreet eget volutpat ut, blandit placerat nibh. Vestibulum laoreet eget metus a sollicitudin. Sed suscipit, tellus nec imperdiet dictum, sem sem elementum ex, ultricies gravida odio erat quis odio. Curabitur odio lectus, dignissim sed mauris quis, varius tempor nisl. Curabitur lobortis vitae massa at rutrum. Vestibulum nec nunc sed enim porttitor molestie sed vitae erat. Sed auctor lectus metus, sit amet finibus velit dictum a. Sed eget feugiat nisl. Quisque scelerisque consequat diam, et molestie tellus dictum sit amet. Cras et magna nec ex viverra euismod. Fusce sit amet sagittis libero, nec rutrum justo.</p>\r\n<p>Curabitur a cursus justo. Vestibulum aliquam rutrum erat quis imperdiet. Aliquam euismod urna est, non ullamcorper tellus luctus nec. Cras sed rhoncus arcu, at euismod enim. Maecenas nec placerat nisl. Fusce purus nunc, imperdiet nec tellus ac, consectetur tristique tortor. Sed sollicitudin, ligula et condimentum porta, sem urna tincidunt sem, auctor auctor velit lorem id diam. Nullam sed vulputate erat. Suspendisse in libero et odio convallis pharetra sed vel lorem.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel faucibus sapien. Nunc ut bibendum neque, ullamcorper ornare enim. In a purus sed elit eleifend venenatis. Donec nibh tortor, laoreet eget volutpat ut, blandit placerat nibh. Vestibulum laoreet eget metus a sollicitudin. Sed suscipit, tellus nec imperdiet dictum, sem sem elementum ex, ultricies gravida odio erat quis odio. Curabitur odio lectus, dignissim sed mauris quis, varius tempor nisl. Curabitur lobortis vitae massa at rutrum. Vestibulum nec nunc sed enim porttitor molestie sed vitae erat. Sed auctor lectus metus, sit amet finibus velit dictum a. Sed eget feugiat nisl. Quisque scelerisque consequat diam, et molestie tellus dictum sit amet. Cras et magna nec ex viverra euismod. Fusce sit amet sagittis libero, nec rutrum justo.</p>\r\n<p>Curabitur a cursus justo. Vestibulum aliquam rutrum erat quis imperdiet. Aliquam euismod urna est, non ullamcorper tellus luctus nec. Cras sed rhoncus arcu, at euismod enim. Maecenas nec placerat nisl. Fusce purus nunc, imperdiet nec tellus ac, consectetur tristique tortor. Sed sollicitudin, ligula et condimentum porta, sem urna tincidunt sem, auctor auctor velit lorem id diam. Nullam sed vulputate erat. Suspendisse in libero et odio convallis pharetra sed vel lorem.</p>', 12, '2018-05-17 16:00:30', '2018-05-17 14:05:33'),
(28, '<p><strong>Lorem ipsum.....</strong></p>', '<p style="text-align: center;">Esto es una prueba...</p>', '<p>El tratmejtksfjsapjfpok</p>', 16, '2018-05-17 20:52:40', '2018-05-17 19:05:16');

--
-- Triggers `reports`
--
DELIMITER $$
CREATE TRIGGER `LogReports` BEFORE INSERT ON `reports`
 FOR EACH ROW INSERT INTO log (`lkey`, `value`) VALUES ('new_report', CONCAT("Se ingreso el reporte: ", NEW.id))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `reports_has_sections`
--

CREATE TABLE IF NOT EXISTS `reports_has_sections` (
  `id` int(4) NOT NULL,
  `report_id` int(4) NOT NULL,
  `section_id` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reports_has_sections`
--

INSERT INTO `reports_has_sections` (`id`, `report_id`, `section_id`) VALUES
(14, 18, 1),
(15, 19, 1),
(16, 20, 1),
(21, 21, 1),
(22, 21, 7),
(24, 22, 1),
(25, 22, 7),
(26, 23, 1),
(27, 23, 7),
(28, 25, 1),
(29, 25, 7),
(30, 24, 11),
(31, 24, 12),
(32, 27, 13),
(33, 27, 14),
(34, 28, 15),
(35, 28, 16);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `parent` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `slug`, `parent`) VALUES
(1, 'Heredo Familiares', 'heredo-familiares', 'Antecedentes'),
(7, 'Personales Patologicos', 'personales-patologicos', 'Antecedentes'),
(8, 'Heredo Familiares', 'heredo-familiares', 'Antecedentes'),
(9, 'Heredo Familiares', 'heredo-familiares', 'Antecedentes'),
(10, 'Personales Patologicos', 'personales-patologicos', 'Antecedentes'),
(11, 'Heredo Familiares', 'heredo-familiares_5afda23ecbd51', 'Antecedentes'),
(12, 'Personales Patologicos', 'personales-patologicos_5afda25b5c318', 'Antecedentes'),
(13, 'Heredo Familiares', 'heredo-familiares_5afda6e5c35fb', 'Antecedentes'),
(14, 'Personales Patologicos', 'personales-patologicos_5afda703b714e', 'Antecedentes'),
(15, 'Heredo Familiares', 'heredo-familiares_5afdeb44c83a8', 'Antecedentes'),
(16, 'Personales Patologicos', 'personales-patologicos_5afdeb5d4a045', 'Antecedentes');

-- --------------------------------------------------------

--
-- Table structure for table `sections_has_records`
--

CREATE TABLE IF NOT EXISTS `sections_has_records` (
  `id` int(4) NOT NULL,
  `section_id` int(4) NOT NULL,
  `record_id` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sections_has_records`
--

INSERT INTO `sections_has_records` (`id`, `section_id`, `record_id`) VALUES
(2, 1, 10),
(5, 1, 15),
(6, 1, 16),
(7, 1, 17),
(8, 1, 18),
(9, 1, 19),
(10, 1, 20),
(11, 1, 21),
(12, 1, 22),
(13, 1, 23),
(14, 1, 24),
(15, 1, 25),
(16, 1, 26),
(17, 1, 27),
(18, 1, 28),
(19, 1, 29),
(20, 1, 30),
(21, 1, 31),
(22, 1, 32),
(23, 1, 33),
(24, 1, 34),
(25, 1, 35),
(26, 1, 36),
(27, 1, 37),
(28, 1, 38),
(29, 1, 39),
(30, 1, 40),
(31, 1, 41),
(32, 1, 42),
(33, 1, 43),
(34, 1, 44),
(35, 1, 45),
(36, 1, 46),
(37, 1, 47),
(38, 1, 48),
(39, 1, 49),
(40, 1, 50),
(41, 1, 51),
(42, 1, 52),
(43, 1, 53),
(44, 1, 54),
(45, 1, 55),
(46, 1, 56),
(47, 1, 57),
(48, 1, 58),
(49, 1, 59),
(50, 1, 60),
(51, 1, 61),
(52, 1, 62),
(53, 1, 63),
(54, 1, 64),
(55, 1, 65),
(56, 1, 66),
(57, 1, 67),
(58, 1, 68),
(59, 1, 69),
(60, 1, 70),
(61, 1, 71),
(62, 1, 72),
(63, 1, 73),
(64, 1, 74),
(65, 1, 75),
(66, 1, 76),
(67, 1, 77),
(68, 1, 78),
(69, 1, 79),
(70, 1, 80),
(71, 1, 81),
(72, 1, 82),
(73, 1, 83),
(74, 1, 84),
(75, 1, 85),
(76, 1, 86),
(77, 1, 88),
(78, 1, 89),
(79, 1, 90),
(80, 1, 91),
(81, 11, 92),
(82, 11, 93),
(83, 11, 94),
(84, 11, 95),
(85, 11, 96),
(86, 13, 97),
(87, 13, 98),
(88, 13, 99),
(89, 13, 100),
(90, 14, 101),
(91, 14, 102),
(92, 14, 103),
(93, 15, 104),
(94, 15, 105),
(95, 15, 106),
(96, 15, 107),
(97, 15, 108),
(98, 16, 109),
(99, 16, 110),
(100, 16, 111),
(101, 16, 112),
(102, 16, 113);

-- --------------------------------------------------------

--
-- Table structure for table `sistema`
--

CREATE TABLE IF NOT EXISTS `sistema` (
  `idSistema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) unsigned NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `lastname` varchar(55) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `type` int(1) DEFAULT '1' COMMENT '0 - Admin, 1 - Doc, 2 - Secre',
  `job` varchar(65) DEFAULT NULL,
  `professional_license` int(8) DEFAULT NULL,
  `address_id` int(4) unsigned NOT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `type`, `job`, `professional_license`, `address_id`, `updated_date`, `created_date`) VALUES
(1, 'Jesús', 'Magallón', 'magallonj23@gmail.com', '$2y$10$rOnyh/Kyjcew9SEvps/mHuQY04vKQqq7TylOMu0h68YxhYjLwAo12', 1, 'Developer', NULL, 1, '2018-05-15 07:27:16', NULL),
(3, 'Jose Luis', 'Gutierrez', 'jlgpblue@gmail.com', '$2y$10$wIfgoLD0mnqU5Hx07/eRrOns5IKTLei8SVM.vGGJ0LHFS3ym1tSU.', 0, 'Frontend Developer', NULL, 15, '2018-09-02 05:25:54', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`,`address_id`,`medical_history_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `Historial_Clinico_Id_UNIQUE` (`medical_history_id`),
  ADD UNIQUE KEY `Email_UNIQUE` (`email`),
  ADD KEY `fk_Pacientes_Direcciones_idx` (`address_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Folio_UNIQUE` (`folio`),
  ADD KEY `Receta Paciente_idx` (`patient_id`),
  ADD KEY `Receta Reporte_idx` (`report_id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug_UNIQUE` (`slug`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reports_has_medical_history_idx` (`medical_history_id`);

--
-- Indexes for table `reports_has_sections`
--
ALTER TABLE `reports_has_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_id` (`section_id`),
  ADD KEY `report_id` (`report_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections_has_records`
--
ALTER TABLE `sections_has_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_id` (`section_id`),
  ADD KEY `record_id` (`record_id`);

--
-- Indexes for table `sistema`
--
ALTER TABLE `sistema`
  ADD PRIMARY KEY (`idSistema`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`address_id`),
  ADD UNIQUE KEY `address_id_UNIQUE` (`address_id`),
  ADD UNIQUE KEY `Ced_Prof_UNIQUE` (`professional_license`),
  ADD KEY `Usuario - Direccion_idx` (`address_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `medical_history`
--
ALTER TABLE `medical_history`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `reports_has_sections`
--
ALTER TABLE `reports_has_sections`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `sections_has_records`
--
ALTER TABLE `sections_has_records`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `fk_Pacientes_Direcciones` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pacientes_Historial_Clinico` FOREIGN KEY (`medical_history_id`) REFERENCES `medical_history` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `Receta Paciente` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Receta Reporte` FOREIGN KEY (`report_id`) REFERENCES `reports` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `fk_reports_has_medical_history` FOREIGN KEY (`medical_history_id`) REFERENCES `medical_history` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reports_has_sections`
--
ALTER TABLE `reports_has_sections`
  ADD CONSTRAINT `fk_Reportes_has_Antecedentes_Antecedentes1` FOREIGN KEY (`report_id`) REFERENCES `reports` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Reportes_has_Antecedentes_Sections1` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`);

--
-- Constraints for table `sections_has_records`
--
ALTER TABLE `sections_has_records`
  ADD CONSTRAINT `fk_Sections_Has_Records_Records1` FOREIGN KEY (`record_id`) REFERENCES `records` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Sections_Has_Records_Sections1` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `User - Address` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
