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
        echo "Conectado a la base de datos: ",$database," correctamente";    
    }catch (PDOException $e){
        echo $e ->getMessage(); 
    }
    //$obj = new Conexiondb();
    //$obj -> conectar();

?>