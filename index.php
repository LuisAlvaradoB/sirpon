<?php 
    include_once("inc/conexion.php");
    $query = mysqli_query($con, "SELECT * FROM `institución`");
?>


<!doctype html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700"
            type="text/css">
        <link rel="stylesheet" href="css/spur.css" type="text/css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"
            type="application/javascript"></script>
        <script src="js/chart-js-config.js" type="application/javascript"></script>
        <title>SIRPON</title>
    </head>

    <body>
        <div class="form-screen">
            <a href="#" class="spur-logo"><i class="far fa-eye"></i> <span>SIRPON</span></a>
            <div class="card account-dialog">
                <div class="card-header bg-primary text-white"> Iniciar Sesión </div>
                <div class="card-body">
                    <form action="verificacion-login.php" method="POST">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="combobox-institucion">Selecciona Institución</label>
                                <select class="form-control" name="combobox-institucion">
                                    <?php
                                        while ($datos = mysqli_fetch_array($query)) {
                                    ?>
                                
                                    <option value="<?php echo $datos['INSTITUCION_ID']?>" selected="" >
                                        <?php echo $datos['NOMBRE_INSTITUCION'] ?> </option>
                                    <?php
                                         }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nickname">Nombre de Usuario</label>
                            <input type="nickname" class="form-control" id="nickname" name="nickname" aria-describedby="CorreoElectronico"
                                placeholder="Ingrese Nombre de Usuario" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa Contraseña"
                                required>
                        </div>
                        <!-- <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Recuérdame</label>
                            </div>
                        </div> -->
                        <div class="account-dialog-actions">
                            <button name="submit" type="submit" class="btn btn-primary">Ingresar</button>
                            <!-- <a class="account-dialog-link" href="signup.html">Create a new account</a> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" type="application/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            type="application/javascript"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            type="application/javascript"></script>
        <script src="js/spur.js" type="application/javascript"></script>
    </body>

</html>