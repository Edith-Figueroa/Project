<?php
    include '../SqlTools/database.php';
    if (isset($_POST['submit'])) {
        $Usuario = $_POST['Usuario'];
        $Empresa = $_POST['Empresa'];
        $id = $_POST['idCargo'];
        $DescripcionCargo = $_POST['DescripcionCargo'];
        $Salario = $_POST['Salario'];
        $Departamentos_idDepartamentos = $_POST['Departamentos_idDepartamentos'];

        $a = new database();
        $a->update('cargos', "idCargo = $id", ['DescripcionCargo'=>$DescripcionCargo,'Salario'=>$Salario,
        'Departamentos_idDepartamentos'=>$Departamentos_idDepartamentos,'Estados_idEstado'=>$Estados_idEstado]);

        if ($a == true) {
            header("location: TablaCargos.php?idUsuario=$Usuario&Empresas_idEmpresas=$Empresa");
        }
    }
?>