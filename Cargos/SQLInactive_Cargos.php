<?php
    $Usuario = $_GET['idUsuario'];
    $Empresa = $_GET['Empresas_idEmpresas'];
    
    include '../SqlTools/database.php';

    $id = $_GET['idCargo'];

    $del = new database();
    $del->select('cargos','*', "idCargo='$id'");
    $result=$del->sql;

    $data = mysqli_fetch_assoc($result);

    $DescripcionCargo=$data['DescripcionCargo'];
    $Salario = $data['Salario'];
    $Departamentos_idDepartamentos = $data['Departamentos_idDepartamentos'];
    $Estados_idEstado= 2;

    $del->update('cargos', "idCargo = '$id'", ['DescripcionCargo'=>$DescripcionCargo,'Salario'=>$Salario,
    'Departamentos_idDepartamentos'=>$Departamentos_idDepartamentos, 'Estados_idEstado'=>$Estados_idEstado]);

    if ($del == true) {
        header("location: TablaCargos.php?idUsuario=$Usuario&Empresas_idEmpresas=$Empresa");
    }
