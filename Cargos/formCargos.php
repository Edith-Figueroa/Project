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
        <!--Descripcion de Cargo-->
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="sidebar-heading">
                    Nombre del Cargo
                </div>
                <div class="form-group">
                    <input type="" name="DescripcionCargo" class="form-control form-control-user"
                    aria-describedby="emailHelp" placeholder="" 
                    value="<?php if(isset($row)) { echo $row['DescripcionCargo']; } ?>" required>
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
                    value="<?php if(isset($row)) { echo $row['Salario']; } ?>" required>
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
                    <select class="custom-select form-control" name="Departamentos_idDepartamentos" id="Departamentos_idDepartamentos">
                        <?php while ($ex = mysqli_fetch_assoc($table)) { ?>
                            <option value="none" selected disabled hidden>Select an Option</option>
                            <option value="<?php echo $ex['idDepartamentos']; ?>"><?php echo $ex['DescripcionDepto']; ?></option>
                        <?php }?>
                    </select>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>