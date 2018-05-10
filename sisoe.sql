-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2018 a las 00:00:34
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sisoe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `idDireccion` int(10) UNSIGNED ZEROFILL NOT NULL,
  `Calle` varchar(45) NOT NULL,
  `NumeroExt` varchar(6) DEFAULT NULL,
  `NumeroInt` varchar(6) DEFAULT NULL,
  `Colonia` varchar(45) NOT NULL,
  `Municipio` varchar(45) NOT NULL,
  `Estado` varchar(45) NOT NULL,
  `Pais` varchar(45) NOT NULL,
  `CodigoPostal` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `idEvento` int(11) NOT NULL,
  `Nombre` varchar(120) DEFAULT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  `Cronograma` longtext,
  `FechaInicio` datetime DEFAULT NULL,
  `FechaFin` datetime DEFAULT NULL,
  `Asistentes` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_has_salones`
--

CREATE TABLE `eventos_has_salones` (
  `Eventos_idEvento` int(11) NOT NULL,
  `Salones_idSalon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizadores`
--

CREATE TABLE `organizadores` (
  `idOrganizador` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `RFC` varchar(20) DEFAULT NULL,
  `Eventos_idEvento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `idPersona` int(11) NOT NULL,
  `Nombres` varchar(45) NOT NULL,
  `Apellidos` varchar(45) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contrasena` varchar(72) NOT NULL,
  `Empresa` varchar(255) DEFAULT NULL,
  `Direccion_idDireccion` int(10) UNSIGNED ZEROFILL NOT NULL,
  `Telefono` int(10) DEFAULT NULL,
  `Tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idProveedor` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Descripcion` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`idProveedor`, `Nombre`, `Tipo`, `Correo`, `Telefono`, `Descripcion`) VALUES
(1, 'Mobiliario para eventos S.A de C.V', 'Renta de sillas y mesas', 'renta.mob@info.com', '3221417369', 'Renta de todo tipo de mesas y sillas para sus eventos, para presupuestos, contactenos.'),
(2, 'Decoraciones y blancos Fest', 'Servicio', 'fest@info.net', '3221996588', 'Servicio de decoración de salones para eventos y renta de mantelería'),
(4, 'Todo para su evento', 'Consumibles', 'events@gmail.com', '3221115456', 'Venta de articulos consumibles para sus eventos, como servilletas, cubiertos y otros.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salones`
--

CREATE TABLE `salones` (
  `idSalon` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Capacidad` smallint(3) DEFAULT NULL,
  `Tipo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `salones`
--

INSERT INTO `salones` (`idSalon`, `Nombre`, `Capacidad`, `Tipo`) VALUES
(1, 'Rubí', 120, 'Festivo'),
(2, 'Esmeralda', 80, 'Multiproposito'),
(3, 'Aguamarina', 100, 'Audiovisual');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`idDireccion`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`idEvento`);

--
-- Indices de la tabla `eventos_has_salones`
--
ALTER TABLE `eventos_has_salones`
  ADD PRIMARY KEY (`Eventos_idEvento`,`Salones_idSalon`),
  ADD KEY `fk_Eventos_has_Salones_Salones1_idx` (`Salones_idSalon`),
  ADD KEY `fk_Eventos_has_Salones_Eventos1_idx` (`Eventos_idEvento`);

--
-- Indices de la tabla `organizadores`
--
ALTER TABLE `organizadores`
  ADD PRIMARY KEY (`idOrganizador`,`idPersona`,`Eventos_idEvento`),
  ADD UNIQUE KEY `idPersona_UNIQUE` (`idPersona`),
  ADD KEY `fk_Organizadores_Eventos1_idx` (`Eventos_idEvento`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`idPersona`,`Correo`,`Direccion_idDireccion`),
  ADD KEY `fk_Personas_Direccion1_idx` (`Direccion_idDireccion`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `salones`
--
ALTER TABLE `salones`
  ADD PRIMARY KEY (`idSalon`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `idDireccion` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `idEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `organizadores`
--
ALTER TABLE `organizadores`
  MODIFY `idOrganizador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `salones`
--
ALTER TABLE `salones`
  MODIFY `idSalon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventos_has_salones`
--
ALTER TABLE `eventos_has_salones`
  ADD CONSTRAINT `fk_Eventos_has_Salones_Eventos1` FOREIGN KEY (`Eventos_idEvento`) REFERENCES `eventos` (`idEvento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Eventos_has_Salones_Salones1` FOREIGN KEY (`Salones_idSalon`) REFERENCES `salones` (`idSalon`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `organizadores`
--
ALTER TABLE `organizadores`
  ADD CONSTRAINT `Organizadores tienen` FOREIGN KEY (`idPersona`) REFERENCES `personas` (`idPersona`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Organizadores_Eventos1` FOREIGN KEY (`Eventos_idEvento`) REFERENCES `eventos` (`idEvento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `fk_Personas_Direccion1` FOREIGN KEY (`Direccion_idDireccion`) REFERENCES `direccion` (`idDireccion`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
