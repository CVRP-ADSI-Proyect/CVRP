drop database cvrp;
create database cvrp;
use cvrp;

/*Se crea la tabla tipo documento*/
create table tbl_tipodocumento(
idTipoDocumento int not null primary key,
siglasTD varchar(20) not null,
descripcionTD varchar (100) not null
);

/*Se crea la tabla perfil*/
create table tbl_rol(
idRol int not null auto_increment primary key,
descripcionRol varchar(100) not null
);

/*Se crea la tabla categoria*/
create table tbl_categoria(
idCategoria int not null auto_increment primary key,
nombreCategoria varchar(100) not null
);

/*Se crea la tabla metodo de pago*/
create table tbl_metodopago(
idMetodoPago int not null auto_increment primary key,
descripcionMetodoPago varchar(100) not null
);

/*Tablas Debiles*/

/*Se crea la tabla usuario*/
 create table tbl_usuario(
 documento varchar(30) not null,
 primerNombre varchar (30) not null,
 segundoNombre varchar (30),
 primerApellido varchar (30) not null,
 segundoApellido varchar (30),
 email varchar (100) not null,
 fechaNacimiento  date not null,
 celular varchar(50) not null,
 direccion varchar (200) not null,
 contraseña varchar (40) not null,
 imagen blob,
 Pk_idTipoDocumento int not null,
 Fk_idRol int not null,
 Foreign key (Pk_idTipoDocumento) references tbl_tipodocumento(idTipoDocumento) on update cascade,
 Foreign key (Fk_idRol) references tbl_Rol(idRol) on update cascade,
 primary key (Pk_idTipoDocumento,documento)
 );

/*Se crea la tabla producto*/
create table tbl_producto (
idProducto int not null auto_increment primary key,
nombreProducto varchar(200) not null,
cantidad int not null,
estado varchar(100) not null, #bueno,usado,para partes
descripcion varchar(1000) not null,
valor float not null,
imagen blob not null,
disponible bool not null,
Fk_idCategoria int not null,
Foreign key (Fk_idCategoria) references tbl_categoria(idCategoria) on update cascade
);

/*Se crea  la tabla estado cuenta usuario*/
create table tbl_estadocuentausuario (
estadoCompra varchar(200) not null,
Pk_documento varchar(30) not null,
Pk_Pk_idTipoDocumento int not null,
Pk_idProducto int not null,
Foreign key (Pk_Pk_idTipoDocumento,Pk_documento) references tbl_usuario(Pk_idTipoDocumento,documento) on update cascade,
Foreign key (Pk_idProducto) references tbl_producto (idProducto) on update cascade,
primary key (Pk_documento,Pk_Pk_idTipoDocumento,Pk_idProducto)
);


/*Se crea la tabla factura*/
create table tbl_factura(
idFactura int not null auto_increment,
fechaFactura datetime not null,
total float not null,
iva float not null,
subtotal float not null,
Pk_documento varchar(30) not null,
Pk_Pk_idTipoDocumento int not null,
Fk_idProducto int not null,
Fk_idMetodoPago int not null,
Foreign key (Pk_Pk_idTipoDocumento,Pk_documento) references tbl_usuario(Pk_idTipoDocumento,documento) on update cascade,
Foreign key (Fk_idProducto) references tbl_producto (idProducto) on update cascade,
Foreign key (Fk_idMetodoPago) references tbl_metodopago(idMetodoPago) on update cascade,
primary key (idFactura,Pk_documento,Pk_Pk_idTipoDocumento)
);

create table tbl_contacto(
idSolicitud int auto_increment not null primary key,
primerNombre varchar(100) not null,
segundoNombre varchar(100),
primerApellido varchar(100) not null,
segundoApellido varchar(100),
email varchar(200) not null,
celular varchar(50) not null,
mensaje text not null
);

-- Tablas logerror y servidorcorreo
/*Se crea la tabla logerror*/
create table tbl_logerror(  
idError int not null auto_increment primary key,
descripcionLog varchar(255) not null,
fechaControl datetime not null
);

/*Se crea la tabla sevidor correo*/
create table tbl_servidorcorreo(
idServidorCorreo int not null auto_increment primary key,
nombreServidorCorreo varchar(200) not null,
tipoCorreo varchar(255) not null
 );
