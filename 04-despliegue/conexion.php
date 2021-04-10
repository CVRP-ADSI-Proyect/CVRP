<?php
class Database{
    public function getconectar(){
    $localhost = 'b9bkwllmn5q6f4qel1sk-mysql.services.clever-cloud.com';
    $database = 'b9bkwllmn5q6f4qel1sk';
    $user = 'u1ilkwwvgtmy3uxl'; 
    $password = 'B00Mojs1LyIlquNJLObk';
    $link = new PDO("mysql:host=$localhost; dbname=$database", $user, $password);
    return $link;
    }
}
?>