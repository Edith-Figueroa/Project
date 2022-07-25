<?php
include '../SqlTools/database.php';

$Usuario = $_GET['idUsuario'];
$Empresa = $_GET['Empresas_idEmpresas'];
if (isset($_GET['state']))
  $state = $_GET['state'];

$db = new database();
$salida = "";
$query = 'SELECT idCiudades, DescripcionCiudad, Estados_idEstado
FROM ciudades
WHERE Estados_idEstado = 1';

if (isset($_POST['sql'])) {
  $sql = $_POST['sql'];
  $query = 'SELECT idCiudades, DescripcionCiudad, Estados_idEstado
    FROM ciudades
    WHERE idCiudades LIKE "%' . $sql . '%" or 
    DescripcionCiudad like "%' . $sql . '%";';
}

if (isset($_POST['point'])) {
  $sql = $_POST['point'];
  $query = 'SELECT idCiudades, DescripcionCiudad, Estados_idEstado
    FROM ciudades
    WHERE Estados_idEstado = ' . $sql . ';';
}

$db->specialSelect($query);
$table = $db->sql;

if ($table->num_rows > 0) {
  $salida = '
        <thead>
        <tr>
        <th>id</th>
        <th>Ciudades</th>
        <th scope="col" colspan="3">Acción</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
        <tr>
        <th>id</th>
        <th>Ciudades</th>
        <th scope="col" colspan="3">Acción</th>
        </tr>
    </tfoot>';

  $salida .= '<tbody>';

  if (isset($_POST['point']) && $_POST['point'] == 2) {
    while ($fila = mysqli_fetch_assoc($table)) {
      $salida .= '
                <tr>
                    <td>' . $fila['idCiudades'] . '</td>
                    <td>' . $fila['DescripcionCiudad'] . '</td>
                    <td>
                    <a href="formCiudades.php?idCiudades=' . $fila['idCiudades'] . '&idUsuario=' . $Usuario . '&Empresas_idEmpresas=' . $Empresa . '&action=3" class="btn btn-success btn-sm">Ver</a>
                    </td>
                    <td>
                    <a href="formCiudades.php?idCiudades=' . $fila['idCiudades'] . '&idUsuario=' . $Usuario . '&Empresas_idEmpresas=' . $Empresa . '&action=2" class="btn btn-primary btn-sm">Modificar</a>
                    </td>
                    <td>
                    <a href="SQLInactive_Ciudades.php?idCiudades=' . $fila['idCiudades'] . '&idUsuario=' . $Usuario . '&Empresas_idEmpresas=' . $Empresa . '&state=' . $state . '" class="btn btn-danger btn-sm">Activar</a>
                    </td>
                </tr>';
    }
  }

  while ($fila = mysqli_fetch_assoc($table)) {
    $salida .= '
            <tr>
                <td align="center">' . $fila['idCiudades'] . '</td>
                <td>' . $fila['DescripcionCiudad'] . '</td>
                <td align="center">
                <a href="formCiudades.php?idCiudades=' . $fila['idCiudades'] . '&idUsuario=' . $Usuario . '&Empresas_idEmpresas=' . $Empresa . '&action=3" class="btn btn-success btn-sm">Ver</a>
                </td>
                <td align="center">
                <a href="formCiudades.php?idCiudades=' . $fila['idCiudades'] . '&idUsuario=' . $Usuario . '&Empresas_idEmpresas=' . $Empresa . '&action=2" class="btn btn-primary btn-sm">Modificar</a>
                </td>
                <td align="center">
                <a href="SQLInactive_Ciudades.php?idCiudades=' . $fila['idCiudades'] . '&idUsuario=' . $Usuario . '&Empresas_idEmpresas=' . $Empresa . '" class="btn btn-danger btn-sm">Desactivar</a>
                </td>
            </tr>';
  }
  $salida .= '</tbody>';
} else {
  $salida .= "Busqueda no encontrada.";
}

echo $salida;
