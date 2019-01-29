-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-01-2019 a las 12:32:10
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `liga`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` int(11) NOT NULL,
  `nombre_eq` varchar(45) NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  `web` varchar(250) DEFAULT 'sin web oficial',
  `puntos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_equipo`, `nombre_eq`, `ciudad`, `web`, `puntos`) VALUES
(1, 'Regal Barcelona', 'Barcelona', 'http://www.fcbarcelona.com/web/index_idiomes.html', 10),
(2, 'Real Madrid', 'Madrid', 'http://www.realmadrid.com/cs/Satellite/es/1193040472450/SubhomeEquipo/Baloncesto.htm', 9),
(3, 'P.E. Valencia', 'Valencia', 'http://www.valenciabasket.com/', 11),
(4, 'Caja Laboral', 'Vitoria', 'http://www.baskonia.com/prehomes/prehomes.asp?id_prehome=69', 22),
(5, 'Gran Canaria', 'Las Palmas', 'http://www.acb.com/club.php?id=CLA', 14),
(6, 'CAI Zaragoza', 'Zaragoza', 'http://basketzaragoza.net/', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `id_jugador` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `posicion` varchar(45) DEFAULT NULL,
  `id_capitan` int(11) DEFAULT NULL,
  `fecha_alta` datetime DEFAULT NULL,
  `salario` int(11) DEFAULT NULL,
  `equipo` int(11) DEFAULT NULL,
  `altura` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`id_jugador`, `nombre`, `apellido`, `posicion`, `id_capitan`, `fecha_alta`, `salario`, `equipo`, `altura`) VALUES
(1, 'Juan Carlos', 'Navarro', 'escolta', 1, '2010-01-10 00:00:00', 130000, 1, '1.96'),
(2, 'Felipe', 'Reyes', 'Pivot', 2, '2009-02-20 00:00:00', 132000, 2, '2.04'),
(3, 'Victor', 'Claver', 'Alero', 3, '2009-03-08 00:00:00', 99000, 3, '2.08'),
(4, 'Rafa ', 'Martinez', 'ala-pivot', 4, '2010-11-11 00:00:00', 51000, 3, '1.91'),
(5, 'Fernando', 'San Emeterio', 'Alero', 6, '2008-09-22 00:00:00', 60000, 4, '1.99'),
(6, 'Mirza', 'Teletovic', 'Pivot', 6, '2010-05-13 00:00:00', 77000, 4, '2.06'),
(7, 'Sergio ', 'Llull', 'Escolta', 2, '2011-10-29 00:00:00', 100000, 2, '1.90'),
(8, 'Victor ', 'Sada', 'Base', 1, '2012-01-01 00:00:00', 80000, 1, '1.92'),
(9, 'Carlos', 'Suarez', 'Alero', 2, '2011-02-19 00:00:00', 66000, 2, '2.03'),
(10, 'Xavi ', 'Rey', 'Pivot', 14, '2008-10-12 00:00:00', 104500, 5, '2.09'),
(11, 'Carlos ', 'Cabezas', 'Base', 13, '2012-01-21 00:00:00', 105000, 6, '1.86'),
(12, 'Pablo ', 'Aguilar', 'Alero', 13, '2011-06-14 00:00:00', 51700, 6, '2.03'),
(13, 'Rafa', 'Hettsheimeir', 'Pivot', 13, '2008-04-15 00:00:00', 58300, 6, '2.08'),
(14, 'Sitapha', 'Savané', 'Pivot', 14, '2011-07-27 00:00:00', 66000, 5, '2.01'),
(15, 'anonimo', 'anonimo', 'Ala-pivot', 2, '2012-01-01 00:00:00', 4000, 3, '2.00'),
(22, 'j1', NULL, NULL, NULL, NULL, NULL, 2, '2.00'),
(23, 'j2', NULL, NULL, NULL, NULL, NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido`
--

CREATE TABLE `partido` (
  `id_partido` int(11) NOT NULL,
  `local` int(11) NOT NULL,
  `visitante` int(11) NOT NULL,
  `resultado` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `arbitro` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partido`
--

INSERT INTO `partido` (`id_partido`, `local`, `visitante`, `resultado`, `fecha`, `arbitro`) VALUES
(1, 1, 2, '100-100', '2011-10-10', '4\r'),
(2, 2, 3, '90-91', '2011-11-17', '5\r'),
(3, 3, 4, '88-77', '2011-11-23', '6\r'),
(4, 1, 6, '66-78', '2011-11-30', '6\r'),
(5, 2, 4, '90-90', '2012-01-12', '7\r'),
(6, 4, 5, '79-83', '2012-01-19', '3\r'),
(7, 3, 6, '91-88', '2012-02-22', '3\r'),
(8, 5, 4, '90-66', '2012-04-27', '2\r'),
(9, 6, 5, '110-70', '2012-05-30', '1'),
(10, 3, 5, '88-77', '2011-09-01', '2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre_eq`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`id_jugador`),
  ADD KEY `fequipo` (`equipo`);

--
-- Indices de la tabla `partido`
--
ALTER TABLE `partido`
  ADD PRIMARY KEY (`id_partido`),
  ADD KEY `flocal` (`local`),
  ADD KEY `fvisitante` (`visitante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `partido`
--
ALTER TABLE `partido`
  MODIFY `id_partido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD CONSTRAINT `fequipo` FOREIGN KEY (`equipo`) REFERENCES `equipo` (`id_equipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `partido`
--
ALTER TABLE `partido`
  ADD CONSTRAINT `flocal` FOREIGN KEY (`local`) REFERENCES `equipo` (`id_equipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fvisitante` FOREIGN KEY (`visitante`) REFERENCES `equipo` (`id_equipo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
