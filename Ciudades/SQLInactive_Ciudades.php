<?php 
    include '../SqlTools/database.php';

    $id = $_GET['idCiudades'];
    $Usuario = $_GET['idUsuario'];
    $Empresa = $_GET['Empresas_idEmpresas'];

    $del = new database();
    $del->select('ciudades','*', "idCiudades='$id'");
    $result=$del->sql;

    $data = mysqli_fetch_assoc($result);

    $DescripcionCiudad=$data['DescripcionCiudad'];
    $Estados_idEstado= 2;

    $del->update('ciudades', "idCiudades = '$id'", ['DescripcionCiudad'=>$DescripcionCiuds,'Estados_idEstado'=>$Estados_idEstado]);

    if ($del == true) {
        header("location: TablaCiudades.php?idUsuario=$Usuario&Empresas_idEmpresas=$Empresa");
    }
