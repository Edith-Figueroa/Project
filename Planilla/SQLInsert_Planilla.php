<?php
    include '../SqlTools/database.php';
    if (isset($_POST['submit'])) {
        $Usuario = $_POST['Usuario'];
        $Empresa = $_POST['Empresa'];
        $NumeroPlanilla = $_POST['NumeroPlanilla'];
        $FechaInicio=$_POST['FechaInicio'];
        $FechaFin=$_POST['FechaFin'];

        $a = new database();
        $a->insert('planillas',['NumeroPlanilla'=>$NumeroPlanilla,'Empresas_idEmpresas'=>$Empresa,'FechaInicio'=>$FechaInicio,'FechaFin'=>$FechaFin]);
        $a->specialSelect('select * from sistema_planilla.planillas order by idPlanillas desc limit 0, 1;');

        $result = $a->sql;

        $row = mysqli_fetch_assoc($result);
        $idP = $row['idPlanillas'];

        $a->ExecQuery("CALL plan_det($idP, $Empresa)");

        if ($a == true) {
            header("location: DetallePlanilla.php?idUsuario=$Usuario&Empresas_idEmpresas=$Empresa&idPlanillas=$idP");
        }
    }
