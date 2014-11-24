/*
Navicat MySQL Data Transfer

Source Server         : local-host
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : acceder

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2014-11-22 15:37:31
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
  `telefonico` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acceder
-- ----------------------------
INSERT INTO `acceder` VALUES ('1', 'a', 'nose', null, 'nksdbv', '2014-11-14', '1561');
INSERT INTO `acceder` VALUES ('2', 'al', '123', null, 'kbjhbj', '2014-11-21', '1565');

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
-- Table structure for horario
-- ----------------------------
DROP TABLE IF EXISTS `horario`;
CREATE TABLE `horario` (
  `FO_HORARIO` varchar(50) NOT NULL,
  `FO_PERSONAL` varchar(50) NOT NULL,
  `DIAS` date NOT NULL,
  `HORA_ENTRANTE` date NOT NULL,
  `HORA_SALIDA` date NOT NULL,
  PRIMARY KEY (`FO_HORARIO`),
  KEY `FK_HORARIO_REFERENCE_PERSONAL` (`FO_PERSONAL`),
  CONSTRAINT `FK_HORARIO_REFERENCE_PERSONAL` FOREIGN KEY (`FO_PERSONAL`) REFERENCES `personal` (`FO_PERSONAL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of horario
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
  `ID_USUARIO` varchar(50) NOT NULL,
  `FO_HABITACION` varchar(50) NOT NULL,
  `FECHA_ENTREDA` date NOT NULL,
  `FECHA_SALIDA` date NOT NULL,
  `TIPO_HABITACION` varchar(50) NOT NULL,
  `PERSONAS` int(1) NOT NULL,
  PRIMARY KEY (`FO_RESERVACION`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  KEY `FO_HABITACION` (`FO_HABITACION`),
  CONSTRAINT `reservaciones_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `reservaciones_ibfk_2` FOREIGN KEY (`FO_HABITACION`) REFERENCES `habitaciones` (`FO_HABITACION`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of reservaciones
-- ----------------------------

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `ID_USUARIO` varchar(50) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `TELEFONO` int(12) NOT NULL,
  PRIMARY KEY (`ID_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
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
