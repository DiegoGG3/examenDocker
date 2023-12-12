
<?php

use GuzzleHttp\Client;

require_once "vendor/autoload.php";
require_once "DB.php";
require_once "persona.php";



$client = new Client();

$nombre = $_POST["nombre"];
$conexion = DB::abreConexion();
$personaA = DB::obtenerPersonas($conexion, $nombre);
$persona= Persona::crearPersona($personaA[0]->nombre, $personaA[0]->email, $personaA[0]->jamon);

if ($persona == null) {
    echo "No existe esa persona";
} else {
    var_dump($persona);
    if($persona->getJamon()==true){
        $data = [
            'cuerpo' => "jamonSi",
            'destinatario' => $persona->getEmail()
        ];   
    }else{
        $data = [
            'cuerpo' => "jamonNo",
            'destinatario' => $persona->getEmail()
        ]; 
    }
    

    $response = $client->request(
        'POST',
        'http://cartero',
        [
            'form_params' => $data,
        ]
    );

    echo $response->getBody();
}




?>