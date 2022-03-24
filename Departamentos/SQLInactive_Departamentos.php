<?php
$Usuario = $_GET['idUsuario'];
$Empresa = $_GET['Empresas_idEmpresas'];
if (isset($_GET['state']))
    $Estados_idEstado = $_GET['state'];
else
    $Estados_idEstado = 2;
include '../SqlTools/database.php';

$id = $_GET['idDepartamentos'];

$del = new database();
$del->select('departamentos', '*', "idDepartamentos='$id'");
$result = $del->sql;

$data = mysqli_fetch_assoc($result);

$DescripcionDepto = $data['DescripcionDepto'];

$del->update('departamentos', "idDepartamentos = '$id'", ['DescripcionDepto' => $DescripcionDepto, 'Estados_idEstado' => $Estados_idEstado]);

if ($del == true) {
    header("location: TablaDepartamentos.php?idUsuario=$Usuario&Empresas_idEmpresas=$Empresa");
}
