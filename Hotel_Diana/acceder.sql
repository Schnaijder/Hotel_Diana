/*
Navicat MySQL Data Transfer

Source Server         : local-host
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : acceder

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2014-11-27 18:05:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for acceder
-- ----------------------------
DROP TABLE IF EXISTS `acceder`;
CREATE TABLE `acceder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `email` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` date NOT NULL,
  `telefonico` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acceder
-- ----------------------------

-- ----------------------------
-- Table structure for administrador
-- ----------------------------
DROP TABLE IF EXISTS `administrador`;
CREATE TABLE `administrador` (
  `id` int(10) NOT NULL,
  `administrador` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of administrador
-- ----------------------------

-- ----------------------------
-- Table structure for habitaciones
-- ----------------------------
DROP TABLE IF EXISTS `habitaciones`;
CREATE TABLE `habitaciones` (
  `FO_HABITACION` varchar(50) NOT NULL,
  `NUM_HABITACION` int(11) NOT NULL,
  `TIPO_HABITACION` varchar(50) NOT NULL,
  `COSTOXHABITACION` float NOT NULL,
  `ESTADO_HABITACION` char(1) NOT NULL,
  PRIMARY KEY (`FO_HABITACION`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of habitaciones
-- ----------------------------

-- ----------------------------
-- Table structure for imagenes
-- ----------------------------
DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE `imagenes` (
  `IDimagenes` int(11) NOT NULL,
  `IDTipo` int(11) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  PRIMARY KEY (`IDimagenes`),
  KEY `imagen` (`IDTipo`),
  CONSTRAINT `imagen` FOREIGN KEY (`IDTipo`) REFERENCES `tipo` (`IDTipo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of imagenes
-- ----------------------------

-- ----------------------------
-- Table structure for material
-- ----------------------------
DROP TABLE IF EXISTS `material`;
CREATE TABLE `material` (
  `FO_MATERIAL` varchar(50) NOT NULL,
  `NOMBRE_MATERIAL` varchar(50) NOT NULL,
  `TIPO_MATERIAL` varchar(50) NOT NULL,
  `COSTOXMATERIAL` float NOT NULL,
  PRIMARY KEY (`FO_MATERIAL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of material
-- ----------------------------

-- ----------------------------
-- Table structure for personal
-- ----------------------------
DROP TABLE IF EXISTS `personal`;
CREATE TABLE `personal` (
  `FO_PERSONAL` varchar(50) NOT NULL,
  `NOMBRE_P` varchar(50) NOT NULL,
  `EDAD` int(2) NOT NULL,
  `SEXO` char(1) NOT NULL,
  `DIRECCION` varchar(50) NOT NULL,
  `TELEFONO` varchar(50) NOT NULL,
  PRIMARY KEY (`FO_PERSONAL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of personal
-- ----------------------------

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `FO_PRODUC` varchar(50) NOT NULL,
  `NOMBRE_PRODUC` varchar(50) NOT NULL,
  `TIPO_PRODUC` varchar(50) NOT NULL,
  `COSTOXPRODUC` float NOT NULL,
  PRIMARY KEY (`FO_PRODUC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productos
-- ----------------------------

-- ----------------------------
-- Table structure for reservaciones
-- ----------------------------
DROP TABLE IF EXISTS `reservaciones`;
CREATE TABLE `reservaciones` (
  `FO_RESERVACION` int(10) NOT NULL,
  `ID` int(11) NOT NULL,
  `FO_HABITACION` varchar(50) NOT NULL,
  `FECHA_ENTRADA` date NOT NULL,
  `FECHA_SALIDA` date NOT NULL,
  `TIPO_HABITACION` varchar(50) NOT NULL,
  `PERSONAS` int(1) NOT NULL,
  PRIMARY KEY (`FO_RESERVACION`),
  KEY `ID_USUARIO` (`ID`),
  KEY `FO_HABITACION` (`FO_HABITACION`),
  CONSTRAINT `reservar` FOREIGN KEY (`ID`) REFERENCES `acceder` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `reservaciones_ibfk_2` FOREIGN KEY (`FO_HABITACION`) REFERENCES `habitaciones` (`FO_HABITACION`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of reservaciones
-- ----------------------------

-- ----------------------------
-- Table structure for tipo
-- ----------------------------
DROP TABLE IF EXISTS `tipo`;
CREATE TABLE `tipo` (
  `IDTipo` int(11) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `seccion` varchar(45) NOT NULL,
  PRIMARY KEY (`IDTipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tipo
-- ----------------------------
DROP TRIGGER IF EXISTS `apartar`;
DELIMITER ;;
CREATE TRIGGER `apartar` AFTER INSERT ON `reservaciones` FOR EACH ROW update habitaciones set estado_habitacion=estado_habitacion+1 where new.fo_habitacion=reservaciones.fo_habitacion
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `liberar`;
DELIMITER ;;
CREATE TRIGGER `liberar` AFTER DELETE ON `reservaciones` FOR EACH ROW update habitaciones set estado_habitacion=estado_habitacion-1 where old.fo_habitacion=reservaciones.fo_habitacion
;;
DELIMITER ;
