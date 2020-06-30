-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2019 a las 06:20:31
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(10) NOT NULL,
  `np` varchar(100) NOT NULL,
  `pu` decimal(4,0) NOT NULL,
  `can` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `CODCATEG` varchar(5) NOT NULL,
  `NOMBRECATEG` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`CODCATEG`, `NOMBRECATEG`) VALUES
('1', 'Comida-Bocadillos'),
('2', 'Regalos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `CI` int(10) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `TELEFONO` int(10) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASS` varchar(10) NOT NULL,
  `IDDIRECCION` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`CI`, `NOMBRE`, `TELEFONO`, `EMAIL`, `PASS`, `IDDIRECCION`) VALUES
(1754383716, 'Javier Cobo', 25985412, 'merlibecu@hotmail.com', '1234', 5),
(1754383717, 'Javier Cobo', 2598575, 'merlibecu@gmail.com', '1234', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `IDDIRECCION` int(10) NOT NULL,
  `CALLE1` varchar(100) NOT NULL,
  `CALLE2` varchar(100) NOT NULL,
  `NUMCASA` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`IDDIRECCION`, `CALLE1`, `CALLE2`, `NUMCASA`) VALUES
(1, 'Pedro Freile', 'Vaca de Castro', '45A'),
(2, 'aaa', 'aaa', 'aaaa'),
(3, 'aaa', 'aaa', 'aaaa'),
(4, 'aaa', 'aaa', 'aaaa'),
(5, 'q', 'q', 'q');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `IDDETALLE` int(5) NOT NULL,
  `IDPRODUCTO` varchar(5) NOT NULL,
  `CANTIDAD` int(5) NOT NULL,
  `TOTAL` decimal(4,0) NOT NULL,
  `CI` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `CODPROD` varchar(5) NOT NULL,
  `NOMBREPROD` varchar(100) NOT NULL,
  `PRECIO` decimal(2,0) NOT NULL,
  `STOCK` int(10) NOT NULL,
  `CODCATEG` varchar(5) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`CODPROD`, `NOMBREPROD`, `PRECIO`, `STOCK`, `CODCATEG`, `img`) VALUES
('1', 'Enrrollados de Carne ', '10', 10, '2', 'img/productos/pr1.jpg'),
('2', 'Palillos de Queso', '15', 10, '2', 'img/productos/pr2.jpg'),
('3', 'Enrollados De Tocino', '25', 10, '2', 'img/productos/pr3.jpg'),
('4', 'Varios', '70', 10, '2', 'img/productos/pr4.jpg'),
('5', 'Regalo 1', '50', 5, '1', 'img/productos/pr5.jpg'),
('6', 'Regalo 2', '40', 5, '1', 'img/productos/pr6.jpg'),
('7', 'Regalo 3', '25', 5, '1', 'img/productos/pr7.jpg'),
('8', 'Cangrejada', '99', 5, '2', 'img/productos/pr8.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `IDPROVE` int(5) NOT NULL,
  `NOMBREPROVE` varchar(100) NOT NULL,
  `TELEFONOPROVE` int(10) NOT NULL,
  `EMAILPROVE` varchar(100) NOT NULL,
  `CODPROD` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`IDPROVE`, `NOMBREPROVE`, `TELEFONOPROVE`, `EMAILPROVE`, `CODPROD`) VALUES
(1, 'Pronaca', 3690355, 'contacto@pronaca.com', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`CODCATEG`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CI`),
  ADD KEY `IDDIRECCION` (`IDDIRECCION`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`IDDIRECCION`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`IDDETALLE`),
  ADD KEY `IDPRODUCTO` (`IDPRODUCTO`),
  ADD KEY `CI` (`CI`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`CODPROD`),
  ADD KEY `CODCATEG` (`CODCATEG`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`IDPROVE`),
  ADD KEY `CODPROD` (`CODPROD`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`IDDIRECCION`) REFERENCES `direccion` (`IDDIRECCION`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`IDPRODUCTO`) REFERENCES `producto` (`CODPROD`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`CODCATEG`) REFERENCES `categoria` (`CODCATEG`);

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `proveedores_ibfk_1` FOREIGN KEY (`CODPROD`) REFERENCES `producto` (`CODPROD`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
