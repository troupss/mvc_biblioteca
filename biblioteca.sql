-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2023 a las 17:18:41
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `llibre`
--

CREATE TABLE `llibre` (
  `Isbn` varchar(255) NOT NULL,
  `titol` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `preu` double NOT NULL,
  `editorial` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `llibre`
--

INSERT INTO `llibre` (`Isbn`, `titol`, `categoria`, `preu`, `editorial`, `autor`) VALUES
('AA11', 'Admin', 'Admin', 12, 'Admin', 'Admin'),
('BB11', 'Juan', 'Terror', 21, 'JuanLlibres', 'Juan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestec`
--

CREATE TABLE `prestec` (
  `codi` int(11) NOT NULL,
  `ISBN` varchar(255) NOT NULL,
  `DNI` varchar(9) NOT NULL,
  `data_prestec` date NOT NULL,
  `data_retorn` date NOT NULL,
  `retornat` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prestec`
--

INSERT INTO `prestec` (`codi`, `ISBN`, `DNI`, `data_prestec`, `data_retorn`, `retornat`) VALUES
(1, 'AA11', '55532343R', '2023-11-21', '2023-12-21', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuari`
--

CREATE TABLE `usuari` (
  `DNI` varchar(9) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `telefon` int(11) NOT NULL,
  `correu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuari`
--

INSERT INTO `usuari` (`DNI`, `nom`, `telefon`, `correu`) VALUES
('45632343R', 'Juan', 621545414, 'Juan@admin.com'),
('55532343R', 'Pedro', 65545414, 'Pedro@admin.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `llibre`
--
ALTER TABLE `llibre`
  ADD PRIMARY KEY (`Isbn`);

--
-- Indices de la tabla `prestec`
--
ALTER TABLE `prestec`
  ADD PRIMARY KEY (`codi`),
  ADD KEY `ISBN` (`ISBN`),
  ADD KEY `DNI` (`DNI`);

--
-- Indices de la tabla `usuari`
--
ALTER TABLE `usuari`
  ADD PRIMARY KEY (`DNI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `prestec`
--
ALTER TABLE `prestec`
  MODIFY `codi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `prestec`
--
ALTER TABLE `prestec`
  ADD CONSTRAINT `prestec_ibfk_1` FOREIGN KEY (`ISBN`) REFERENCES `llibre` (`Isbn`),
  ADD CONSTRAINT `prestec_ibfk_2` FOREIGN KEY (`DNI`) REFERENCES `usuari` (`DNI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
