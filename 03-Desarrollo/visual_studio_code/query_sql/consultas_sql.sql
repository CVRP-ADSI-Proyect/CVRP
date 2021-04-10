Use CVRP;
/* Listar en orden alfabético los usuarios registrados (nombres, apellidos) y el tipo de documento */
SELECT DescripcionTD,Documento, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido 
FROM tbl_usuario a
inner join tbl_tipodocumento b ON a.Pk_idTipoDocumento = b.idTipoDocumento
order by primerNombre asc;

/* Listar en orden alfabético los usuarios registrados con el tipo de documento diferente de 'CC' */
SELECT DescripcionTD,Documento, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido 
FROM tbl_usuario a
inner join tbl_tipodocumento b ON a.Pk_idTipoDocumento = b.idTipoDocumento
where siglasTD <> 'CC'
order by primerNombre asc;

/* Cantidad de usuarios registrados */
select count(1) UsuariosRegistrados from tbl_usuario;

/* Listar en orden alfabético los usuarios con rol "administrador" con todos sus datos */
SELECT DescripcionRol,siglasTD,Documento, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Email, FechaNacimiento, Celular, Direccion, Contraseña, Imagen
FROM tbl_usuario a
inner join tbl_tipodocumento b ON a.Pk_idTipoDocumento = b.idTipoDocumento
inner join tbl_rol c ON a.Fk_idRol = c.idRol
where descripcionRol = 'Administrador'
order by primerNombre asc;

/* Reporte de ventas por día */
select count(FechaFactura) Cantidad, FechaFactura, sum(Total) TotalVentaDia
from tbl_factura a
group by FechaFactura
order by FechaFactura desc;

/* Reporte de ventas por semana */
select count(FechaFactura) CantidadVentas, week(FechaFactura) Semana, FechaFactura, sum(Total) TotalVentaSemana
from tbl_factura a
group by week(FechaFactura)
order by 2 desc;

/* Reporte de ventas por mes */
select count(FechaFactura) CantidadVentas, month(FechaFactura) Mes, FechaFactura, sum(Total) TotalVentaSemana
from tbl_factura a
group by month(FechaFactura)
order by 2 desc;

/* Listar en orden alfabético los usuarios, la compra que realizó, el método de pago utilizado y el valor de la compra */
select b.PrimerNombre,b.SegundoNombre,
b.PrimerApellido,b.SegundoApellido, b.Documento, c.NombreProducto, d.DescripcionMetodoPago, Total
from tbl_factura a
inner join tbl_usuario b ON a.Pk_Pk_Idtipodocumento = b.Pk_Idtipodocumento and a.Pk_documento = b.documento
inner join tbl_producto c ON a.fk_idproducto = c.idproducto
inner join tbl_metodopago d ON a.fk_idmetodopago = d.idmetodopago
order by 1 asc;

/* Listar en orden alfabético todos los productos, la cantidad existente y la categoría a la que pertenece el producto (inventario) */
select b.NombreCategoria,
IdProducto, NombreProducto, Cantidad, Estado, Descripcion, Valor, Imagen, Disponible 
from tbl_producto a
inner join tbl_categoria b ON a.Fk_idcategoria = b.idcategoria;

/* Cantidad total de productos registrados */
select count(1) from tbl_producto;

/* Listar en orden alfabético todas las categorías de productos */
Select *
From tbl_categoria
order by nombreCategoria asc; 

/* Cantidad de categorías */
Select count(1) CantidadCategorias 
From tbl_categoria;

/* Nombres y apellidos, documento de identidad del cliente que realizó la compra de mayor valor */
select b.PrimerNombre,b.SegundoNombre,
b.PrimerApellido,b.SegundoApellido
, Documento, Total
from tbl_factura a
inner join tbl_usuario b ON a.Pk_Pk_Idtipodocumento = b.Pk_Idtipodocumento and a.Pk_documento = b.documento
where total in (select Max(total) from tbl_factura);

/* Nombres y apellidos, documento de identidad del cliente que realizó la compra de menor valor */
select b.PrimerNombre,b.SegundoNombre,
b.PrimerApellido,b.SegundoApellido
, Documento, Total
from tbl_factura a
inner join tbl_usuario b ON a.Pk_Pk_Idtipodocumento = b.Pk_Idtipodocumento and a.Pk_documento = b.documento
where total in (select Min(total) from tbl_factura);

/* Ordenar ventas por fecha (Desde la más actual a la más antigua) */
select FechaFactura, sum(Total) TotalVentaDia
from tbl_factura a
group by FechaFactura
order by FechaFactura desc;

/* Ordenar ventas por fecha (Desde la más antigua a la actual) */
select FechaFactura, sum(Total) TotalVentaDia
from tbl_factura a
group by FechaFactura
order by FechaFactura asc;

/*Consulta factura cliente con todos los campos requeridos en una factura de acuerdo al modelo de negocio (ordenadas ASC) */
select b.PrimerNombre,b.SegundoNombre,
b.PrimerApellido,b.SegundoApellido, e.SiglasTD TipoDocumento, b.Documento, c.NombreProducto, d.DescripcionMetodoPago,Subtotal, Iva, Total
from tbl_factura a
inner join tbl_usuario b ON a.Pk_Pk_Idtipodocumento = b.Pk_Idtipodocumento and a.Pk_documento = b.documento
inner join tbl_producto c ON a.fk_idproducto = c.idproducto
inner join tbl_metodopago d ON a.fk_idmetodopago = d.idmetodopago
inner join tbl_tipodocumento e ON b.Pk_idtipodocumento = e.idtipodocumento
order by 1 asc;

/*Consulta factura cliente con todos los campos requeridos en una factura de acuerdo al modelo de negocio (ordenadas DES) */
select b.PrimerNombre,b.SegundoNombre,
b.PrimerApellido,b.SegundoApellido, e.SiglasTD TipoDocumento, b.Documento, c.NombreProducto, d.DescripcionMetodoPago,Subtotal, Iva, Total
from tbl_factura a
inner join tbl_usuario b ON a.Pk_Pk_Idtipodocumento = b.Pk_Idtipodocumento and a.Pk_documento = b.documento
inner join tbl_producto c ON a.fk_idproducto = c.idproducto
inner join tbl_metodopago d ON a.fk_idmetodopago = d.idmetodopago
inner join tbl_tipodocumento e ON b.Pk_idtipodocumento = e.idtipodocumento
order by 1 desc;