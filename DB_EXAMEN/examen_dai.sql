-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-07-2017 a las 00:35:54
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen_dai`
--
create database examen_dai;
use examen_dai;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `idAtencion` int(11) NOT NULL,
  `fechaAtencion` date NOT NULL,
  `rutPaciente` int(11) NOT NULL,
  `rutMedico` int(11) NOT NULL,
  `idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`idAtencion`, `fechaAtencion`, `rutPaciente`, `rutMedico`, `idEstado`) VALUES
(1, '2017-07-21', 19585652, 19585652, 1),
(2, '2017-07-21', 19585652, 19585652, 1),
(3, '2017-07-21', 1298739, 19585652, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `idEspecialidad` int(11) NOT NULL,
  `nombreEspecialidad` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`idEspecialidad`, `nombreEspecialidad`) VALUES
(1, 'Cirujano'),
(2, 'Nutricionista ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_consulta`
--

CREATE TABLE `estado_consulta` (
  `idEstado` int(11) NOT NULL,
  `estado` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `estado_consulta`
--

INSERT INTO `estado_consulta` (`idEstado`, `estado`) VALUES
(1, 'Agendada'),
(2, 'Confirmada'),
(3, 'Anulada'),
(4, 'Perdida'),
(5, 'Realizada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `rut` int(11) NOT NULL,
  `nombreMedioco` varchar(30) COLLATE utf8_bin NOT NULL,
  `fechaContratacion` date NOT NULL,
  `especialidad` int(11) NOT NULL,
  `valorConsulta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`rut`, `nombreMedioco`, `fechaContratacion`, `especialidad`, `valorConsulta`) VALUES
(19585652, 'Diego Diaz', '2017-07-06', 1, 30000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `rut` int(9) NOT NULL,
  `idPerfil` int(11) NOT NULL,
  `nombrePaciente` varchar(25) COLLATE utf8_bin NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `sexo` varchar(10) COLLATE utf8_bin NOT NULL,
  `Direccion` varchar(60) COLLATE utf8_bin NOT NULL,
  `Telefono` varchar(13) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`rut`, `idPerfil`, `nombrePaciente`, `fechaNacimiento`, `sexo`, `Direccion`, `Telefono`) VALUES
(1298739, 4, 'Prueba', '2017-07-06', 'Femenino', 'askdl', 'asodk'),
(19585652, 4, 'Diego Diaz', '2017-06-06', 'Masculino', 'Fake Street 123', '+56927364528');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `idPerfil` int(11) NOT NULL,
  `nombrePerfil` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`idPerfil`, `nombrePerfil`) VALUES
(1, 'Director'),
(2, 'Administrador'),
(3, 'Secretaria'),
(4, 'Paciente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(20) COLLATE utf8_bin NOT NULL,
  `contrasenna` varchar(50) COLLATE utf8_bin NOT NULL,
  `idPerfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombreUsuario`, `contrasenna`, `idPerfil`) VALUES
(1, 'ddiazj', 'a189c633d9995e11bf8607170ec9a4b8', 2),
(2, 'DiegoPaciente', 'a189c633d9995e11bf8607170ec9a4b8', 4),
(3, 'DiegoDirector', 'a189c633d9995e11bf8607170ec9a4b8', 1),
(4, 'DiegoSecretario', 'a189c633d9995e11bf8607170ec9a4b8', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`idAtencion`),
  ADD KEY `Consulta_FK_Paciente` (`rutPaciente`),
  ADD KEY `Consulta_FK_Medico` (`rutMedico`),
  ADD KEY `Consulta_FK_Estado` (`idEstado`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`idEspecialidad`);

--
-- Indices de la tabla `estado_consulta`
--
ALTER TABLE `estado_consulta`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`rut`),
  ADD KEY `Medico_FK_Especialidad` (`especialidad`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`rut`),
  ADD KEY `Paciente_FK_Usuario` (`idPerfil`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idPerfil`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `Usuario_FK_Perfil` (`idPerfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `idAtencion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `idEspecialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `estado_consulta`
--
ALTER TABLE `estado_consulta`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idPerfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `Consulta_FK_Estado` FOREIGN KEY (`idEstado`) REFERENCES `estado_consulta` (`idEstado`),
  ADD CONSTRAINT `Consulta_FK_Medico` FOREIGN KEY (`rutMedico`) REFERENCES `medico` (`rut`),
  ADD CONSTRAINT `Consulta_FK_Paciente` FOREIGN KEY (`rutPaciente`) REFERENCES `paciente` (`rut`);

--
-- Filtros para la tabla `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `Medico_FK_Especialidad` FOREIGN KEY (`especialidad`) REFERENCES `especialidad` (`idEspecialidad`);

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `Paciente_FK_Perfil` FOREIGN KEY (`idPerfil`) REFERENCES `perfil` (`idPerfil`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `Usuario_FK_Perfil` FOREIGN KEY (`idPerfil`) REFERENCES `perfil` (`idPerfil`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
