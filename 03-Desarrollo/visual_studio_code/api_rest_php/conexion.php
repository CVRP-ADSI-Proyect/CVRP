<?php 

class Database{

    public function getConnection(){
    $localhost = "localhost";
    $database = "cvrp";
    $user = "root";
    $password = "";

    $link =new PDO("mysql:host=$localhost;dbname=$database",$user,$password);
    return $link;
    }      
}
?>