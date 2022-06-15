<?php
    include '../SqlTools/database.php';
    $a = new database();
    $idDpto=$_POST['dpto'];

    $a->select('cargos', 'idCargo, DescripcionCargo',"Departamentos_idDepartamentos = '$idDpto'");

    while ($ex = mysqli_fetch_assoc($a->sql)){
        echo'<option value='.$ex['idCargo'].'>'.$ex['DescripcionCargo'].'</option>';
    }
