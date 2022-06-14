<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargos</title>
    <script src="https://code.jquery.com/jquery-1.12.1.js" type="text/javascript">
    </script>
    <script src="js/jquery-1.12.1.js"></script>
</head>
    <body>
        <!--Descripcion de Cargo-->
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="sidebar-heading">
                    Nombre del Cargo
                </div>
                <div class="form-group">
                    <input type="" name="DescripcionCargo" class="form-control form-control-user"
                    aria-describedby="emailHelp" placeholder="" 
                    value="<?php if(isset($row)) { echo $row['DescripcionCargo']; } ?>" required readonly>
                </div>
            </div>

            <!--Salario-->
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="sidebar-heading">
                    Salario
                </div>
                <div class="form-group">
                    <input type="" name="Salario" class="form-control form-control-user"
                    aria-describedby="emailHelp" placeholder="" 
                    value="<?php if(isset($row)) { echo $row['Salario']; } ?>" required readonly>
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
                        <select class="custom-select form-control" name="Departamentos_idDepartamentos" id="Departamentos_idDepartamentos" readonly>
                            <?php while ($ex = mysqli_fetch_assoc($table)) { ?>
                                <option value="none" selected disabled hidden>Select an Option</option>
                                <option value="<?php echo $ex['idDepartamentos']; ?>"><?php echo $ex['DescripcionDepto']; ?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
            </div>
        </div>

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
    </body>
</html>