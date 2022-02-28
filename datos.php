<?php
    $conexion = mysqli_connect('localhost','root','root','sistema_planilla');
    $idDpto=$_POST['dpto'];

    $sql="SELECT idCargo, DescripcionCargo FROM cargos WHERE Departamentos_idDepartamentos = '$idDpto'";

    $result=mysqli_query($conexion, $sql);

    while ($row = mysqli_fetch_assoc($result)){
        echo'<option value='.$row['idCargo'].'>'.$row['DescripcionCargo'].'</option>';
    }
?>