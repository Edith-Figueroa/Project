<?php
$Usuario = $_GET['idUsuario'];
$Empresa = $_GET['Empresas_idEmpresas'];
if (isset($_GET['state']))
  $Estados_idEstado = $_GET['state'];
else
  $Estados_idEstado = 2;
include '../SqlTools/database.php';
$id = $_GET['idEmpleados'];

$modify = new database();
$modify->select("empleados", "*", "idEmpleados='$id'");
$result = $modify->sql;

$data = mysqli_fetch_assoc($result);

$id = $data['idEmpleados'];
$Cedula = $data['Cedula'];
$PrimerNombre = $data['PrimerNombre'];
$SegundoNombre = $data['SegundoNombre'];
$PrimerApellido = $data['PrimerApellido'];
$SegundoApellido = $data['SegundoApellido'];
$Telefono = $data['Telefono'];
$Direccion = $data['Direccion'];
$FechaNacimiento = $data['FechaNacimiento'];
$FechaIngreso = $data['FechaIngreso'];
$CuentaBancaria = $data['CuentaBancaria'];
$Sexos_idSexo = $data['Sexos_idSexo'];
$Correo = $data['Correo'];
$Ciudades_idCiudades = $data['Ciudades_idCiudades'];

$a = new database();
$a->update('empleados', "idEmpleados = $id", [
  'Cedula' => $Cedula, 'PrimerNombre' => $PrimerNombre, 'SegundoNombre' => $SegundoNombre, 'PrimerApellido' => $PrimerApellido,
  'SegundoApellido' => $SegundoApellido, 'Telefono' => $Telefono, 'Direccion' => $Direccion, 'FechaNacimiento' => $FechaNacimiento,
  'FechaIngreso' => $FechaIngreso, 'CuentaBancaria' => $CuentaBancaria, 'Sexos_idSexo' => $Sexos_idSexo,
  'Estados_idEstado' => $Estados_idEstado, 'Correo' => $Correo, 'Ciudades_idCiudades' => $Ciudades_idCiudades
]);
if ($a == true) {
  header("location:tablas.php?idUsuario=$Usuario&Empresas_idEmpresas=$Empresa");
}
