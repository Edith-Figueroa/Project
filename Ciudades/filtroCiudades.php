<?php
include '../SqlTools/database.php';

$Usuario = $_GET['idUsuario'];
$Empresa = $_GET['Empresas_idEmpresas'];

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

$db->specialSelect($query);
$table = $db->sql;

if ($table->num_rows > 0) {
    $salida = '
        <thead>
        <tr>
        <th>id</th>
        <th>Ciudades</th>
        <th scope="col" colspan="3">Accion</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
        <tr>
        <th>id</th>
        <th>Ciudades</th>
        <th scope="col" colspan="3">Accion</th>
        </tr>
    </tfoot>';

    $salida .= '<tbody>';

    while ($fila = mysqli_fetch_assoc($table)) {
        $salida .= '
            <tr>
                <td>' . $fila['idCiudades'] . '</td>
                <td>' . $fila['DescripcionCiudad'] . '</td>
                <td>
                <a href="SQLRead_Ciudades.php?idCiudades=' . $fila['idCiudades'] . ' &idUsuario=' . $Usuario . ' &Empresas_idEmpresas=' . $Empresa . '" class="btn btn-success btn-sm">Ver</a>
                </td>
                <td>
                <a href="ModificacionCiudadesphp?idCiudades=' . $fila['idCiudades'] . '&idUsuario=' . $Usuario . '&Empresas_idEmpresas=' . $Empresa . '" class="btn btn-primary btn-sm">Modificar</a>
                </td>
                <td>
                <a href="SQLInactive_Ciudades.php?idCiudades=' . $fila['idCiudades'] . '&idUsuario=' . $Usuario . '&Empresas_idEmpresas=' . $Empresa . '" class="btn btn-danger btn-sm">Desactivar</a>
                </td>
            </tr>';
    }
    $salida .= '</tbody>';
} else {
    $salida .= "Busqueda no encontrada.";
}

echo $salida;