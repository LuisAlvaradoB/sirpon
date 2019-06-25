<?php 
    include'../../../inc/conexion.php';
    $query = mysqli_query($con, "SELECT * FROM region");
    $query1 = mysqli_query($con, "SELECT * FROM institución");
?>
<!doctype html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700"
            type="text/css">
        <link rel="stylesheet" <link rel="stylesheet" href="../../../css/spur.css" type="text/css">
        <link rel="stylesheet" href="../../../css/style.css" type="text/css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"
            type="application/javascript"></script>
        <script src="../../../js/chart-js-config.js" type="application/javascript"></script>
        <title>SIRPON</title>
    </head>

    <body>
        <div class="dash">
            <div class="dash-nav dash-nav-dark">
                <!-- Logo -->
                <header>
                    <a href="#!" class="menu-toggle">
                        <i class="fas fa-bars"></i>
                    </a>
                    <a href="#" class="spur-logo"><i class="far fa-eye"></i><span>SIRPON</span></a>
                </header>
                <!-- Sidebar de Navegacion -->
                <nav class="dash-nav-list">
                    <a href="../../../page-administrador.php" class="dash-nav-item">
                        <i class="fas fa-home"></i> Inicio </a>
                    <div class="dash-nav-dropdown show">
                        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                            <i class="far fa-edit"></i>Registros</a>
                        <div class="dash-nav-dropdown-menu">
                            <a href="../admin-registros.php" class="dash-nav-dropdown-item">Registrar</a>
                            <a href="#" class="dash-nav-dropdown-item">Modificar</a>
                            <!-- <a href="../admin-eliminar.php" class="dash-nav-dropdown-item">Eliminar</a> -->
                        </div>
                    </div>

                    <div class="dash-nav-dropdown ">
                        <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
                            <i class="fas fa-database"></i>Mantenimiento</a>
                        <div class="dash-nav-dropdown-menu">
                            <a href="../../proceso-mantenimiento/admin-mantenimiento.php"
                                class="dash-nav-dropdown-item">Base de datos</a>
                        </div>
                    </div>
                    <!-- <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-info"></i> About </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="https://github.com/HackerThemes/spur-template" target="_blank"
                            class="dash-nav-dropdown-item">GitHub</a>
                        <a href="http://hackerthemes.com" target="_blank"
                            class="dash-nav-dropdown-item">HackerThemes</a>
                    </div>
                </div> -->
                </nav>
                <!-- fin navbar -->
            </div>

            <div class="dash-app">
                <header class="dash-toolbar">
                    <!-- Boton Hambuerguesa -->
                    <a href="#!" class="menu-toggle">
                        <i class="fas fa-bars"></i>
                    </a>
                    <!-- Iconos Derecha -->
                    <div class="tools">
                        <!-- <a href="https://github.com/HackerThemes/spur-template" target="_blank" class="tools-item">
                        <i class="fab fa-github"></i>
                    </a> -->
                        <!-- <a href="#!" class="tools-item">
                        <i class="fas fa-bell"></i>
                        <i class="tools-item-count">4</i>
                    </a> -->
                        <div class="dropdown tools-item">
                            <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                <!-- <a class="dropdown-item" href="#!">Profile</a> -->
                                <a class="dropdown-item" href="index.php">Cerrar Sesión</a>
                            </div>
                        </div>
                    </div>
                </header>


                <main class="dash-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <h2 class="text-center dash-title font-weight-bold text-uppercase">Sistema Integrado de
                                    Registro para la
                                    Prevención Online</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4 class="dash-title"> Modificar Usuarios / Instituciones</h4>
                            </div>
                            <div class="col">
                                <h4 class="dash-title text-right" id="fechaActual+reloj"></h4>
                            </div>
                        </div>
                        <hr>
                        <!-- put your rows / columns here -->
                        <?php
                            $Rut=$_REQUEST['RUT'];
                            $sql="SELECT * FROM usuario WHERE RUT='$Rut'";
                            $result=mysqli_query($con,$sql);
                            $datosPersona=$result ->fetch_assoc();
                        ?>
                        <!-- Formulario Usuario -->
                        <div class="row">
                            <div class="col-xs-12 col-lg-6">
                                <div class="card spur-card">
                                    <div class="card-header">
                                        <div class="spur-card-icon">
                                            <i class="fas fa-user-edit"></i>
                                        </div>
                                        <div class="spur-card-title"> Usuarios </div>
                                    </div>
                                    <div class="card-body ">
                                        <form id="form-Usuarios" method="POST" action="../modificar-bd.php">
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="RutUsuario">Rut usuario nuevo</label>
                                                    <input type="text" minlength="10" maxlength="10"
                                                        class="form-control" name="RutUsuario" id="RutUsuario"
                                                        placeholder="" oninput="checkRut(this)" value="<?php echo $datosPersona['RUT'];?>" required>
                                                    <script src="../../../js/validar-rut.js"></script>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Nombre de Usuario</label>
                                                    <input type="nickname" class="form-control" name="nombre_usuario"
                                                        placeholder="BeastMaster69" value="<?php echo $datosPersona['NOMBRE_USUARIO'];?>" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Contraseña</label>
                                                    <div class="input-group">
                                                        <input type="password" class="form-control" name="password"
                                                            placeholder="Ingrese Contraseña" id="password" required>
                                                        <div class="input-group-append">
                                                            <button id="show_password" class="btn btn-primary"
                                                                type="button" onclick="mostrarPassword()"> <span
                                                                    class="fa fa-eye-slash icon"></span> </button>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" onclick="mostrarContraseña()"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="contraseña">Mostrar
                                                                Contraseña</label>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="fecha_nacimiento">Fecha de Registro</label>
                                                    <input type="date" class="form-control" placeholder="Ingresa Fecha"
                                                        name="fechaNacimientoUsuario" value="<?php echo $datosPersona['FECHA_CREACION_USUARIO'];?>" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Privilegios</label>
                                                    <select class="form-control" name="privilegio">
                                                        <option ><?php echo $datosPersona['PREVILEGIOS'];?></option>
                                                        <!-- <option selected>Selecciona Privilegios</option> -->
                                                        <option>Administrador</option>
                                                        <option>Jefe de Zona</option>
                                                        <option>Operador</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="instituciones">Institución a la que pertence</label>
                                                    <select id="instituciones" name="institucion" class="form-control">
                                                        <option value="<?php echo $datosPersona['INSTITUCION_ID'];?>"><?php echo $datosPersona['INSTITUCION'];?></option>
                                                        <!-- <option selected>Selecciona Institución</option> -->
                                                        <?php
                                                            while ($datos = mysqli_fetch_array($query1)) {
                                                        ?>
                                                        <option value="<?php echo $datos['INSTITUCION_ID']?>">
                                                            <?php echo $datos['NOMBRE_INSTITUCION'] ?> </option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                 <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck4">
                                                    <label class="custom-control-label" for="customCheck4">Check this
                                                        custom checkbox</label>
                                                </div>
                                            </div> -->
                                            <button type="submit" name="submit2"
                                                class="btn btn-primary btn-block my-4">Modificar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.4.1.js" type="application/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            type="application/javascript"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            type="application/javascript"></script>
        <script src="../../../js/spur.js" type="application/javascript"></script>
        <script src="../../../js/reloj.js" type="application/javascript"></script>

    </body>

</html>
<!-- Funciones para Actualizar los combobox region-provincia-comuna -->
<script type="text/javascript">
$(document).ready(function() {
    $('#region').on('change', function() {
        var regionID = $('#region').val();
        if (regionID) {
            $.ajax({
                type: 'POST',
                url: 'ajaxDatos.php',
                data: 'regionID=' + regionID,
                success: function(html) {
                    $('#provincia').html(html);
                    $('#comuna').html(
                        '<option value="">Selecciona Provincia primero</option>');
                }
            });
        } else {
            $('#provincia').html('<option value="">2</option>');
            $('#comuna').html('<option value="">3</option>');
        }
    });

    $('#provincia').on('change', function() {
        var provinciaID = $('#provincia').val();
        if (provinciaID) {
            $.ajax({
                type: 'POST',
                url: 'ajaxDatos.php',
                data: 'provinciaID=' + provinciaID,
                success: function(html) {
                    $('#comuna').html(html);
                }
            });
        } else {
            $('#comuna').html('<option value="">Selecciona provincia</option>');
        }
    });
});
</script>
<!-- --------------------------------------------------------------------------- -->
<!-- Funcion para mostrar la contraseña -->
<script>
function mostrarPassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
<!-- ----------------------------------- -->