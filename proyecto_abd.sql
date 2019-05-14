-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2019 a las 10:28:09
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_abd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('inna-1333@hotmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `codigo_libro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`id`, `email`, `codigo_libro`) VALUES
(1, 'ricardogabrielvalle@gmail.com', 7),
(2, 'ricardogabrielvalle@gmail.com', 6),
(3, 'ricardogabrielvalle@gmail.com', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `sinopsis` varchar(500) NOT NULL,
  `editorial` varchar(50) NOT NULL,
  `materia` varchar(50) NOT NULL,
  `paginas` int(11) NOT NULL,
  `encuadernacion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`codigo`, `titulo`, `autor`, `isbn`, `sinopsis`, `editorial`, `materia`, `paginas`, `encuadernacion`) VALUES
(5, 'DrÃ¡cula', 'Bram Stoker', '82839129310', 'Un libro emocionante sobre el primer vampiro...', 'Debolsillo', 'Novelas', 545, 'Pasta dura'),
(6, 'Crimen y castigo', 'Fedor Dostoievsky', '192039412', 'Crimen y castigo, novela rusa.', 'Debolsillo', 'Novelas', 760, 'Pasta dura'),
(7, 'CanciÃ³n de hielo y fuego - Juego de tronos', 'George R.R. Martin', ' 9786073128834', 'En el legendario mundo de los Siete Reinos, lord Stark y su familia se encuentran en el centro de un conflicto que desatarÃ¡ todas las pasiones y la mÃ¡s mortal de las batallas...', 'Debolsillo', 'FicciÃ³n', 560, 'Pasta tradicional'),
(9, 'Demian', 'Hermann Hesse ', '34112323122', 'Demian...', 'PorrÃºa', 'Novelas', 134, 'Pasta tradicional');

--
-- Disparadores `libros`
--
DELIMITER $$
CREATE TRIGGER `auditoria` AFTER INSERT ON `libros` FOR EACH ROW INSERT INTO tabla_auditoria (titulo_copia, autor_copia, isbn_copia, usuario, fecha) 
VALUES (NEW.titulo, NEW.autor, NEW.isbn, current_user(), NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_auditoria`
--

CREATE TABLE `tabla_auditoria` (
  `is_auditoria` int(11) NOT NULL,
  `titulo_copia` varchar(100) NOT NULL,
  `autor_copia` varchar(50) NOT NULL,
  `isbn_copia` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla_auditoria`
--

INSERT INTO `tabla_auditoria` (`is_auditoria`, `titulo_copia`, `autor_copia`, `isbn_copia`, `usuario`, `fecha`) VALUES
(1, 'Ejemplo de auditoria', 'Luis Ramirez', '12132321631', 'root@localhost', '2019-05-13'),
(2, 'Demian', 'Hermann Hesse ', '34112323122', 'root@localhost', '2019-05-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `direccion` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellido`, `email`, `password`, `direccion`) VALUES
('Luis Ernesto', 'Ramirez Rincon', 'luis.err97@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Candido Carlin #337 '),
('Ricardo Gabriel', 'Valle RodrÃ­guez', 'ricardogabrielvalle@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Castellanos y tapia 825');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `tabla_auditoria`
--
ALTER TABLE `tabla_auditoria`
  ADD PRIMARY KEY (`is_auditoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tabla_auditoria`
--
ALTER TABLE `tabla_auditoria`
  MODIFY `is_auditoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
