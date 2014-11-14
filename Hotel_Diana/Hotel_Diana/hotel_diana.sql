-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-09-2013 a las 23:42:26
-- Versión del servidor: 5.5.29
-- Versión de PHP: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Base de datos: `usuarios`
--
CREATE DATABASE `acceder` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `acceder`;

CREATE TABLE `acceder` (
  `id` int(11) NOT NULL auto_increment,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `descripcion` text character set utf8 collate utf8_spanish_ci,
  `email` varchar(45) character set utf8 collate utf8_spanish_ci default NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY  (`id`)
)


