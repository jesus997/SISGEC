-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 12, 2018 at 01:31 AM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `direccion`
--

CREATE TABLE IF NOT EXISTS `direccion` (
  `idDireccion` int(10) unsigned zerofill NOT NULL,
  `Calle` varchar(45) NOT NULL,
  `NumeroExt` varchar(6) DEFAULT NULL,
  `NumeroInt` varchar(6) DEFAULT NULL,
  `Colonia` varchar(45) NOT NULL,
  `Municipio` varchar(45) NOT NULL,
  `Estado` varchar(45) NOT NULL,
  `Pais` varchar(45) NOT NULL,
  `CodigoPostal` int(8) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `direccion`
--

INSERT INTO `direccion` (`idDireccion`, `Calle`, `NumeroExt`, `NumeroInt`, `Colonia`, `Municipio`, `Estado`, `Pais`, `CodigoPostal`) VALUES
(0000000001, 'Alcachofa', '256', '', 'El Pitirancho', 'Puerto Vallarta', 'Jalisco', 'Mexico', 48290),
(0000000002, 'Tulipan', '1270', '', 'La Floresta', 'Puerto Vallarta', 'Jalisco', 'Mexico', 48290),
(0000000003, 'Tulipan', '1270', '', 'La Floresta', 'Puerto Vallarta', 'Jalisco', 'Mexico', 48290),
(0000000004, 'Tulipan', '1270', '', 'La Floresta', 'Puerto Vallarta', 'Jalisco', 'Mexico', 48290),
(0000000005, 'Gladiola', '234', '', 'La Floresta', 'Puerto Vallarta', 'Jalisco', 'Mexico', 34567);

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `idEvento` int(11) NOT NULL,
  `Nombre` varchar(120) DEFAULT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  `Cronograma` longtext,
  `FechaInicio` datetime DEFAULT NULL,
  `FechaFin` datetime DEFAULT NULL,
  `Asistentes` longtext
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`idEvento`, `Nombre`, `Tipo`, `Cronograma`, `FechaInicio`, `FechaFin`, `Asistentes`) VALUES
(1, 'Convencion de Anime', 'ConvenciÃ³n', '<p style="text-align: center;"><strong>Esto es un ejemplo de un cronograma.</strong></p>', '2018-05-01 04:12:25', '2018-05-31 11:47:33', 'Jose\r\nAlexis\r\nJuan Carlos'),
(2, 'Bautizo Ruben', 'Familiar', 'Esto es otro ejemplo de un cronograma', '2018-05-17 00:00:00', '2018-05-31 00:00:00', 'Jesus\r\nJose\r\nMaria\r\nPepe\r\nLupita'),
(3, 'Baile de find e curso', 'ReuniÃ³n', '<p style="text-align: center;"><strong>Esto es un cronograma</strong></p>', '2018-05-02 04:23:27', '2018-05-26 02:10:00', 'Jose\r\nPepe\r\nMaria\r\nJuan\r\nJulian\r\nSandra\r\nVictoria'),
(4, 'Esto se borrara', 'Final', 'Hola', '2018-05-31 00:00:00', '2018-06-28 00:00:00', 'hola\r\njeje\r\nesto\r\nse\r\nborrara'),
(5, 'Fin del pinchi mundo por Thanos alv', 'Mesa Redonda', '<h2 style="text-align: center;">El fin del mundo esta aqui.</h2>\r\n<p style="text-align: center;">Han sus maletas por que papi tanos nos va a llevar de paseo.... AL PINCHI INFIERNOOO ALVVVVV!</p>', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Jose Luis\r\nPeppe\r\nkfjsfm'),
(7, 'Pepe es inocente', 'XV aÃ±os', '<p><strong>Purbea</strong></p>', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Juan\r\npepe\r\ntoÃ±o'),
(9, 'Test', 'Bautizo', '<h1 style="text-align: center;"><strong>TEST</strong></h1>', '2018-05-01 15:16:00', '2018-06-01 16:19:00', 'Jose\r\nPepe\r\nPedro'),
(10, 'Test', 'Bautizo', '<h1 style="text-align: center;"><strong>TEST</strong></h1>', '2018-05-01 15:16:00', '2018-06-01 16:19:00', 'Jose\r\nPepe\r\nPedro'),
(11, 'Test', 'Bautizo', '<h1 style="text-align: center;"><strong>TEST</strong></h1>', '2018-05-01 15:16:00', '2018-06-01 16:19:00', 'Jose\r\nPepe\r\nPedro'),
(12, 'Test', 'Bautizo', '<h1 style="text-align: center;"><strong>TEST</strong></h1>', '2018-05-01 15:16:00', '2018-06-01 16:19:00', 'Jose\r\nPepe\r\nPedro'),
(13, 'Test', 'Bautizo', '<h1 style="text-align: center;"><strong>TEST</strong></h1>', '2018-05-01 15:16:00', '2018-06-01 16:19:00', 'Jose\r\nPepe\r\nPedro'),
(15, 'Holi', 'Aniversario', '<p>Hola ;)</p>\r\n<p>&hearts;</p>', '2018-05-17 03:05:00', '2018-06-02 05:00:00', 'Jose\r\nPepe\r\nPedro'),
(16, 'Fin de curso', 'GraduaciÃ³n', '<p>Fin de curso muchachotes!!!</p>', '2018-05-24 17:40:00', '2018-06-02 18:50:00', 'Jose\r\nPedro\r\nPablo'),
(17, 'Incio de curso', 'Taller', '<p>Inicio de <strong>curso</strong>.</p>', '2018-01-08 14:14:00', '2018-07-18 17:00:00', 'Jose\r\nPedro\r\nPablo');

-- --------------------------------------------------------

--
-- Table structure for table `eventos_has_salones`
--

CREATE TABLE IF NOT EXISTS `eventos_has_salones` (
  `Eventos_idEvento` int(11) NOT NULL,
  `Salones_idSalon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eventos_has_salones`
--

INSERT INTO `eventos_has_salones` (`Eventos_idEvento`, `Salones_idSalon`) VALUES
(1, 1),
(2, 1),
(16, 1),
(1, 2),
(2, 2),
(3, 3),
(17, 3);

-- --------------------------------------------------------

--
-- Table structure for table `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `idPersona` int(11) NOT NULL,
  `Nombres` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contrasena` varchar(72) NOT NULL,
  `Empresa` varchar(255) DEFAULT NULL,
  `Direccion_idDireccion` int(10) unsigned zerofill NOT NULL,
  `Telefono` int(15) DEFAULT NULL,
  `RFC` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Tipo` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personas`
--

INSERT INTO `personas` (`idPersona`, `Nombres`, `Apellidos`, `Correo`, `Contrasena`, `Empresa`, `Direccion_idDireccion`, `Telefono`, `RFC`, `Tipo`) VALUES
(11, 'Jes&uacute;s', 'Magall&oacute;n', 'magallonj23@gmail.com', '$2y$10$VWR7ncgAsCX6ae6zWtoOe.FG6OSM655xLQyKCDmg8YFWdnZi6TH4.', 'Pepa', 0000000003, 322115450, '1234567890abcde', 0),
(12, 'Jose Luis', 'Gutierrez', 'jose_luis@gmail.com', '$2y$10$z6udqWhxEPICEJ7Xzf0S9ekekCW8/uPbMQST2RrGYJox/dn2bUCnW', 'La Otra', 0000000004, 322115450, '1234567890abcde', 1),
(13, 'Pepe', 'el Toro', 'pepe_eltoro@gmail.com', '$2y$10$VWR7ncgAsCX6ae6zWtoOe.FG6OSM655xLQyKCDmg8YFWdnZi6TH4.', 'Juanchita', 0000000002, 322115450, '1234567890abcde', 1),
(14, 'Eventos el Arco', 'De vallarta', 'eventos.arcos@gmail.com', '$2y$10$VWR7ncgAsCX6ae6zWtoOe.FG6OSM655xLQyKCDmg8YFWdnZi6TH4.', 'Eventos el Arco', 0000000001, 322115450, '1234567890abcde', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personas_has_eventos`
--

CREATE TABLE IF NOT EXISTS `personas_has_eventos` (
  `Personas_idPersona` int(11) NOT NULL,
  `Eventos_idEvento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personas_has_eventos`
--

INSERT INTO `personas_has_eventos` (`Personas_idPersona`, `Eventos_idEvento`) VALUES
(11, 1),
(11, 2),
(11, 3),
(12, 7),
(11, 16),
(11, 17);

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `idProveedor` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Descripcion` varchar(120) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`idProveedor`, `Nombre`, `Tipo`, `Correo`, `Telefono`, `Descripcion`) VALUES
(1, 'Mobiliario para eventos S.A de C.V', 'Renta de sillas y mesas', 'renta.mob@info.com', '3221417369', 'Renta de todo tipo de mesas y sillas para sus eventos, para presupuestos, contactenos.'),
(2, 'Decoraciones y blancos Fest', 'Servicio', 'fest@info.net', '3221996588', 'Servicio de decoración de salones para eventos y renta de mantelería'),
(4, 'Todo para su evento', 'Consumibles', 'events@gmail.com', '3221115456', 'Venta de articulos consumibles para sus eventos, como servilletas, cubiertos y otros.');

-- --------------------------------------------------------

--
-- Table structure for table `salones`
--

CREATE TABLE IF NOT EXISTS `salones` (
  `idSalon` int(11) NOT NULL,
  `Nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `Descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Capacidad` smallint(3) DEFAULT NULL,
  `Tipo` varchar(20) DEFAULT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salones`
--

INSERT INTO `salones` (`idSalon`, `Nombre`, `Descripcion`, `Capacidad`, `Tipo`, `imagen`) VALUES
(1, 'RubÃ­', 'SalÃ³n para eventos recreativos y sociales: aniversarios, bodas, cumpleaÃ±os, XV aÃ±os, bautismos, comuniones, conmemoraciones, graduaciones, reuniones empresariales y universitarias, shows y animaciones.', 140, 'Tipo de Salon', '{local}/assets/imagenes/rubi.jpg'),
(2, 'Esmeralda', 'Sal&oacute;n para debates, paneles, mesas redondas, talleres y seminarios entre otros.', 80, 'Multiproposito', '{local}/assets/imagenes/esmeralda2.jpg'),
(3, 'Aguamarina', 'Sal&oacute;n audiovisual para conferencias, simposios, congresos, convenciones, foros y cursos entre otros.', 100, 'Audiovisual', '{local}/assets/imagenes/aguamarina4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`idDireccion`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`idEvento`);

--
-- Indexes for table `eventos_has_salones`
--
ALTER TABLE `eventos_has_salones`
  ADD PRIMARY KEY (`Eventos_idEvento`,`Salones_idSalon`),
  ADD KEY `fk_Eventos_has_Salones_Salones1_idx` (`Salones_idSalon`),
  ADD KEY `fk_Eventos_has_Salones_Eventos1_idx` (`Eventos_idEvento`);

--
-- Indexes for table `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`idPersona`,`Correo`,`Direccion_idDireccion`),
  ADD KEY `fk_Personas_Direccion1_idx` (`Direccion_idDireccion`);

--
-- Indexes for table `personas_has_eventos`
--
ALTER TABLE `personas_has_eventos`
  ADD KEY `Personas_idPersona` (`Personas_idPersona`),
  ADD KEY `Eventos_idEvento` (`Eventos_idEvento`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indexes for table `salones`
--
ALTER TABLE `salones`
  ADD PRIMARY KEY (`idSalon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `direccion`
--
ALTER TABLE `direccion`
  MODIFY `idDireccion` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `idEvento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `personas`
--
ALTER TABLE `personas`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `salones`
--
ALTER TABLE `salones`
  MODIFY `idSalon` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `eventos_has_salones`
--
ALTER TABLE `eventos_has_salones`
  ADD CONSTRAINT `fk_Eventos_has_Salones_Eventos1` FOREIGN KEY (`Eventos_idEvento`) REFERENCES `eventos` (`idEvento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Eventos_has_Salones_Salones1` FOREIGN KEY (`Salones_idSalon`) REFERENCES `salones` (`idSalon`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `fk_Personas_Direccion1` FOREIGN KEY (`Direccion_idDireccion`) REFERENCES `direccion` (`idDireccion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `personas_has_eventos`
--
ALTER TABLE `personas_has_eventos`
  ADD CONSTRAINT `fk_Personas_has_Eventos_Eventos1` FOREIGN KEY (`Eventos_idEvento`) REFERENCES `eventos` (`idEvento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Personas_has_Eventos_Personas1` FOREIGN KEY (`Personas_idPersona`) REFERENCES `personas` (`idPersona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
