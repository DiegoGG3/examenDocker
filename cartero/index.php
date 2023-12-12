<?php

use GuzzleHttp\Client;
require_once "vendor/autoload.php";

$client = new Client();
$data = [
    'cuerpo' => $_POST["cuerpo"]
];

$response = $client->request('POST', 'http://pdf', 
[
    'form_params' => $data,
]);

$pdf = $response->getBody();

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="mipdf.pdf"');

require_once "entities/correo.php";

echo $pdf;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = new correo($_POST["destinatario"], "Examen", $_POST["cuerpo"], $pdf);
    $correo->enviar();
} else {
    echo "No usas 'GET'";
}

?>
