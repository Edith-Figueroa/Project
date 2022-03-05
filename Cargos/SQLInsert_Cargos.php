<?php 
    include '../SqlTools/database.php';
    if (isset($_POST['submit'])) {
        $DescripcionCargo = $_POST['DescripcionCargo'];
        $Salario = $_POST['Salario'];
        $Departamentos_idDepartamentos = $_POST['Departamentos_idDepartamentos'];

        $a = new database();
        $a->insert('cargos',['DescripcionCargo'=>$DescripcionCargo,'Salario'=>$Salario,
        'Departamentos_idDepartamentos'=>$Departamentos_idDepartamentos]);
        if ($a == true) {
            header('location: TablaCargos.php');
        }
    }
?>