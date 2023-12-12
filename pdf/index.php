<?php

require 'vendor/autoload.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = 
'<html>
    <body>
        <h1>'.$_POST["cuerpo"].'</h1>
    </body>
</html>';
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$output = $dompdf->output();

$file_path = '/pdfs/pdfExamen.pdf';

file_put_contents($file_path, $output);
echo $output;

?>