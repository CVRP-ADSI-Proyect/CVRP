<?php 
	session_start();
	include_once '../conexion/conexion.php';
	$usuario = $_POST['exampleInputEmail'];
	$contrasena = $_POST['exampleInputPassword'];
	$sentencia = $bd->prepare('select * from tbl_usuario where 
								email = ? and contraseña = ?;');
	$sentencia->execute([$usuario, $contrasena]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	print_r($datos);

	if ($datos === FALSE) {
		header('Location: login.php');
	}elseif($sentencia->rowCount() == 1){
		$_SESSION['email'] = $datos->email;
		header('Location: login.php');
	}
?>