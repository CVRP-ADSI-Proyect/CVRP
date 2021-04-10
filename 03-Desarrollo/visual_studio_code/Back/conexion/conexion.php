<?php 

$localhost = "localhost";
$database = "cvrp";
$user = "root";
$password = "";

try {       
        $link =new PDO("mysql:host={$localhost};dbname={$database}",$user,$password);
        //return var_dump($link);
        /* return $link; */

        $link -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        /* echo "Conectado a : ".$database." correctamente";  */   
    }catch (PDOException $error){
        echo $error ->getMessage(); 
    }
    //$obj = new Conexiondb();
    //$obj -> conectar();

?>