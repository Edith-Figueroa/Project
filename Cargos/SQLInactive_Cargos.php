<?php
$Usuario = $_GET['idUsuario'];
$Empresa = $_GET['Empresas_idEmpresas'];
if (isset($_GET['state']))
  $Estados_idEstado = $_GET['state'];
else
  $Estados_idEstado = 2;

include '../SqlTools/database.php';

$id = $_GET['idCargo'];

$del = new database();
$del->select('cargos', '*', "idCargo='$id'");
$result = $del->sql;

$data = mysqli_fetch_assoc($result);

$DescripcionCargo = $data['DescripcionCargo'];
$Salario = $data['Salario'];
$Departamentos_idDepartamentos = $data['Departamentos_idDepartamentos'];

$del->update('cargos', "idCargo = '$id'", [
  'DescripcionCargo' => $DescripcionCargo, 'Salario' => $Salario,
  'Departamentos_idDepartamentos' => $Departamentos_idDepartamentos, 'Estados_idEstado' => $Estados_idEstado
]);

if ($del == true) {
  header("location: TablaCargos.php?idUsuario=$Usuario&Empresas_idEmpresas=$Empresa");
}
