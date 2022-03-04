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
        <!--Descripcion de Ciudades-->
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="sidebar-heading">
                    Nombre de la ciudad
                </div>
                <div class="form-group">
                    <input type="" name="DescripcionCiudad" class="form-control form-control-user"
                    aria-describedby="emailHelp" placeholder="" 
                    value="<?php if(isset($row)) { echo $row['DescripcionCiudad']; } ?>" required>
                </div>
            </div>

    </body>
</html>