
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-11-2015 a las 22:29:20
-- Versión del servidor: 10.0.20-MariaDB
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u858464654_doc`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`u858464654_udoc`@`localhost` PROCEDURE `generate_documents`(IN  materia int, IN idprocesoEnt int)
begin
    case materia
     when 1 then INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F01)','Proyecto de cooperación','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F02)','Carta de presentación','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F03)','Carta comprimiso','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F04)','Carta de aceptación','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F05)','Reporte quincenal R1','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F05)','Reporte quincenal R2','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F05)','Reporte quincenal R3','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F05)','Reporte quincenal R4','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F06)','Carta de terminación','GENERADO');
     			 UPDATE procesos SET estado_pro='VALIDADO' WHERE idproceso=idprocesoEnt;
     			 
     when 2 then INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F01)','Proyecto de cooperación','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F02)','Carta de presentación','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F03)','Carta comprimiso','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F04)','Carta de aceptación','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F05)','Reporte quincenal R1','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F05)','Reporte quincenal R2','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F05)','Reporte quincenal R3','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F05)','Reporte quincenal R4','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F06)','Carta de terminación','GENERADO');
     			 UPDATE procesos SET estado_pro='VALIDADO' WHERE idproceso=idprocesoEnt;

     when 3 then INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20000/03(F01)','Proyecto de cooperación','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20000/03(F02)','Carta de presentación','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20000/03(F03)','Carta comprimiso','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20000/03(F04)','Carta de aceptación','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20000/03(F05)','Reporte quincenal R1','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20000/03(F05)','Reporte quincenal R2','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20000/03(F05)','Reporte quincenal R3','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20000/03(F05)','Reporte quincenal R4','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20000/03(F06)','Carta de terminación','GENERADO'); 
     			 UPDATE procesos SET estado_pro='VALIDADO' WHERE idproceso=idprocesoEnt;
    end case;
  end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `matricula` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `paterno` varchar(100) DEFAULT NULL,
  `materno` varchar(100) DEFAULT NULL,
  `sexo` varchar(2) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `tipo_user` varchar(45) DEFAULT NULL,
  `idcarrera` int(11) DEFAULT NULL,
  `curp` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`matricula`),
  KEY `cuenta_carrera_idx` (`idcarrera`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `accounts`
--

INSERT INTO `accounts` (`matricula`, `nombre`, `paterno`, `materno`, `sexo`, `email`, `password`, `tipo_user`, `idcarrera`, `curp`, `telefono`) VALUES
(444, 'Alejandro', 'Cabrera', 'Marquez', 'H', 'aleja_aot@gmail.com', '444', 'ADMIN', 3, 'ALTER342', '55234543'),
(123, 'Karla', 'Villaroel', 'Fonseca', 'M', 'kar_gt_dif@hotmail.com', '123', 'ASESOR', 3, 'KARE325', '53424523'),
(1213161056, 'Jth', 'Rdz', 'Srn', 'H', 'fernetsystem@gmail.com', '1213161056', 'ALUMNO', 3, 'RDJA53363', '443245423'),
(1213151516, 'ftf', 'cgct', 'ctc', 'H', 'VYGVT', '1213151516', 'ASESOR', 3, 'xrfcrcf', '765445');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesores`
--

CREATE TABLE IF NOT EXISTS `asesores` (
  `no_asesor` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(12) DEFAULT NULL,
  `matricula` int(11) DEFAULT NULL,
  PRIMARY KEY (`no_asesor`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=116 ;

--
-- Volcado de datos para la tabla `asesores`
--

INSERT INTO `asesores` (`no_asesor`, `token`, `matricula`) VALUES
(112, 'AKTER123', 123),
(113, 'AMSA34', 1213151516),
(114, 'KJRTE34', 12131515),
(115, 'AXTEM42', 10909013);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE IF NOT EXISTS `carreras` (
  `idcarreras` int(11) NOT NULL AUTO_INCREMENT,
  `carrera` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idcarreras`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`idcarreras`, `carrera`) VALUES
(1, 'Ingeniería industrial'),
(2, 'Ingeniería mecatrónica'),
(3, 'Ingeniería en informática'),
(4, 'Ingeniería en nanotecnología'),
(5, 'Licenciatura en administración y gestión de PyMES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `RFC` varchar(30) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `idsector` int(11) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `estado_emp` int(11) DEFAULT NULL,
  PRIMARY KEY (`RFC`),
  UNIQUE KEY `RFC_UNIQUE` (`RFC`),
  KEY `empresas_sector_idx` (`idsector`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`RFC`, `nombre`, `idsector`, `direccion`, `telefono`, `correo`, `estado_emp`) VALUES
('daniservicioa', 'danis sa sc', 2, 'danilandia', '4545', 'tthntn@hotmail.com', 1),
('APPSFER3453', 'Apis Moviles', 2, 'Av. Amazonas Col. Trebol Piso 4', '5643432312', 'app_myfe@appmy.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
  `idgrupo` int(11) NOT NULL AUTO_INCREMENT,
  `grupo` varchar(45) DEFAULT NULL,
  `periodo` varchar(45) DEFAULT NULL,
  `no_asesor` int(11) DEFAULT NULL,
  PRIMARY KEY (`idgrupo`),
  KEY `asesor_grupos_idx` (`no_asesor`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=116 ;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`idgrupo`, `grupo`, `periodo`, `no_asesor`) VALUES
(112, '110401', '2015-2', 113),
(113, '110451', '2015-3', 113),
(114, '110401', '2016-2', 113),
(115, '110751', '2016-2', 113);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `idmateria` int(11) NOT NULL AUTO_INCREMENT,
  `materia` varchar(45) DEFAULT NULL,
  `cutrimestre` varchar(45) DEFAULT NULL,
  `ciclo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idmateria`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`idmateria`, `materia`, `cutrimestre`, `ciclo`) VALUES
(1, 'Estancias1', '4° Cuatrimestre', 'Primer ciclo de formación'),
(2, 'Estancias2', '7° Cuatrimestre', 'Segundo ciclo de formación'),
(3, 'Estadias', '10° Cuatrimestre', 'Tercer ciclo de formación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

CREATE TABLE IF NOT EXISTS `procesos` (
  `idproceso` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` int(11) DEFAULT NULL,
  `idmateria` int(11) DEFAULT NULL,
  `idgrupo` int(11) DEFAULT NULL,
  `estado_pro` varchar(45) DEFAULT NULL,
  `total_horas` int(11) DEFAULT NULL,
  `RFC` varchar(30) DEFAULT NULL,
  `fecha_i` varchar(45) DEFAULT NULL,
  `fecha_t` varchar(45) DEFAULT NULL,
  `calificacion` float DEFAULT NULL,
  `nom_proyecto` varchar(100) DEFAULT NULL,
  `nom_encargado` varchar(100) DEFAULT NULL,
  `puesto_encargado` varchar(100) DEFAULT NULL,
  `tit_encargado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idproceso`),
  KEY `procesos_alumno_idx` (`matricula`),
  KEY `procesos_materia_idx` (`idmateria`),
  KEY `procesos_empresa_idx` (`RFC`),
  KEY `procesos_grupos_idx` (`idgrupo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `procesos`
--

INSERT INTO `procesos` (`idproceso`, `matricula`, `idmateria`, `idgrupo`, `estado_pro`, `total_horas`, `RFC`, `fecha_i`, `fecha_t`, `calificacion`, `nom_proyecto`, `nom_encargado`, `puesto_encargado`, `tit_encargado`) VALUES
(2, 1213161056, 1, 113, 'APROBADA', 360, 'APPSFER3453', '4 November, 2015', '25 November, 2015', 8, 'Retget', 'Julio Cesar Escamilla Quintero', 'Gerente de sistemas', 'Ing.'),
(3, 1213161056, 2, 115, 'REPROBADA', 360, 'APPSFER3453', '3 November, 2015', '28 November, 2015', 3, 'rdct', 'LOP', 'LOO', 'Ing.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos_documentos`
--

CREATE TABLE IF NOT EXISTS `procesos_documentos` (
  `iddocumento` int(11) NOT NULL AUTO_INCREMENT,
  `idproceso` int(11) DEFAULT NULL,
  `formato` varchar(100) DEFAULT NULL,
  `documento` varchar(100) DEFAULT NULL,
  `estado_doc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`iddocumento`),
  KEY `documentos_un_proceso_idx` (`idproceso`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `procesos_documentos`
--

INSERT INTO `procesos_documentos` (`iddocumento`, `idproceso`, `formato`, `documento`, `estado_doc`) VALUES
(1, 2, '205BK20100/03(F01)', 'Proyecto de cooperación', 'GENERADO'),
(2, 2, '205BK20100/03(F02)', 'Carta de presentación', 'GENERADO'),
(3, 2, '205BK20100/03(F03)', 'Carta comprimiso', 'GENERADO'),
(4, 2, '205BK20100/03(F04)', 'Carta de aceptación', 'GENERADO'),
(5, 2, '205BK20100/03(F05)', 'Reporte quincenal R1', 'GENERADO'),
(6, 2, '205BK20100/03(F05)', 'Reporte quincenal R2', 'GENERADO'),
(7, 2, '205BK20100/03(F05)', 'Reporte quincenal R3', 'GENERADO'),
(8, 2, '205BK20100/03(F05)', 'Reporte quincenal R4', 'GENERADO'),
(9, 2, '205BK20100/03(F06)', 'Carta de terminación', 'GENERADO'),
(25, 3, '205BK20100/03(F05)', 'Reporte quincenal R3', 'GENERADO'),
(24, 3, '205BK20100/03(F05)', 'Reporte quincenal R2', 'GENERADO'),
(23, 3, '205BK20100/03(F05)', 'Reporte quincenal R1', 'GENERADO'),
(22, 3, '205BK20100/03(F04)', 'Carta de aceptación', 'GENERADO'),
(21, 3, '205BK20100/03(F03)', 'Carta comprimiso', 'GENERADO'),
(20, 3, '205BK20100/03(F02)', 'Carta de presentación', 'GENERADO'),
(19, 3, '205BK20100/03(F01)', 'Proyecto de cooperación', 'GENERADO'),
(26, 3, '205BK20100/03(F05)', 'Reporte quincenal R4', 'GENERADO'),
(27, 3, '205BK20100/03(F06)', 'Carta de terminación', 'GENERADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector`
--

CREATE TABLE IF NOT EXISTS `sector` (
  `idsector` int(11) NOT NULL AUTO_INCREMENT,
  `sector` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idsector`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `sector`
--

INSERT INTO `sector` (`idsector`, `sector`) VALUES
(1, 'Público'),
(2, 'Privado'),
(3, 'Social');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
