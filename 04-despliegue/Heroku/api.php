<?php
require_once 'controllerjson.php';
require_once 'modelojson.php';

function Parametrosaviables($params){
    $aviable = true;
    $missing = "";

    foreach($params as $param){
        if(!isset($_POST[$param]) || strlen($_POST[$param]) <=0){
            $aviable = false;
            $missing = $missing . ",". $param;
        }
    }

    if(!$aviable){
        $request = array();
        $request['error'] = true;

        $request['message'] = 'Parametro: ' . substr($missing, 1, strlen($missing)). 'vacio';
        echo json_encode($request);

        // api

        //detener la ejecucion
        die();
    }
}