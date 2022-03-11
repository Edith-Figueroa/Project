<?php 
    include '../SqlTools/database.php';
    if (isset($_POST['submit'])) {
        $Usuario = $_POST['Usuario'];
        $Empresa = $_POST['Empresa'];
        $DescripcionCiudad = $_POST['DescripcionCiudad'];
        $Estado_idEstado= $_POST['Estados_idEstado'];

        $a = new database();
        $a->insert('ciudades',['DescripcionCiudad'=>$DescripcionCiudad,'Estados_idEstado'=> $Estado_idEstado]);
        if ($a == true) {
            header("location: TablaCiudades.php?idUsuario=$Usuario&Empresas_idEmpresas=$Empresa");
        }
    }
?>