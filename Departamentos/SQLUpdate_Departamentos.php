<?php
    include '../SqlTools/database.php';
    if (isset($_POST['submit'])) {
        $Usuario = $_POST['Usuario'];
        $Empresa = $_POST['Empresa'];
        $id = $_POST['idDepartamentos'];
        $DescripcionDepto = $_POST['DescripcionDepto'];
        $Estado_idEstado=$_POST['Estados_idEstado'];

        $a = new database();
        $a->update('departamentos', "idDepartamentos = $id", ['DescripcionDepto'=>$DescripcionDepto,'Estados_idEstado'=>$Estado_idEstado]);

        if ($a == true) {
            header("location: TablaDepartamentos.php?idUsuario=$Usuario&Empresas_idEmpresas=$Empresa");
        }
    }
