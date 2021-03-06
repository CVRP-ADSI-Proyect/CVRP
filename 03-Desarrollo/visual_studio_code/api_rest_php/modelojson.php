<?php
require_once ('conexion.php');

class Datos extends Database{

    //METODOS
    public function createUsuarioModel($datosModel,$tabla){
        $stmt = Database::getConnection()->prepare("INSERT INTO $tabla(fullname,username,password,nota,fecha) 
        VALUES (:fullname, :username, :password, :secretpin, :created)");

        $stmt->bindParam(":fullname", $datosModel["fullname"],PDO::PARAM_STR);
        $stmt->bindParam(":username", $datosModel["username"],PDO::PARAM_STR);
        $stmt->bindParam(":password", $datosModel["password"],PDO::PARAM_STR);
        $stmt->bindParam(":secretpin", $datosModel["secretpin"],PDO::PARAM_INT);
        $stmt->bindParam(":created", $datosModel["created"],PDO::PARAM_STR);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function readUsuarioModel($tabla){
        $stmt = Database::getConnection()->prepare("SELECT id,fullname,username,password,secretpin,created FROM $tabla");
        $stmt->execute();

        $stmt->bindColumn("id",$id);
        $stmt->bindColumn("fullname",$fullname);
        $stmt->bindColumn("username",$username);
        $stmt->bindColumn("password",$password);
        $stmt->bindColumn("secretpin",$secretpin);
        $stmt->bindColumn("created",$created);
        $usuarios = array();    
        
        while($fila = $stmt->fetch(PDO::FETCH_BOUND)){
            
        $user = array();
            $user["id"] = utf8_encode($id);
            $user["fullname"] = utf8_encode($fullname);
            $user["username"] = utf8_encode($username);
            $user["password"] = utf8_encode($password);
            $user["secretpin"] = utf8_encode($secretpin);
            $user["created"] = utf8_encode($created);

            array_push($usuarios,$user);
         
        }

   return $usuarios;
        
    }

    public function updateUsuarioModel($datosModel, $tabla){
        $stmt = Database::getConnection()->prepare("UPDATE $tabla set password =:password WHERE id=:id");

        $stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
        
        if($stmt->execute()){
            echo "Actualizacion exitosa";
        }else{
            echo "No se pudo hacer la actualizacion";
        }
    }

    public function deleteUsuarioModel($id, $tabla){
        $stmt = Database::getConnection()->prepare("DELETE  FROM $tabla WHERE id=:id");

        $stmt->bindParam(":id",$id, PDO::PARAM_INT);
        if($stmt->execute()){
            echo "Usuario eliminado correctamente";
        }else{
            echo "El Usuario no se pudo eliminar";
        }
    }

    public function loginUsuarioModel($datosModel, $tabla){
        $stmt = Database::getConnection()->prepare("SELECT * FROM $tabla WHERE fullname=:fullname AND password=:password");

        $stmt->bindParam(":fullname",$datosModel["fullname"]);
        $stmt->bindParam(":password",$datosModel["password"]);

        $stmt->execute();

        $stmt->bindColumn("id",$id);
        $stmt->bindColumn("fullname",$fullname);
        $stmt->bindColumn("username",$username);
        $stmt->bindColumn("password",$password);
        $stmt->bindColumn("secretpin",$secretpin);
        $stmt->bindColumn("created",$created);

        while($fila = $stmt->fetch(PDO::FETCH_BOUND)){
            $user = array();
            $user["id"] = utf8_encode($id);
            $user["fullname"] = utf8_encode($fullname);
            $user["username"] = utf8_encode($username);
            $user["password"] = utf8_encode($password);
            $user["secretpin"] = utf8_encode($secretpin);
            $user["created"] = utf8_encode($created);
        }
        if(!empty($user)){
            return $user;
        }else{
            return false;
        }      
    }


}
?>