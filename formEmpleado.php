<!--Numero de Identidad-->
<div class="sidebar-heading">
    Numero de Identidad
</div>
<div class="form-group">
    <input type="" name="Cedula" class="form-control form-control-user"
    aria-describedby="emailHelp" placeholder="" 
    value="<?php if(isset($row)) { echo $row['Cedula']; } ?>">
</div>
<!--Primer Nombre-->
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="sidebar-heading">
        Primer Nombre
    </div>
    <div class="form-group">
        <input type="text" name="PrimerNombre" class="form-control form-control-user" placeholder=""
        value="<?php if(isset($row)) { echo $row['PrimerNombre']; } ?>">
    </div>
    </div>
    <!--Segundo Nombre-->
    <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="sidebar-heading">
        Segundo Nombre
    </div>
    <div class="form-group">
        <input type="text" name="SegundoNombre" class="form-control form-control-user" placeholder=""
        value="<?php if(isset($row)) { echo $row['SegundoNombre']; } ?>">
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
        value="<?php if(isset($row)) { echo $row['PrimerApellido']; } ?>">
    </div>
    </div>
    <!--Segundo Apellido-->
    <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="sidebar-heading">
        Segundo Apellido
    </div>
    <div class="form-group">
        <input type="text" name="SegundoApellido" class="form-control form-control-user" placeholder=""
        value="<?php if(isset($row)) { echo $row['SegundoApellido']; } ?>">
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
        value="<?php if(isset($row)) { echo $row['Telefono']; } ?>">
    </div>
    </div>
    <!--Direccion-->
    <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="sidebar-heading">
        Direccion
    </div>
    <div class="form-group">
        <input type="text" name="Direccion" class="form-control form-control-user" placeholder=""
        value="<?php if(isset($row)) { echo $row['Direccion']; } ?>">
    </div>
    </div>
</div>
<!--Departamento-->
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="sidebar-heading">
        Departamento
    </div>
    <div class="form-group">
        <div>
        <select class="custom-select form-control" name="Departamentos_idDepartamentos" 
        value="<?php if(isset($row)) { echo $row['Departamentos_idDepartamentos']; } ?>">
            <option value="0">Seleccione un departamento...</option>
            <option value="1">Departemento 1</option>
            <option value="2">Departemento 2</option>
            <option value="3">Departemento 3</option>
            <option value="4">Departemento 4</option>
            <option value="5">Departemento 5</option>
            <option value="6">Departemento 6</option>
            <option value="7">Departemento 7</option>
            <option value="8">Departemento 8</option>
            <option value="9">Departemento 9</option>
        </select>
        </div>
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
            <?php endif ?>>
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
<!--Ciudades-->
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="sidebar-heading">
        Ciudades
    </div>
    <div class="form-group">
        <div>
        <select class="custom-select form-control" name="Ciudades_idCiudades" SelectedItem="null"
        value="<?php if(isset($row)) { echo $row['Ciudades_idCiudades']; } ?>">
            <option value="0">Seleccione una Ciudad...</option>
            <option value="1">Ciudad 1</option>
            <option value="2">Ciudad 2</option>
            <option value="3">Ciudad 3</option>
            <option value="4">Ciudad 4</option>
            <option value="5">Ciudad 5</option>
            <option value="6">Ciudad 6</option>
            <option value="7">Ciudad 7</option>
            <option value="8">Ciudad 8</option>
            <option value="9">Ciudad 9</option>
            <option value="10">Ciudad 10</option>
            <option value="11">Ciudad 11</option>
            <option value="12">Ciudad 12</option>
            <option value="13">Ciudad 13</option>
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
        <?php endif?>>
        <label for="contactChoice1">Activo</label>
        </div>
        <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="radio" name="Estados_idEstado" value="2"
        <?php if(isset($row)) if ($row['Estados_idEstado'] == 1): ?> checked = "checked"
        <?php endif ?>>
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
        value="<?php if(isset($row)) { echo $row['FechaNacimiento']; } ?>">
    </div>
    </div>
    <!--Fecha Ingreso-->
    <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="sidebar-heading">
        Fecha de Ingreso
    </div>
    <div class="form-group">
        <input type="date" name="FechaIngreso"class="form-control form-control-user" placeholder=""
        value="<?php if(isset($row)) { echo $row['FechaIngreso']; } ?>">
    </div>
    </div>
</div>
<!--Correo electronico-->
<div class="sidebar-heading">
    Correo Electronico
</div>
<div class="form-group">
    <input type="email" name = "Correo" class="form-control form-control-user" placeholder=""
    value="<?php if(isset($row)) { echo $row['Correo']; } ?>">
</div>
<!--Numero de cuenta bancaria-->
<div class="sidebar-heading">
    Numero de cuenta bancaria
</div>
<div class="form-group">
    <input type="text" name="CuentaBancaria" class="form-control form-control-user" placeholder=""
    value="<?php if(isset($row)) { echo $row['CuentaBancaria']; } ?>">
</div>