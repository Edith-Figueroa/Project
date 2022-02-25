<?php 
    include 'database.php';
    if (isset($_POST['submit'])) {
        $Cedula = $_POST['Cedula'];
        $PrimerNombre = $_POST['PrimerNombre'];
        $SegundoNombre = $_POST['SegundoNombre'];
        $PrimerApellido = $_POST['PrimerApellido'];
        $SegundoApellido = $_POST['SegundoApellido'];
        $Telefono = $_POST['Telefono'];
        $Direccion = $_POST['Direccion'];
        $FechaNacimiento = $_POST['FechaNacimiento'];
        $FechaIngreso = $_POST['FechaIngreso'];
        $CuentaBancaria = $_POST['CuentaBancaria'];
        $Sexos_idSexo = $_POST['Sexos_idSexo'];
        $Departamentos_idDepartamentos = $_POST['Departamentos_idDepartamentos'];
        $Cargos_idCargos = $_POST['Cargos_idCargos'];
        $Estados_idEstado = $_POST['Estados_idEstado'];
        $Correo = $_POST['Correo'];
        $Ciudades_idCiudades = $_POST['Ciudades_idCiudades'];

        $a = new database();
        $a->insert('empleados',['Cedula'=>$Cedula,'PrimerNombre'=>$PrimerNombre,'SegundoNombre'=>$SegundoNombre,'PrimerApellido'=>$PrimerApellido,
                    'SegundoApellido'=>$SegundoApellido,'Telefono'=>$Telefono,'Direccion'=>$Direccion,'FechaNacimiento'=>$FechaNacimiento,
                    'FechaIngreso'=>$FechaIngreso,'CuentaBancaria'=>$CuentaBancaria,'Sexos_idSexo'=>$Sexos_idSexo,
                    'Departamentos_idDepartamentos'=>$Departamentos_idDepartamentos,'Estados_idEstado'=>$Estados_idEstado,'Correo'=>$Correo,
                    'Ciudades_idCiudades'=>$Ciudades_idCiudades]);
        if ($a == true) {
            header('location:../index.php');
        }
    }
?>