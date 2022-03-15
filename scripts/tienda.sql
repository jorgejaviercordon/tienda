drop database if exists iaw_db;
create database iaw_db;
use iaw_db;
drop table if exists clientes;
CREATE TABLE `clientes` (
  `DNI` varchar(9) NOT NULL PRIMARY KEY,
  `Nombre` varchar(9)  NOT NULL,
  `Apellidos` varchar(9)  NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Fecha_nacimiento` varchar(50) NOT NULL
);
drop table if exists productos;

CREATE TABLE `productos` (
  `codigo` int NOT NULL PRIMARY KEY,
  `descripcion` varchar(30) NOT NULL,
  `rebaja` int NOT NULL,
  `estarebajas` int NOT NULL,
  `precio` int NOT NULL
);
