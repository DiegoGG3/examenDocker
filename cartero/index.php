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

// Guardar el PDF en el directorio local
file_put_contents('pdfs/pdfExamen.pdf', $pdf);

// Configurar las cabeceras para la descarga del archivo
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="pdfExamen.pdf"');

require_once "entities/correo.php";

echo $pdf;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = new correo($_POST["destinatario"], $_POST["asunto"], $_POST["cuerpo"], $pdf);
    $correo->enviar();
} else {
    echo "No usas 'GET'";
}

?>
