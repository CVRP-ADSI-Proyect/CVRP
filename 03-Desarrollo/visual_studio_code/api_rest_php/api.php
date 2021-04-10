<?php
require_once ('controllerjson.php');

function IsTheseParametersAvailable($params){

    $available = true;
    $missing = "";

    foreach($params as $param){
        if(!isset($_POST[$param]) || strlen($_POST[$param]) <=0){
            $available = false;
            $missing = $missing. ",".$param;
        }
    }

    if(!$available){
        $response = array();
        $response['error'] = true;

        $response['message'] = 'Parametro: ' .substr($missing, 1, strlen($missing)). 'vacio';
        echo json_encode($missing);
        die();
    }
}
$response = array();





if(isset($_GET['apicall'])){

    switch($_GET['apicall']){

        case 'createusuario':

            IsTheseParametersAvailable(array('fullname', 'username', 'password', 'secretpin', 'created'));
 
            $db = new controllerjson();
            $result = $db->createUsuarioController($_POST['fullname'],
            $_POST['username'],
            $_POST['password'],
            $_POST['secretpin'],
            $_POST['created']);



        if($result){
            $response['error'] = false;
            $response['message'] = 'Usuario agregado correctamente';
            $response['contenido'] = $db->readUsuarioController();
        }else{
            $response['error'] = true;
            $response['message'] = 'Ocurrio un error intenta nuevamente';
        }
    break;





    case 'readusuarios':
        $db = new controllerjson();
        $response['error'] = false;
        $response['message'] = 'Solicitud completada correctamente';
        $response['contenido'] = $db->readUsuarioController();
    break;


    case 'loginusuario':
        IsTheseParametersAvailable(array('username', 'password'));
        $db = new controllerjson();
        $result = $db->loginUsuarioController($_POST['username'], $_POST['password']);

        if(!$result){
            $response['error'] = true;
            $response['message'] = 'credenciales no validas';
        }else{
            $response['error'] = false;
            $response['message'] = 'Bienvenido';
            $response['contenido'] = $result;
        }
    break;
    
    }
    
}else{
    $response['error'] = true;
    $response['message'] = 'Llamado invalido del API!';
}
echo json_encode($response);
?>