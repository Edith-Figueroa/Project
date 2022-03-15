<?php
    include '../SqlTools/database.php';
    if (isset($_POST['submit'])) {
        $Usuario = $_POST['Usuario'];
        $Empresa = $_POST['Empresa'];
        $NumeroPlanilla = $_POST['NumeroPlanilla'];
        $FechaInicio=$_POST['FechaInicio'];
        $FechaFin=$_POST['FechaFin'];

        $a = new database();
        $a->insert('planillas',['NumeroPlanilla'=>$NumeroPlanilla,'FechaInicio'=>$FechaInicio,'FechaFin'=>$FechaFin]);
        if ($a == true) {
            header("location: DetallePlanilla.php?idUsuario=$Usuario&Empresas_idEmpresas=$Empresa");
        }
    }
?>