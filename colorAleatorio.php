<?php
header("Content-Type:application/json");

$listaColores = ['negro', 'azul', 'marron', 'gris', 'verde', 'lima', 'rosa', 'purpura', 'rojo', 'amarillo' , 'blanco'];
$codigoRgb = ['000000', '0000ff', '800000', '808080', '008000', '00ff00', 'ff00ff', '800080', 'ff0000', 'ffff00', 'ffffff'];

$randIndex = rand(0, count($listaColores)-1);

deliver_response(200, "Tu color es el $listaColores[$randIndex]", "$codigoRgb[$randIndex]");

function deliver_response($status, $status_message, $data)
    {
        header("HTTP/1.1 $status $status_message");
        $response['status'] = $status;
        $response['status_message'] = $status_message;
        $response['data'] = $data;
 
        $json_response = json_encode($response);
        echo $json_response;
    }
 
?>