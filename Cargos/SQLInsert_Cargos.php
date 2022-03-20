<?php
    include '../SqlTools/database.php';
    if (isset($_POST['submit'])) {
        $Usuario = $_POST['Usuario'];
        $Empresa = $_POST['Empresa'];
        $DescripcionCargo = $_POST['DescripcionCargo'];
        $Salario = $_POST['Salario'];
        $Departamentos_idDepartamentos = $_POST['Departamentos_idDepartamentos'];
        $Estado_idEstado=$_POST['Estados_idEstado'];

        $a = new database();
        $a->insert('cargos',['DescripcionCargo'=>$DescripcionCargo,'Salario'=>$Salario,
        'Departamentos_idDepartamentos'=>$Departamentos_idDepartamentos,'Estados_idEstado'=>$Estado_idEstado]);
        if ($a == true) {
            header("location: TablaCargos.php?idUsuario=$Usuario&Empresas_idEmpresas=$Empresa");
        }
    }
?>