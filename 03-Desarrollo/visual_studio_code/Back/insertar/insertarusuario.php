<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
</head>
<body>
<?php  

	if (!isset($_POST['oculto'])) {
		exit();
	

	requiere_once("../conexion/conexion.php");
	
	$documento = $_POST['exampleDocumento'];
	$primerNombre = $_POST['examplePrimerNombre'];
	$segundoNombre = $_POST['exampleSegundoNombre'];
    $primerApellido = $_POST['examplePrimerApellido'];
    $segundoApellido = $_POST['exampleSegundoApellido'];
    $email = $_POST['exampleInputEmail'];
    $fechaNacimiento = $_POST['exampleFechaDeNacimiento'];	
    $celular = $_POST['exampleCelular'];
	$contraseña = $_POST['exampleInputPassword'];
    $repetirContraseña = $_POST['exampleRepeatPassword'];
    $fotoPerfil = $_POST['examplePerfil'];
	$tipoDoc = $_POST['exampleTipodDoc'];
	$rol = $_POST['exampleRol'];

	$sentencia = $link->prepare("INSERT INTO tbl_usuario(documento,primerNombre, segundoNombre, primerApellido,segundoApellido,email,fechaNacimiento,celular,direccion,contraseña,imagen,Pk_idTipoDocumento,Fk_idRol) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$resultado = $sentencia->execute([$documento,$primerNombre,$segundoNombre,$primerApellido,$segundoApellido,$email,$fechaNacimiento,$contraseña,$fotoPerfil,$tipoDoc,$rol]);

	if ($resultado === TRUE) {
		echo "Insertado correctamente";
		header('Location: index.php');
	}else{
		echo "Error";
	}
	
	}
	
?>

</body>
</html>