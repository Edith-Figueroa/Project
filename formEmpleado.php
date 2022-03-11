<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-1.12.1.js" type="text/javascript">
    </script>
    <script src="js/jquery-1.12.1.js"></script>
</head>
    <body>
      <form id="formularioEmp">
        <!--Numero de Identidad-->
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="sidebar-heading">
                    Numero de Identidad
                </div>
                <div class="form-group">
                    <input type="" name="Cedula" class="form-control form-control-user"
                    aria-describedby="emailHelp" placeholder="" 
                    value="<?php if(isset($row)) { echo $row['Cedula']; } ?>" required>
                </div>
            </div>
  
            <!--Sexo-->
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="sidebar-heading">
                    Sexo
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="radio" name="Sexos_idSexo" value= "1" 
                        <?php if(isset($row)) if ($row['Sexos_idSexo'] == 1): ?> checked = "checked"
                        <?php endif ?> required>
                    <label for="contactChoice1">Masculino</label>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="radio" name="Sexos_idSexo" value="2"
                        <?php if(isset($row)) if ($row['Sexos_idSexo'] == 2): ?> checked = "checked"
                        <?php endif ?>>
                    <label for="contactChoice2">Femenino</label>
                    </div>
                </div>
            </div>
        </div>
  
        <!--Primer Nombre-->
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="sidebar-heading">
                Primer Nombre
            </div>
            <div class="form-group">
                <input id="" type="text" name="PrimerNombre" class="form-control form-control-user" placeholder=""
                value="<?php if(isset($row)) { echo $row['PrimerNombre']; } ?>" required>
            </div>
            </div>
            <!--Segundo Nombre-->
            <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="sidebar-heading">
                Segundo Nombre
            </div>
            <div class="form-group">
                <input type="text" name="SegundoNombre" class="form-control form-control-user" placeholder=""
                value="<?php if(isset($row)) { echo $row['SegundoNombre']; } ?>" required>
            </div>
            </div>
        </div>
        <!--Primer Apellido-->
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="sidebar-heading">
                Primer Apellido
            </div>
            <div class="form-group">
                <input type="text" name="PrimerApellido" class="form-control form-control-user" placeholder=""
                value="<?php if(isset($row)) { echo $row['PrimerApellido']; } ?>" required>
            </div>
            </div>
            <!--Segundo Apellido-->
            <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="sidebar-heading">
                Segundo Apellido
            </div>
            <div class="form-group">
                <input type="text" name="SegundoApellido" class="form-control form-control-user" placeholder=""
                value="<?php if(isset($row)) { echo $row['SegundoApellido']; } ?>" required>
            </div>
            </div>
        </div>
        <!--Telefono-->
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="sidebar-heading">
                Numero Telefonico
            </div>
            <div class="form-group">
                <input type="tel" name="Telefono" class="form-control form-control-user" placeholder=""
                value="<?php if(isset($row)) { echo $row['Telefono']; } ?>" required>
            </div>
            </div>
            <!--Direccion-->
            <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="sidebar-heading">
                Direccion
            </div>
            <div class="form-group">
                <input type="text" name="Direccion" class="form-control form-control-user" placeholder=""
                value="<?php if(isset($row)) { echo $row['Direccion']; } ?>" required>
            </div>
            </div>
        </div>
        <!--Departamento-->
        <?php
            $grid = new database();
            $grid ->select('departamentos', '*');
            $table = $grid ->sql;
        ?>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="sidebar-heading">
                Departamento
            </div>
            <div class="form-group">
                <div>
                <select class="custom-select form-control" name="Departamentos_idDepartamentos" id="Departamentos_idDepartamentos" onchange="cambio()">
                    <?php while ($ex = mysqli_fetch_assoc($table)) { ?>
                        <option value="none" selected disabled hidden>Select an Option</option>
                        <option value="<?php echo $ex['idDepartamentos']; ?>"><?php echo $ex['DescripcionDepto']; ?></option>
                    <?php }?>
                </select>
                </div>
            </div>
            </div>
            <!--Cargos-->
            <?php
            $grid = new database();
            $grid ->select('cargos', '*');
            $table = $grid ->sql;
            ?>
            <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="sidebar-heading">
                Cargo
            </div>
            <div class="form-group">
                <div>
                <select class="custom-select form-control" name="Cargos_idCargos" id="Cargos_idCargos">
                    <option value="none">Seleccione una opcion</option>
                </select>
                </div>
            </div>
            </div>
        </div>    

        <!--Ciudades-->
        <?php
            $grid ->select('ciudades', '*');
            $table = $grid ->sql;
        ?>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="sidebar-heading">
                Ciudades
            </div>
            <div class="form-group">
                <div>
                <select class="custom-select form-control" name="Ciudades_idCiudades" SelectedItem="null"
                value="<?php if(isset($row)) { echo $row['Ciudades_idCiudades']; } ?>" required>
                    <?php while ($ex = mysqli_fetch_assoc($table)) { ?>
                        <option value="none" selected disabled hidden>Select an Option</option>
                        <option value=<?php echo $ex['idCiudades']; ?>><?php echo $ex['DescripcionCiudad']; ?></option>
                    <?php }?>
                </select>
                </div>
            </div>
        </div>
        <!--Estado-->
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="sidebar-heading">
                Estado
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="radio" name="Estados_idEstado" value="1"
                <?php if(isset($row)) if ($row['Estados_idEstado'] == 1): ?> checked = "checked"
                <?php endif?> required>
                <label for="contactChoice1">Activo</label>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="radio" name="Estados_idEstado" value="2"
                <?php if(isset($row)) if ($row['Estados_idEstado'] == 2): ?> checked = "checked"
                <?php endif;?>>
                <label for="contactChoice2">Inactivo</label>
                </div>
            </div>
            </div>
        </div>
        <!--Fecha Nacimiento-->
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="sidebar-heading">
                Fecha de Nacimiento
            </div>
            <div class="form-group">
                <input type="date" name="FechaNacimiento" class="form-control form-control-user" placeholder=""
                value="<?php if(isset($row)) { echo $row['FechaNacimiento']; } ?>" required>
            </div>
            </div>
            <!--Fecha Ingreso-->
            <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="sidebar-heading">
                Fecha de Ingreso
            </div>
            <div class="form-group">
                <input type="date" name="FechaIngreso"class="form-control form-control-user" placeholder=""
                value="<?php if(isset($row)) { echo $row['FechaIngreso']; } ?>" required>
            </div>
            </div>
        </div>
        <!--Correo electronico-->
        <div class="sidebar-heading">
            Correo Electronico
        </div>
        <div class="form-group">
            <input type="email" name = "Correo" class="form-control form-control-user" placeholder=""
            value="<?php if(isset($row)) { echo $row['Correo']; } ?>" required>
        </div>
        <!--Numero de cuenta bancaria-->
        <div class="sidebar-heading">
            Numero de cuenta bancaria
        </div>
        <div class="form-group">
            <input type="text" name="CuentaBancaria" class="form-control form-control-user" placeholder=""
            value="<?php if(isset($row)) { echo $row['CuentaBancaria']; } ?>" required>
        </div>

    </form>
        
    </body>
</html>

<script type="text/javascript">
    function recargarLista(){
        var x = document.getElementById("Departamentos_idDepartamentos").value;
        $.ajax({
            type:"POST",
            url: "datos.php",
            data:"dpto=" + x,
            success:function(r){
                $('#Cargos_idCargos').html(r);
            }
        });
    }

    function cambio(){
        recargarLista();
    }
</script>

