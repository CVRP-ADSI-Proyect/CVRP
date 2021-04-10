-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: b9bkwllmn5q6f4qel1sk-mysql.services.clever-cloud.com:3306
-- Generation Time: Oct 06, 2020 at 06:11 PM
-- Server version: 8.0.15-5
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b9bkwllmn5q6f4qel1sk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categoria`
--

CREATE TABLE `tbl_categoria` (
  `idCategoria` int(11) NOT NULL,
  `nombreCategoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_categoria`
--

INSERT INTO `tbl_categoria` (`idCategoria`, `nombreCategoria`) VALUES
(1, 'Herramientas'),
(2, 'Computadores'),
(3, 'Consolas'),
(4, 'Joyería'),
(5, 'Electrodomésticos');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contacto`
--

CREATE TABLE `tbl_contacto` (
  `idsolicitud` int(11) NOT NULL,
  `primernombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `segundonombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `primerapellido` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `segundoapellido` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ctrl_user`
--

CREATE TABLE `tbl_ctrl_user` (
  `id` int(20) DEFAULT NULL,
  `fullname` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `secretpin` int(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_ctrl_user`
--

INSERT INTO `tbl_ctrl_user` (`id`, `fullname`, `username`, `password`, `secretpin`, `created`) VALUES
(1, 'sebastian', 'striana', 'strilo', 1993, '2012-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_estadocuentausuario`
--

CREATE TABLE `tbl_estadocuentausuario` (
  `estadocompra` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pk_documento` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pk_pk_idtipodocumento` int(11) NOT NULL,
  `pk_idproducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_estadocuentausuario`
--

INSERT INTO `tbl_estadocuentausuario` (`estadocompra`, `pk_documento`, `pk_pk_idtipodocumento`, `pk_idproducto`) VALUES
('Vendido', '152035120', 3, 10),
('En transito', '239568459', 3, 22),
('Vendido', '288910704', 3, 11),
('Falta Pago Cliente', '391494365', 1, 15),
('Vendido', '406436899', 2, 7),
('En transito', '417950337', 1, 16),
('Falta Pago Cliente', '423927093', 3, 23),
('Recibido', '427902088', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_factura`
--

CREATE TABLE `tbl_factura` (
  `idfactura` int(11) NOT NULL,
  `fechafactura` datetime NOT NULL,
  `total` float NOT NULL,
  `iva` float NOT NULL,
  `subtotal` float NOT NULL,
  `pk_documento` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pk_pk_idtipodocumento` int(11) NOT NULL,
  `fk_idproducto` int(11) NOT NULL,
  `fk_idmetodopago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_factura`
--

INSERT INTO `tbl_factura` (`idfactura`, `fechafactura`, `total`, `iva`, `subtotal`, `pk_documento`, `pk_pk_idtipodocumento`, `fk_idproducto`, `fk_idmetodopago`) VALUES
(1, '2019-01-16 00:00:00', 58368, 9319, 49049, '427902088', 1, 1, 5),
(2, '2019-04-27 00:00:00', 53897, 8605, 45292, '956242141', 1, 2, 5),
(3, '2019-06-23 00:00:00', 30171, 4817, 25354, '805678615', 2, 3, 5),
(4, '2019-02-19 00:00:00', 28107, 4487, 23620, '720763037', 1, 4, 5),
(5, '2019-01-31 00:00:00', 33582, 5361, 28221, '84786246', 1, 5, 6),
(6, '2019-04-27 00:00:00', 18126, 2894, 15232, '908123896', 1, 6, 5),
(7, '2019-10-18 00:00:00', 55758, 8902, 46856, '406436899', 2, 7, 3),
(8, '2019-03-18 00:00:00', 40399, 6450, 33949, '712615156', 2, 8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logerror`
--

CREATE TABLE `tbl_logerror` (
  `iderror` int(11) NOT NULL,
  `descripcionlog` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fechacontrol` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_metodopago`
--

CREATE TABLE `tbl_metodopago` (
  `idmmetodopago` int(11) NOT NULL,
  `descripcionmetodopago` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_metodopago`
--

INSERT INTO `tbl_metodopago` (`idmmetodopago`, `descripcionmetodopago`) VALUES
(1, 'PSE'),
(2, 'paypal'),
(3, 'consignacion a cuenta'),
(4, 'contraentrega'),
(5, 'efecty'),
(6, 'Pago en Tienda');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_producto`
--

CREATE TABLE `tbl_producto` (
  `idproducto` int(11) NOT NULL,
  `nombreproducto` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `valor` float NOT NULL,
  `imagen` blob NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `fk_idcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_producto`
--

INSERT INTO `tbl_producto` (`idproducto`, `nombreproducto`, `cantidad`, `estado`, `descripcion`, `valor`, `imagen`, `disponible`, `fk_idcategoria`) VALUES
(1, 'Blueberries', 2, 'Usado', 'in imperdiet et commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet', 3025250, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 3),
(2, 'Pastry - Banana Tea Loaf', 2, 'Para Partes', 'ligula nec sem duis aliquam convallis nunc proin at turpis a pede', 2652820, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 3),
(3, 'Chickhen - Chicken Phyllo', 3, 'Para Partes', 'imperdiet et commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet', 3480310, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 5),
(4, 'Wine - Tribal Sauvignon', 1, 'Bueno', 'sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus', 3383250, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 0, 4),
(5, 'Tea - Black Currant', 4, 'Para Partes', 'vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci eget', 1456330, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 0, 2),
(6, 'Nut - Almond, Blanched, Ground', 3, 'Bueno', 'augue quam sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum', 3209540, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 0, 4),
(7, 'Tofu - Soft', 3, 'Para Partes', 'aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam', 1452170, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 0, 1),
(8, 'Table Cloth 53x53 White', 1, 'Para Partes', 'metus aenean fermentum donec ut mauris eget massa tempor convallis nulla neque libero convallis eget eleifend', 4721880, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 2),
(9, 'Crab - Soft Shell', 1, 'Para Partes', 'a ipsum integer a nibh in quis justo maecenas rhoncus aliquam lacus morbi quis tortor id', 681584, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 5),
(10, 'Kumquat', 1, 'Bueno', 'nam congue risus semper porta volutpat quam pede lobortis ligula sit amet eleifend pede libero quis orci nullam molestie', 4150320, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 2),
(11, 'Wine - Cotes Du Rhone', 2, 'Para Partes', 'proin at turpis a pede posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut', 488080, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 0, 2),
(12, 'Salmon - Whole, 4 - 6 Pounds', 5, 'Usado', 'luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum', 4370400, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 3),
(13, 'Pepper - Roasted Red', 5, 'Para Partes', 'nam ultrices libero non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla elit ac nulla sed vel enim sit', 3606660, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 5),
(14, 'Water - Perrier', 4, 'Para Partes', 'pharetra magna ac consequat metus sapien ut nunc vestibulum ante ipsum primis', 4639790, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 0, 4),
(15, 'Cheese - Brick With Pepper', 2, 'Para Partes', 'turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh in quis justo maecenas rhoncus', 4963890, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 0, 3),
(16, 'Couscous', 1, 'Usado', 'duis bibendum morbi non quam nec dui luctus rutrum nulla tellus in sagittis', 2445780, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 0, 1),
(17, 'Goldschalger', 5, 'Para Partes', 'primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi', 4923760, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 4),
(18, 'Water - Mineral, Carbonated', 4, 'Usado', 'nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque', 4791640, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 3),
(19, 'Peas - Pigeon, Dry', 5, 'Para Partes', 'mi nulla ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae', 1943310, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 0, 3),
(20, 'Flax Seed', 2, 'Para Partes', 'in imperdiet et commodo vulputate justo in blandit ultrices enim', 3743800, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 1),
(21, 'Table Cloth 90x90 White', 3, 'Para Partes', 'ut erat id mauris vulputate elementum nullam varius nulla facilisi cras non velit nec nisi vulputate nonummy', 3186520, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 0, 3),
(22, 'Soup - Campbells Chicken', 3, 'Usado', 'habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum', 3121440, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 4),
(23, 'Toamtoes 6x7 Select', 4, 'Usado', 'tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus aliquet at feugiat non pretium', 680442, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 0, 1),
(24, 'Carbonated Water - Peach', 2, 'Usado', 'nec sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy', 1697050, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 2),
(25, 'Soup - Tomato Mush. Florentine', 4, 'Para Partes', 'duis at velit eu est congue elementum in hac habitasse platea', 4330190, 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rol`
--

CREATE TABLE `tbl_rol` (
  `idrol` int(11) NOT NULL,
  `descripcionrol` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_rol`
--

INSERT INTO `tbl_rol` (`idrol`, `descripcionrol`) VALUES
(1, 'Administrador'),
(2, 'Cliente'),
(3, 'Vendedor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_servidorcorreo`
--

CREATE TABLE `tbl_servidorcorreo` (
  `idservidorcorreo` int(11) NOT NULL,
  `nombreservidorcorreo` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tipocorreo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipodocumento`
--

CREATE TABLE `tbl_tipodocumento` (
  `idtipodocumento` int(11) NOT NULL,
  `siglastd` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `descripciontd` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_tipodocumento`
--

INSERT INTO `tbl_tipodocumento` (`idtipodocumento`, `siglastd`, `descripciontd`) VALUES
(1, 'CC', 'CEDULA DE CUIDADANIA'),
(2, 'PS', 'PASAPORTE'),
(3, 'CE', 'CEDULA DE EXTRANJERIA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `documento` varchar(30) NOT NULL,
  `primernombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `segundonombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `primerapellido` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `segundoapellido` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `celular` varchar(50) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `contraseña` varchar(40) NOT NULL,
  `imagen` blob,
  `pk_idtipodocumento` int(11) NOT NULL,
  `fk_idrol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`documento`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `email`, `fechanacimiento`, `celular`, `direccion`, `contraseña`, `imagen`, `pk_idtipodocumento`, `fk_idrol`) VALUES
('391494365', 'Wilt', 'Crampsy', 'Calendar', 'Binion', 'wbinionl@yolasite.com', '1965-05-06', '3108641757', '09586 Grasskamp Center', 'L9cpKUvSfLdr', 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 3),
('417950337', 'Peggie', 'Bertomieu', 'Batters', 'Patinkin', 'ppatinkin7@independent.co.uk', '1970-06-07', '3196153304', '28127 Merrick Park', 'UKdeMGD', 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 3),
('427902088', 'Robbyn', 'Zambon', 'Threadgall', 'Juliff', 'rjuliffm@prweb.com', '1978-02-19', '3008568794', '9 Everett Lane', 'MccvIks', 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 1),
('621484317', 'Alwin', NULL, 'Forcer', NULL, 'aventum0@arstechnica.com', '1960-09-06', '3111543298', '1876 Algoma Circle', '0u4kxmmFK69L', 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 3),
('720763037', 'Liam', 'Heitz', 'Lindermann', 'Burditt', 'lburditti@myspace.com', '1969-11-17', '3140954640', '01997 Eggendart Lane', 'fLgzT4I', 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 2),
('84786246', 'Selena', 'Cristea', 'Cartlidge', 'Moff', 'smoffj@example.com', '1967-06-11', '3114003973', '8 Sachtjen Point', 'j0aXB5M0k', 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 2),
('874271052', 'Dwight', NULL, 'Brackenridge', NULL, 'dmaddicksd@technorati.com', '1987-12-14', '3189967930', '94 Anzinger Junction', 'nFdbsZb0BL9', 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 3),
('908123896', 'Giffard', 'Creeber', 'MacDunlevy', 'Isac', 'gisac5@alexa.com', '1985-07-19', '3142160458', '4 Merry Center', 'YZlcmoileoO7', 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 1, 2),
('935090537', 'Jori', 'Fosse', 'Swett', 'Bycraft', 'jbycraft9@list-manage.com', '1972-01-16', '3064293755', '28135 Darwin Circle', 'kXlLy6dG', 0x433a2f55736572732f496dc3a167656e65732f7072756562612e706e67, 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indexes for table `tbl_contacto`
--
ALTER TABLE `tbl_contacto`
  ADD PRIMARY KEY (`idsolicitud`);

--
-- Indexes for table `tbl_estadocuentausuario`
--
ALTER TABLE `tbl_estadocuentausuario`
  ADD PRIMARY KEY (`pk_documento`,`pk_pk_idtipodocumento`,`pk_idproducto`),
  ADD KEY `Pk_Pk_idTipoDocumento` (`pk_pk_idtipodocumento`,`pk_documento`),
  ADD KEY `Pk_idProducto` (`pk_idproducto`);

--
-- Indexes for table `tbl_factura`
--
ALTER TABLE `tbl_factura`
  ADD PRIMARY KEY (`idfactura`,`pk_documento`,`pk_pk_idtipodocumento`),
  ADD KEY `Pk_Pk_idTipoDocumento` (`pk_pk_idtipodocumento`,`pk_documento`),
  ADD KEY `Fk_idProducto` (`fk_idproducto`),
  ADD KEY `Fk_idMetodoPago` (`fk_idmetodopago`);

--
-- Indexes for table `tbl_logerror`
--
ALTER TABLE `tbl_logerror`
  ADD PRIMARY KEY (`iderror`);

--
-- Indexes for table `tbl_metodopago`
--
ALTER TABLE `tbl_metodopago`
  ADD PRIMARY KEY (`idmmetodopago`);

--
-- Indexes for table `tbl_producto`
--
ALTER TABLE `tbl_producto`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `Fk_idCategoria` (`fk_idcategoria`);

--
-- Indexes for table `tbl_rol`
--
ALTER TABLE `tbl_rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indexes for table `tbl_servidorcorreo`
--
ALTER TABLE `tbl_servidorcorreo`
  ADD PRIMARY KEY (`idservidorcorreo`);

--
-- Indexes for table `tbl_tipodocumento`
--
ALTER TABLE `tbl_tipodocumento`
  ADD PRIMARY KEY (`idtipodocumento`);

--
-- Indexes for table `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`pk_idtipodocumento`,`documento`),
  ADD KEY `Fk_idRol` (`fk_idrol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_contacto`
--
ALTER TABLE `tbl_contacto`
  MODIFY `idsolicitud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_factura`
--
ALTER TABLE `tbl_factura`
  MODIFY `idfactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_logerror`
--
ALTER TABLE `tbl_logerror`
  MODIFY `iderror` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_metodopago`
--
ALTER TABLE `tbl_metodopago`
  MODIFY `idmmetodopago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_producto`
--
ALTER TABLE `tbl_producto`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_rol`
--
ALTER TABLE `tbl_rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_servidorcorreo`
--
ALTER TABLE `tbl_servidorcorreo`
  MODIFY `idservidorcorreo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_estadocuentausuario`
--
ALTER TABLE `tbl_estadocuentausuario`
  ADD CONSTRAINT `tbl_estadocuentausuario_ibfk_1` FOREIGN KEY (`pk_pk_idtipodocumento`,`pk_documento`) REFERENCES `tbl_usuario` (`pk_idtipodocumento`, `documento`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_estadocuentausuario_ibfk_2` FOREIGN KEY (`pk_idproducto`) REFERENCES `tbl_producto` (`idproducto`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_factura`
--
ALTER TABLE `tbl_factura`
  ADD CONSTRAINT `tbl_factura_ibfk_1` FOREIGN KEY (`pk_pk_idtipodocumento`,`pk_documento`) REFERENCES `tbl_usuario` (`pk_idtipodocumento`, `documento`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_factura_ibfk_2` FOREIGN KEY (`fk_idproducto`) REFERENCES `tbl_producto` (`idproducto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_factura_ibfk_3` FOREIGN KEY (`fk_idmetodopago`) REFERENCES `tbl_metodopago` (`idmmetodopago`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_producto`
--
ALTER TABLE `tbl_producto`
  ADD CONSTRAINT `tbl_producto_ibfk_1` FOREIGN KEY (`fk_idcategoria`) REFERENCES `tbl_categoria` (`idCategoria`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD CONSTRAINT `tbl_usuario_ibfk_1` FOREIGN KEY (`pk_idtipodocumento`) REFERENCES `tbl_tipodocumento` (`idtipodocumento`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_usuario_ibfk_2` FOREIGN KEY (`fk_idrol`) REFERENCES `tbl_rol` (`idrol`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
