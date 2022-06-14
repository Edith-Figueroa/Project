<?php
    include '../SqlTools/database.php';
    $Usuario = $_POST['Usuario'];
    $Empresa = $_POST['Empresa'];
    
    if (isset($_POST['submit'])) {
        $id = $_POST['idEmpleados'];
        $Empresas_idEmpresas = $Empresa;
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
        $Cargos_idCargos = $_POST['Cargos_idCargos'];
        $Estados_idEstado = $_POST['Estados_idEstado'];
        $Correo = $_POST['Correo'];
        $Ciudades_idCiudades = $_POST['Ciudades_idCiudades'];

        $a = new database();
        $a->update('empleados', "idEmpleados = $id",['Empresas_idEmpresas'=>$Empresas_idEmpresas,'Cedula'=>$Cedula,'PrimerNombre'=>$PrimerNombre,'SegundoNombre'=>$SegundoNombre,'PrimerApellido'=>$PrimerApellido,
                    'SegundoApellido'=>$SegundoApellido,'Telefono'=>$Telefono,'Direccion'=>$Direccion,'FechaNacimiento'=>$FechaNacimiento,
                    'FechaIngreso'=>$FechaIngreso,'CuentaBancaria'=>$CuentaBancaria,'Sexos_idSexo'=>$Sexos_idSexo, 'Cargos_idCargos'=>$Cargos_idCargos,
                    'Estados_idEstado'=>$Estados_idEstado,'Correo'=>$Correo,
                    'Ciudades_idCiudades'=>$Ciudades_idCiudades]);
        if ($a == true) {
            header("location: tablas.php?idUsuario=$Usuario&Empresas_idEmpresas=$Empresa");
        }
    }
