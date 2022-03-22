<?php
include '../SqlTools/database.php';

$Usuario = $_GET['idUsuario'];
$Empresa = $_GET['Empresas_idEmpresas'];

$db = new database();
$salida = "";
$query = 'SELECT idCargo, DescripcionCargo, Salario, Departamentos_idDepartamentos, Estados_idEstado
FROM cargos
WHERE Estados_idEstado = 1';

if (isset($_POST['sql'])) {
    $sql = $_POST['sql'];
    $query = 'SELECT idCargo, DescripcionCargo, Salario, Departamentos_idDepartamentos, Estados_idEstado
    FROM cargos
    WHERE idCargo LIKE "%' . $sql . '%" or 
    DescripcionCargo like "%' . $sql . '%" or
    Salario like "%' . $sql . '%" or Departamentos_idDepartamentos LIKE "%' . $sql . '%";';
}

$db->specialSelect($query);
$table = $db->sql;

if ($table->num_rows > 0) {
    $salida = '
        <thead>
        <tr>
        <th>id</th>
        <th>Descripcion Cargo</th>
        <th>Salario</th>
        <th>Departamentos</th>
        <th scope="col" colspan="3">Accion</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
        <tr>
        <th>id</th>
        <th>Descripcion Cargo</th>
        <th>Salario</th>
        <th>Departamentos</th>
        <th scope="col" colspan="3">Accion</th>
        </tr>
    </tfoot>';

    $salida .= '<tbody>';

    while ($fila = mysqli_fetch_assoc($table)) {
        $salida .= '
            <tr>
                <td>' . $fila['idCargo'] . '</td>
                <td>' . $fila['DescripcionCargo'] . '</td>
                <td>' . $fila['Salario'] . '</td>
                <td>' . $fila['Departamentos_idDepartamentos'] . '</td>
                <td>
                <a href="SQLRead_Cargos.php?idCargo=' . $fila['idCargo'] . ' &idUsuario=' . $Usuario . ' &Empresas_idEmpresas=' . $Empresa . '" class="btn btn-success btn-sm">Ver</a>
                </td>
                <td>
                <a href="ModificacionCargos.php?idCargo=' . $fila['idCargo'] . '&idUsuario=' . $Usuario . '&Empresas_idEmpresas=' . $Empresa . '" class="btn btn-primary btn-sm">Modificar</a>
                </td>
                <td>
                <a href="SQLInactive_Cargos.php?idCargo=' . $fila['idCargo'] . '&idUsuario=' . $Usuario . '&Empresas_idEmpresas=' . $Empresa . '" class="btn btn-danger btn-sm">Desactivar</a>
                </td>
            </tr>';
    }
    $salida .= '</tbody>';
} else {
    $salida .= "Busqueda no encontrada.";
}

echo $salida;