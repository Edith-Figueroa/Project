<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  include "../SqlTools/database.php";
  $idEmpleado = $_GET['idEmpleados'];
  $idUsuario = $_GET['idUsuario'];
  $Empresas_idEmpresas = $_GET['Empresas_idEmpresas'];
  $idPlanillas = $_GET['idPlanillas'];
  $db = new database();
  $db->specialSelect("SELECT 	detalleplanillas.Empleados_idEmpleados,
    concat(empleados.PrimerNombre,' ',empleados.PrimerApellido) as Nombre,
    cargos.Salario,
    detalleplanillas.IHSS,
    detalleplanillas.RAP,
    detalleplanillas.ISR,
    detalleplanillas.Total_Deducciones,
    detalleplanillas.14vo as DecimoCuarto,
    detalleplanillas.13vo as DecimoTercero,
    detalleplanillas.Total_Bonificaciones ,
    detalleplanillas.Sueldo_Neto FROM 
    sistema_planilla.detalleplanillas inner join sistema_planilla.empleados
    on sistema_planilla.empleados.idEmpleados = sistema_planilla.detalleplanillas.Empleados_idEmpleados
    inner join cargos
    on empleados.Cargos_idCargos=cargos.idCargo
    WHERE Planillas_idPlanilla='$idPlanillas' AND Empleados_idEmpleados = '$idEmpleado';");
  $table = $db->sql;
  $row = mysqli_fetch_assoc($table);
  ?>

</body>

</html>