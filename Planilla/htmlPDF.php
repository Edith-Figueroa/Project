<?php
require_once  '../vendor/autoload.php';
include '../SqlTools/database.php';

$mpdf = new \Mpdf\Mpdf();

$db = new database();

$html = $_POST['rolex'];

$empresa = $_POST['empresa'];

$planilla = $_POST['planilla'];

$name = 'planilla' . $planilla . ' Empresa' . $empresa;

$url = 'C:/Planillas/planilla' . $planilla . ' Empresa' . $empresa . '.pdf';

if (!file_exists("C:\Planillas")) {
    mkdir('C:\Planillas', 0777, true);
}

$stylesheet = file_get_contents('../css/estilo.css');

$mpdf->WriteHTML('<img src="../img/COPAP.png" width="100px"/>');
$mpdf->WriteHTML('<h1>Planilla de Pagos</h1>');

$mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);

$mpdf->WriteHTML($html);

$mpdf->Output('C:\Planillas\planilla' . $planilla . ' Empresa' . $empresa . '.pdf', 'F');

$db->insert('registros', [
    'id_Planilla' => $planilla,
    'Nombre_Planilla' => $name,
    'url' => $url
]);

if ($db == true) {
    echo 'insertado correcto';
}
