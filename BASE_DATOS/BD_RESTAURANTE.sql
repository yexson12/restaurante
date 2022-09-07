/* ESTA ES LA BD*/

CREATE DATABASE BD_RESTAURANTE;
USE BD_RESTAURANTE;
CREATE TABLE `categoria` (
  `ID_CATEGORIA` int unsigned NOT NULL AUTO_INCREMENT,
  `NOMBRE_CATEGORIA` varchar(50) NOT NULL,
  `DES_CATEGORIA` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_CATEGORIA`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `bd_restaurante`.`categoria` (`ID_CATEGORIA`, `NOMBRE_CATEGORIA`, `DES_CATEGORIA`) VALUES ('1', 'parrillas', 'todo tipo de parrillas');
INSERT INTO `bd_restaurante`.`categoria` (`ID_CATEGORIA`, `NOMBRE_CATEGORIA`, `DES_CATEGORIA`) VALUES ('2', 'platos', 'platos tipicos');
INSERT INTO `bd_restaurante`.`categoria` (`ID_CATEGORIA`, `NOMBRE_CATEGORIA`, `DES_CATEGORIA`) VALUES ('3', 'bebidas', 'todo tipo de bebidas');
INSERT INTO `bd_restaurante`.`categoria` (`ID_CATEGORIA`, `NOMBRE_CATEGORIA`, `DES_CATEGORIA`) VALUES ('4', 'postres', 'todo tipo de postres');


CREATE TABLE `subcategoria` (
  `ID_SUBCAT` int unsigned NOT NULL AUTO_INCREMENT,
  `ID_CATEGORIA` int unsigned NOT NULL,
  `NOMBRE_SUBCAT` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_SUBCAT`,`ID_CATEGORIA`),
  KEY `FK_subcategoria` (`ID_CATEGORIA`),
  CONSTRAINT `FK_subcategoria` FOREIGN KEY (`ID_CATEGORIA`) REFERENCES `categoria` (`ID_CATEGORIA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





INSERT INTO `bd_restaurante`.`subcategoria` (`ID_SUBCAT`, `ID_CATEGORIA`, `NOMBRE_SUBCAT`) VALUES ('1', '2', 'menus');
INSERT INTO `bd_restaurante`.`subcategoria` (`ID_SUBCAT`, `ID_CATEGORIA`, `NOMBRE_SUBCAT`) VALUES ('2', '2', 'sopa');
INSERT INTO `bd_restaurante`.`subcategoria` (`ID_SUBCAT`, `ID_CATEGORIA`, `NOMBRE_SUBCAT`) VALUES ('3', '2', 'entradas');
INSERT INTO `bd_restaurante`.`subcategoria` (`ID_SUBCAT`, `ID_CATEGORIA`, `NOMBRE_SUBCAT`) VALUES ('4', '2', 'ensaladas');

INSERT INTO `bd_restaurante`.`subcategoria` (`ID_SUBCAT`, `ID_CATEGORIA`, `NOMBRE_SUBCAT`) VALUES ('5', '3', 'gaseosas');
INSERT INTO `bd_restaurante`.`subcategoria` (`ID_SUBCAT`, `ID_CATEGORIA`, `NOMBRE_SUBCAT`) VALUES ('6', '3', 'licores');
INSERT INTO `bd_restaurante`.`subcategoria` (`ID_SUBCAT`, `ID_CATEGORIA`, `NOMBRE_SUBCAT`) VALUES ('7', '3', 'refrescos');
INSERT INTO `bd_restaurante`.`subcategoria` (`ID_SUBCAT`, `ID_CATEGORIA`, `NOMBRE_SUBCAT`) VALUES ('8', '3', 'cerveza');

INSERT INTO `bd_restaurante`.`subcategoria` (`ID_SUBCAT`, `ID_CATEGORIA`, `NOMBRE_SUBCAT`) VALUES ('9', '4', 'torta');
INSERT INTO `bd_restaurante`.`subcategoria` (`ID_SUBCAT`, `ID_CATEGORIA`, `NOMBRE_SUBCAT`) VALUES ('10', '4', 'gelatina');
INSERT INTO `bd_restaurante`.`subcategoria` (`ID_SUBCAT`, `ID_CATEGORIA`, `NOMBRE_SUBCAT`) VALUES ('11', '4', 'mazamorra');
INSERT INTO `bd_restaurante`.`subcategoria` (`ID_SUBCAT`, `ID_CATEGORIA`, `NOMBRE_SUBCAT`) VALUES ('12', '4', 'confiteria');

INSERT INTO `bd_restaurante`.`subcategoria` (`ID_SUBCAT`, `ID_CATEGORIA`, `NOMBRE_SUBCAT`) VALUES ('13', '1', 'carnes fritas');
INSERT INTO `bd_restaurante`.`subcategoria` (`ID_SUBCAT`, `ID_CATEGORIA`, `NOMBRE_SUBCAT`) VALUES ('14', '1', 'hot dog');
INSERT INTO `bd_restaurante`.`subcategoria` (`ID_SUBCAT`, `ID_CATEGORIA`, `NOMBRE_SUBCAT`) VALUES ('15', '1', 'carnes europeas');

CREATE TABLE `producto` (
  `PRODUCTO_ID` int unsigned NOT NULL AUTO_INCREMENT,
  `PRODUCTO_NOMBRE` varchar(100) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `PRECIO_UNITARIO` decimal(8,2) NOT NULL,
  `STOCK` int NOT NULL,
  `ID_CATEGORIA` int unsigned NOT NULL,
  `ID_SUBCAT` int unsigned NOT NULL,
  `foto` varchar(500) NOT NULL,
  `ESTADO` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`PRODUCTO_ID`),
  KEY `FK_producto_cat` (`ID_CATEGORIA`),
  KEY `FK_producto_subcat` (`ID_SUBCAT`,`ID_CATEGORIA`),
  CONSTRAINT `FK_producto_cat` FOREIGN KEY (`ID_CATEGORIA`) REFERENCES `categoria` (`ID_CATEGORIA`),
  CONSTRAINT `FK_producto_subcat` FOREIGN KEY (`ID_SUBCAT`, `ID_CATEGORIA`) REFERENCES `subcategoria` (`ID_SUBCAT`, `ID_CATEGORIA`)
) 

CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(150) NOT NULL,
  `estado` int DEFAULT '1',
  PRIMARY KEY (`id`)
)
INSERT INTO `bd_restaurante`.`usuarios` (`nombre_completo`, `correo`, `usuario`, `contrasena`, `estado`) VALUES ('admin', 'admin@gmail.com', 'admin', '123', '1');


/*SCRIPB*/

select s.ID_SUBCAT,c.ID_CATEGORIA,s.NOMBRE_SUBCAT,c.NOMBRE_CATEGORIA from subcategoria s

INNER JOIN categoria c ON s.ID_CATEGORIA = c.ID_CATEGORIA order by c.NOMBRE_CATEGORIA asc;

select s.ID_SUBCAT,c.ID_CATEGORIA,s.NOMBRE_SUBCAT,c.NOMBRE_CATEGORIA from subcategoria s

INNER JOIN categoria c ON s.ID_CATEGORIA = c.ID_CATEGORIA where c.NOMBRE_CATEGORIA LIKE '%carne%' or c.NOMBRE_CATEGORIA LIKE '%lacteos%' 
order by c.NOMBRE_CATEGORIA asc;
