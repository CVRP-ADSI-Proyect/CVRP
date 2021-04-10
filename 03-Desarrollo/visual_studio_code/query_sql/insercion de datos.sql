# Insert tabla tbl_tipodocumento;
insert into tbl_tipodocumento(idTipoDocumento,siglasTD,descripcionTD) 
values  (1,'CC','CEDULA DE CUIDADANIA'),
		('2','PS','PASAPORTE'),
        (3,'CE','CEDULA DE EXTRANJERIA');

SELECT * FROM tbl_tipodocumento;

# Insert tabla tbl_rol;
insert into tbl_rol(idRol,descripcionRol)
values  ('1','Administrador'),
		('2','Cliente'),
		('3','Vendedor');
SELECT * FROM tbl_categoria;

# Insert tabla tbl_categoria;        
insert into tbl_categoria(idCategoria,nombreCategoria)
values	('1','Herramientas'),
		('2','Computadores'),
		('3','Consolas'),
		('4','Joyería'),
		('5','Electrodomésticos');
SELECT * FROM tbl_categoria;

# Insert tabla tbl_metodopago;
insert into tbl_metodopago(idMetodoPago,descripcionMetodoPago) 
values	(1,'PSE'),
		(2,'paypal'),
		(3,'consignacion a cuenta'),
		(4,'contraentrega'),
		(5,'efecty'),
        (6,'Pago en Tienda');
SELECT * FROM tbl_metodopago;

# Insert tabla tbl_usuario;
insert into tbl_usuario(documento,primerNombre, segundoNombre, primerApellido,segundoApellido,email,fechaNacimiento,celular,direccion,contraseña,imagen,Pk_idTipoDocumento,Fk_idRol)
values	(621484317, 'Alwin', null, 'Forcer', null, 'aventum0@arstechnica.com', '1960-09-06', 3111543298, '1876 Algoma Circle', '0u4kxmmFK69L', 'C:/Users/Imágenes/prueba.png', 1, 3),
		(810708365, 'Garv', 'Sprulls', 'Cowitz', 'Goggins', 'ggoggins1@reference.com', '1971-08-07', 3140718671, '36 Prairie Rose Plaza', 'zPhytLg11', 'C:/Users/Imágenes/prueba.png', 2, 3),
		(423927093, 'Charisse', 'Stollwerk', 'Seaward', 'Wigginton', 'cwigginton2@vistaprint.com', '1979-12-19', 3117879235, '782 Melby Parkway', 'PwiJSixPduY', 'C:/Users/Imágenes/prueba.png', 3, 3),
		(73892614, 'Stace', null, 'Anthonsen', null, 'scrowth3@boston.com', '1976-08-12', 3177937611, '206 Warrior Court', 'Govyiof6v', 'C:/Users/Imágenes/prueba.png', 3, 2),
		(805678615, 'Vivian', 'Weatherby', 'Elsmere', 'Hanfrey', 'vhanfrey4@bbb.org', '1984-08-06', 3179936057, '594 Daystar Park', 'Wf0XzXGjRF5', 'C:/Users/Imágenes/prueba.png', 2, 1),
		(908123896, 'Giffard', 'Creeber', 'MacDunlevy', 'Isac', 'gisac5@alexa.com', '1985-07-19', 3142160458, '4 Merry Center', 'YZlcmoileoO7', 'C:/Users/Imágenes/prueba.png', 1, 2),
		(517331078, 'Holly', 'Bowker', 'Duddle', 'Maseres', 'hmaseres6@istockphoto.com', '1987-10-03', 3135747939, '87009 Iowa Alley', 'Q9kWKp', 'C:/Users/Imágenes/prueba.png', 2, 3),
		(417950337, 'Peggie', 'Bertomieu', 'Batters', 'Patinkin', 'ppatinkin7@independent.co.uk', '1970-06-07', 3196153304, '28127 Merrick Park', 'UKdeMGD', 'C:/Users/Imágenes/prueba.png', 1, 3),
		(430444439, 'Giffie', 'Padberry', 'Rosoman', 'Nuzzi', 'gnuzzi8@usnews.com', '1973-06-11', 3133600628, '61 Dwight Lane', 'HcwBBCFjcL', 'C:/Users/Imágenes/prueba.png', 2, 3),
		(935090537, 'Jori', 'Fosse', 'Swett', 'Bycraft', 'jbycraft9@list-manage.com', '1972-01-16', 3064293755, '28135 Darwin Circle', 'kXlLy6dG', 'C:/Users/Imágenes/prueba.png', 3, 2),
		(75244131, 'Neils', 'Awde', 'Mattecot', 'Blakes', 'nblakesa@vinaora.com', '1965-01-05', 3184133765, '8473 Ruskin Parkway', '0poJOs5I5l', 'C:/Users/Imágenes/prueba.png', 3, 3),
		(288910704, 'Leah', 'Jeavon', 'Semarke', 'Short', 'lshortb@i2i.jp', '1977-07-07', 3089235399, '23967 Jenifer Place', 'CNaj2ZR4', 'C:/Users/Imágenes/prueba.png', 3, 2),
		(712615156, 'Rosa', 'Flaverty', 'Howroyd', 'Kuhwald', 'rkuhwaldc@thetimes.co.uk', '1973-10-03', 3104026252, '53 Kim Plaza', 'gKQivr', 'C:/Users/Imágenes/prueba.png', 2, 2),
		(874271052, 'Dwight', null, 'Brackenridge', null, 'dmaddicksd@technorati.com', '1987-12-14', 3189967930, '94 Anzinger Junction', 'nFdbsZb0BL9', 'C:/Users/Imágenes/prueba.png', 1, 3),
		(675407052, 'Amelita', 'Omrod', 'Sharkey', 'Thoms', 'athomse@google.com', '1998-09-30', 3088822463, '32 Dryden Parkway', 'aaqcpmP4EL', 'C:/Users/Imágenes/prueba.png', 3, 2),
		(919293315, 'Guinevere', 'Kyberd', 'McKee', 'De Vaan', 'gdevaanf@reference.com', '1993-08-24', 3018964512, '9 Karstens Lane', 'EdkeY2y', 'C:/Users/Imágenes/prueba.png', 2, 2),
		(239568459, 'Any', 'Elmar', 'Sangar', 'Astlett', 'aastlettg@opera.com', '1977-11-18', 3104848144, '957 Vera Hill', 'VyOzC70Jy', 'C:/Users/Imágenes/prueba.png', 3, 3),
		(956242141, 'Carley', null, 'Sewell', null, 'ccluelyh@theglobeandmail.com', '1984-11-12', 3079391191, '5733 Mcguire Park', 'sZ223QMryA', 'C:/Users/Imágenes/prueba.png', 1, 1),
		(720763037, 'Liam', 'Heitz', 'Lindermann', 'Burditt', 'lburditti@myspace.com', '1969-11-17', 3140954640, '01997 Eggendart Lane', 'fLgzT4I', 'C:/Users/Imágenes/prueba.png', 1, 2),
		(84786246, 'Selena', 'Cristea', 'Cartlidge', 'Moff', 'smoffj@example.com', '1967-06-11', 3114003973, '8 Sachtjen Point', 'j0aXB5M0k', 'C:/Users/Imágenes/prueba.png', 1, 2),
		(860568210, 'Flore', 'Trythall', 'Calverley', 'Walcher', 'fwalcherk@privacy.gov.au', '1986-09-12', 3177365278, '37 Merchant Park', 's85cZqNY', 'C:/Users/Imágenes/prueba.png', 3, 3),
		(391494365, 'Wilt', 'Crampsy', 'Calendar', 'Binion', 'wbinionl@yolasite.com', '1965-05-06', 3108641757, '09586 Grasskamp Center', 'L9cpKUvSfLdr', 'C:/Users/Imágenes/prueba.png', 1, 3),
		(427902088, 'Robbyn', 'Zambon', 'Threadgall', 'Juliff', 'rjuliffm@prweb.com', '1978-02-19', 3008568794, '9 Everett Lane', 'MccvIks', 'C:/Users/Imágenes/prueba.png', 1, 1),
		(152035120, 'Sharleen', 'Costellow', 'Leap', 'Buxey', 'sbuxeyn@wufoo.com', '1976-02-29', 3121002921, '596 Tennessee Pass', 'STT1e5P8vKA', 'C:/Users/Imágenes/prueba.png', 3, 2),
		(406436899, 'Dannie', 'Toope', 'Pethrick', 'Whopples', 'dwhoppleso@topsy.com', '1963-10-08', 3075856288, '318 Towne Place', '4tt2d3', 'C:/Users/Imágenes/prueba.png', 2, 2);
SELECT * FROM tbl_usuario;

# Insert tabla tbl_producto;
insert into tbl_producto (idProducto,nombreProducto,cantidad,estado,descripcion,valor,imagen,disponible,Fk_idCategoria)
values	(1, 'Blueberries', 2, 'Usado', 'in imperdiet et commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet', 3025251, 'C:/Users/Imágenes/prueba.png', 1, 3),
		(2, 'Pastry - Banana Tea Loaf', 2, 'Para Partes', 'ligula nec sem duis aliquam convallis nunc proin at turpis a pede', 2652822, 'C:/Users/Imágenes/prueba.png', 1, 3),
		(3, 'Chickhen - Chicken Phyllo', 3, 'Para Partes', 'imperdiet et commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet', 3480311, 'C:/Users/Imágenes/prueba.png', 1, 5),
		(4, 'Wine - Tribal Sauvignon', 1, 'Bueno', 'sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus', 3383249, 'C:/Users/Imágenes/prueba.png', 0, 4),
		(5, 'Tea - Black Currant', 4, 'Para Partes', 'vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci eget', 1456327, 'C:/Users/Imágenes/prueba.png', 0, 2),
		(6, 'Nut - Almond, Blanched, Ground', 3, 'Bueno', 'augue quam sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum', 3209544, 'C:/Users/Imágenes/prueba.png', 0, 4),
		(7, 'Tofu - Soft', 3, 'Para Partes', 'aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam', 1452169, 'C:/Users/Imágenes/prueba.png', 0, 1),
		(8, 'Table Cloth 53x53 White', 1, 'Para Partes', 'metus aenean fermentum donec ut mauris eget massa tempor convallis nulla neque libero convallis eget eleifend', 4721884, 'C:/Users/Imágenes/prueba.png', 1, 2),
		(9, 'Crab - Soft Shell', 1, 'Para Partes', 'a ipsum integer a nibh in quis justo maecenas rhoncus aliquam lacus morbi quis tortor id', 681584, 'C:/Users/Imágenes/prueba.png', 1, 5),
		(10, 'Kumquat', 1, 'Bueno', 'nam congue risus semper porta volutpat quam pede lobortis ligula sit amet eleifend pede libero quis orci nullam molestie', 4150321, 'C:/Users/Imágenes/prueba.png', 1, 2),
		(11, 'Wine - Cotes Du Rhone', 2, 'Para Partes', 'proin at turpis a pede posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut', 488080, 'C:/Users/Imágenes/prueba.png', 0, 2),
		(12, 'Salmon - Whole, 4 - 6 Pounds', 5, 'Usado', 'luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum', 4370405, 'C:/Users/Imágenes/prueba.png', 1, 3),
		(13, 'Pepper - Roasted Red', 5, 'Para Partes', 'nam ultrices libero non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla elit ac nulla sed vel enim sit', 3606659, 'C:/Users/Imágenes/prueba.png', 1, 5),
		(14, 'Water - Perrier', 4, 'Para Partes', 'pharetra magna ac consequat metus sapien ut nunc vestibulum ante ipsum primis', 4639787, 'C:/Users/Imágenes/prueba.png', 0, 4),
		(15, 'Cheese - Brick With Pepper', 2, 'Para Partes', 'turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh in quis justo maecenas rhoncus', 4963889, 'C:/Users/Imágenes/prueba.png', 0, 3),
		(16, 'Couscous', 1, 'Usado', 'duis bibendum morbi non quam nec dui luctus rutrum nulla tellus in sagittis', 2445775, 'C:/Users/Imágenes/prueba.png', 0, 1),
		(17, 'Goldschalger', 5, 'Para Partes', 'primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi', 4923755, 'C:/Users/Imágenes/prueba.png', 1, 4),
		(18, 'Water - Mineral, Carbonated', 4, 'Usado', 'nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque', 4791641, 'C:/Users/Imágenes/prueba.png', 1, 3),
		(19, 'Peas - Pigeon, Dry', 5, 'Para Partes', 'mi nulla ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae', 1943312, 'C:/Users/Imágenes/prueba.png', 0, 3),
		(20, 'Flax Seed', 2, 'Para Partes', 'in imperdiet et commodo vulputate justo in blandit ultrices enim', 3743803, 'C:/Users/Imágenes/prueba.png', 1, 1),
		(21, 'Table Cloth 90x90 White', 3, 'Para Partes', 'ut erat id mauris vulputate elementum nullam varius nulla facilisi cras non velit nec nisi vulputate nonummy', 3186523, 'C:/Users/Imágenes/prueba.png', 0, 3),
		(22, 'Soup - Campbells Chicken', 3, 'Usado', 'habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum', 3121438, 'C:/Users/Imágenes/prueba.png', 1, 4),
		(23, 'Toamtoes 6x7 Select', 4, 'Usado', 'tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus aliquet at feugiat non pretium', 680442, 'C:/Users/Imágenes/prueba.png', 0, 1),
		(24, 'Carbonated Water - Peach', 2, 'Usado', 'nec sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy', 1697051, 'C:/Users/Imágenes/prueba.png', 1, 2),
		(25, 'Soup - Tomato Mush. Florentine', 4, 'Para Partes', 'duis at velit eu est congue elementum in hac habitasse platea', 4330188, 'C:/Users/Imágenes/prueba.png', 1, 3);
SELECT * FROM tbl_producto;

# Insert tabla tbl_estadocuentausuario;
insert into tbl_estadocuentausuario(estadoCompra,Pk_documento,Pk_Pk_idTipoDocumento,Pk_idProducto)
values	('Recibido','427902088','1','1'),
		('Recibido','956242141','1','2'),
		('Vendido','805678615','2','3'),
		('Vendido','720763037','1','4'),
		('Recibido','84786246','1','5'),
		('Vendido','908123896','1','6'),
		('Vendido','406436899','2','7'),
		('Falta Pago Cliente','712615156','2','8'),
		('En transito','919293315','2','9'),
		('Vendido','152035120','3','10'),
		('Vendido','288910704','3','11'),
		('Vendido','675407052','3','12'),
		('Vendido','73892614','3','13'),
		('Vendido','935090537','3','14'),
		('Falta Pago Cliente','391494365','1','15'),
		('En transito','417950337','1','16'),
		('Recibido','621484317','1','17'),
		('Falta Pago Cliente','874271052','1','18'),
		('Recibido','430444439','2','19'),
		('Falta Pago Cliente','517331078','2','20'),
		('Vendido','810708365','2','21'),
		('En transito','239568459','3','22'),
		('Falta Pago Cliente','423927093','3','23'),
		('Falta Pago Cliente','75244131','3','24'),
		('Vendido','860568210','3','25');
SELECT * FROM tbl_estadocuentausuario;

# Insert tabla tbl_factura;
insert into tbl_factura(fechaFactura,total,iva,subtotal,Pk_documento,Pk_Pk_idTipoDocumento,Fk_idProducto,Fk_idMetodoPago)
values
('2019-01-16','58368','9319',49049,'427902088','1','1','5'),
('2019-04-27','53897','8605',45292,'956242141','1','2','5'),
('2019-06-23','30171','4817',25354,'805678615','2','3','5'),
('2019-02-19','28107','4487',23620,'720763037','1','4','5'),
('2019-01-31','33582','5361',28221,'84786246','1','5','6'),
('2019-04-27','18126','2894',15232,'908123896','1','6','5'),
('2019-10-18','55758','8902',46856,'406436899','2','7','3'),
('2019-03-18','40399','6450',33949,'712615156','2','8','5'),
('2019-11-06','37029','5912',31117,'919293315','2','9','3'),
('2019-01-11','24306','3880',20426,'152035120','3','10','2'),
('2019-06-22','38542','6153',32389,'288910704','3','11','5'),
('2019-05-08','47070','7515',39555,'675407052','3','12','3'),
('2019-07-09','21421','3420',18001,'73892614','3','13','4'),
('2019-08-15','54629','8722',45907,'935090537','3','14','5'),
('2019-05-12','28382','4531',23851,'391494365','1','15','4'),
('2019-01-20','37689','6017',31672,'417950337','1','16','5'),
('2019-11-09','29540','4716',24824,'621484317','1','17','5'),
('2019-01-07','58771','9383',49388,'874271052','1','18','1'),
('2019-03-06','51448','8214',43234,'430444439','2','19','6'),
('2019-04-07','48672','7771',40901,'517331078','2','20','1'),
('2019-08-31','37844','6042',31802,'810708365','2','21','1'),
('2019-01-12','26164','4177',21987,'239568459','3','22','2'),
('2019-11-07','26498','4230',22268,'423927093','3','23','2'),
('2019-03-19','19573','3125',16448,'75244131','3','24','1'),
('2019-08-19','41884','6687',35197,'860568210','3','25','4');
SELECT * FROM tbl_factura;