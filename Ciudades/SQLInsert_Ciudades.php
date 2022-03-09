<?php 
    include '../SqlTools/database.php';
    if (isset($_POST['submit'])) {
        $DescripcionCiudad = $_POST['DescripcionCiudad'];
        $Estado_idEstado=$_POST['Estados_idEstado'];

        $a = new database();
        $a->insert('ciudades',['DescripcionCiudad'=>$DescripcionCiudad,'Estados_idEstado'=> $Estado_idEstado]);
        if ($a == true) {
            header('location: TablaCiudades.php');
        }
    }
?>