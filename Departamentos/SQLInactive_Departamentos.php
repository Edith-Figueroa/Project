<?php
    $Usuario = $_GET['idUsuario'];
    $Empresa = $_GET['Empresas_idEmpresas'];
    include '../SqlTools/database.php';

    $id = $_GET['idDepartamentos'];

    $del = new database();
    $del->select('departamentos','*', "idDepartamentos='$id'");
    $result=$del->sql;

    $data = mysqli_fetch_assoc($result);

    $DescripcionDepto=$data['DescripcionDepto'];
    $Estados_idEstado= 2;

    $del->update('departamentos', "idDepartamentos = '$id'", ['DescripcionDepto'=>$DescripcionDepto,'Estados_idEstado'=>$Estados_idEstado]);

    if ($del == true) {
        header("location: TablaDepartamentos.php?idUsuario=$Usuario&Empresas_idEmpresas=$Empresa");
    }
?>