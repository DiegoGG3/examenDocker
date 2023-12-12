<?php

require 'vendor/autoload.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->getOptions()->setChroot($_SERVER['DOCUMENT_ROOT']);

$html = 
'<html>
    <body>
        <img src="jamon.jpg" width="600" height="600"/>
    </body>
</html>';
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$output = $dompdf->output();


file_put_contents($file_path, $output);
echo $output;

?>