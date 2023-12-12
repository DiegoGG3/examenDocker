
<?php
use GuzzleHttp\Client;
require_once "vendor/autoload.php";

$client = new Client();

$data = [
    'asunto' => $_POST["asunto"],
    'cuerpo' => $_POST["cuerpo"],
    'destinatario' => $_POST["destinatario"]
];

$response = $client->request('POST', 'http://cartero', 
[
    'form_params' => $data,
]);

echo $response->getBody(); 


?>