<?php 
    include'../../inc/conexion.php';
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
        
        <link rel="stylesheet" href="../../css/spur.css" type="text/css">
        <link rel="stylesheet" href="../../css/style.css" type="text/css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"
            type="application/javascript"></script>
        <script src="../../js/chart-js-config.js" type="application/javascript"></script>
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
                    <a href="../../page-administrador.php" class="dash-nav-item">
                        <i class="fas fa-home"></i> Inicio </a>
                    <div class="dash-nav-dropdown show">
                        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                            <i class="far fa-edit"></i>Registros</a>
                        <div class="dash-nav-dropdown-menu">
                            <a href="admin-registros.php" class="dash-nav-dropdown-item">Registrar</a>
                            <a href="admin-modificaciones.php"
                                class="dash-nav-dropdown-item">Modificar</a>
                            <a href="#"
                                class="dash-nav-dropdown-item">Eliminar</a>
                        </div>
                    </div>

                    <div class="dash-nav-dropdown ">
                        <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
                            <i class="fas fa-database"></i>Mantenimiento</a>
                        <div class="dash-nav-dropdown-menu">
                            <a href="../proceso-mantenimiento/admin-mantenimiento.php"
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
                    <!-- Barra de Busqueda -->
                    <!-- <a href="#!" class="searchbox-toggle">
                        <i class="fas fa-search"></i>
                    </a>
                    <form class="searchbox" action="#!">
                        <a href="#!" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
                        <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>
                        <input type="text" class="searchbox-input" placeholder="type to search">
                    </form> -->
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
                                <h4 class="dash-title">Eliminar Usuarios / Instituciones</h4>
                            </div>
                            <div class="col">
                            <h4 class="dash-title text-right" id="fechaActual+reloj"></h4>
                            </div>
                        </div>
                        <hr>
                        <!-- put your rows / columns here -->
                        <div class="row">
                            <!-- Barra de Busqueda -->
                            <div class="col-md-9 my-4">
                                <a href="#!" class="searchbox-toggle">
                                    <i class="fas fa-search"></i>
                                </a>
                                <form class="searchbox" action="#!">
                                    <a href="#!" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
                                    <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i>
                                    </button>
                                    <input type="text" class="searchbox-input" placeholder="Buscar">
                                </form>
                            </div>
                            <div class="col-md-3 my-4">
                            <button type="submit"
                                                class="btn btn-primary btn-block btn-lg">Buscar</button>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-xs-12 col-lg-12">
                                <div class="card spur-card">
                                    <div class="card-header">
                                        <div class="spur-card-icon">
                                            <i class="fas fa-user-edit"></i>
                                        </div>
                                        <div class="spur-card-title"> Datos personales </div>
                                    </div>
                                    <div class="card-body ">
                                        <form class="">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="Rut">Rut</label>
                                                    <input type="text" minlength="10" maxlength="10"
                                                        class="form-control" id="Rut" placeholder="18545175-k" required oninput="checkRut(this)" required>
                                                        <script src="../../js/validar-rut.js"></script>
                                                </div>
                                                
                                                <!-- <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Fecha de Nacimiento</label>
                                                    <input type="fecha_nacimiento" class="form-control"
                                                        id="fecha_nacimiento" placeholder="Password">
                                                </div> -->
                                                <div class="form-group col-md-6">
                                                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                                    <input type="date" class="form-control" placeholder="Ingresa Fecha"
                                                        name="fechaNacimiento" id="fechaNacimiento" required>
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for=" ">Nombre</label>
                                                    <input type="text" pattern="[a-zA-Z]+" class="form-control"
                                                        id="nombre_persona" placeholder="Jorge" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Segundo Nombre</label>
                                                    <input type="text" pattern="[a-zA-Z]+" class="form-control"
                                                        id="nombre_persona2" placeholder="Andrés" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Apellido Paterno</label>
                                                    <input type="text" pattern="[a-zA-Z]+" class="form-control"
                                                        id="apellidop_persona" placeholder="Gonzales" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Apellido Materno</label>
                                                    <input type="text" pattern="[a-zA-Z]+" class="form-control"
                                                        id="apellidom_persona" placeholder="Delgado" required>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label for="">Teléfono Fijo</label>
                                                    <input type="tel" minlength="9" pattern="[0-9]{9}"
                                                        class="form-control" id="telefono_fijo"
                                                        placeholder="51 2 45 58 69">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="">Teléfono Móvil</label>
                                                    <input type="tel" minlength="9" pattern="[0-9]{9}"
                                                        class="form-control" id="telefono_movil"
                                                        placeholder="9 6130 0066">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Correo Electrónico</label>
                                                    <input type="email" class="form-control" id="correo_electronico"
                                                        placeholder="ejemplo@gmail.com">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="">Dirección Particular</label>
                                                    <input type="text" class="form-control" id="direccion_particular"
                                                        placeholder="Avenida Aguirre #123">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="">Región</label>
                                                    <select class="form-control" id="region" name="region">
                                                        <option selected>Selecciona Región</option>
                                                        <?php
                                                        while ($datos = mysqli_fetch_array($query)) {
                                                        ?>
                                                        <option value="<?php echo $datos['REGION_ID']?>">
                                                            <?php echo $datos['REGION_NOMBRE'] ?> </option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">Provincia</label>
                                                    <select class="form-control" id="provincia" name="provincia">
                                                        <option>Selecciona Provincia</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">Comuna</label>
                                                    <select class="form-control" id="comuna" name="comuna">
                                                        <option>Selecciona Comuna</option>
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

                                            <!-- <button type="submit" class="btn btn-primary btn-block my-4">Registrar</button> -->
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
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
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Nombre de Usuario</label>
                                                    <input type="nickname" class="form-control" id="nombre_usuario"
                                                        placeholder="BeastMaster69">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Contraseña</label>
                                                    <input type="password" class="form-control" id="contraseña"
                                                        placeholder="Contraseña">
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" onclick="mostrarContraseña()" class="custom-control-input"
                                                                id="mostrar_contraseña">
                                                            <label class="custom-control-label" for="mostrar_contraseña">Mostrar Contraseña</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="fecha_nacimiento">Fecha de Registro</label>
                                                    <input type="date" class="form-control" placeholder="Ingresa Fecha"
                                                        name="fechaNacimientoUsuario">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Privilegios</label>
                                                    <select class="form-control" id="jefeszonas">
                                                        <option selected>Selecciona Privilegios</option>
                                                        <option>Jefe de Zona</option>
                                                        <option>Operador</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="instituciones">Institución a la que pertence</label>
                                                    <select id="instituciones" class="form-control">
                                                        <option selected>Selecciona Institución</option>
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
                                            <button type="submit"
                                                class="btn btn-primary btn-block my-4">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card spur-card">
                                    <div class="card-header">
                                        <div class="spur-card-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="spur-card-title"> Instituciones </div>
                                    </div>
                                    <div class="card-body ">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Nombre de la Institución</label>
                                                    <input type="text" pattern="[a-zA-Z]+" class="form-control" id="nombre_institución"
                                                        placeholder="Seguridad Ciudadana">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Persona a Cargo</label>
                                                    <input type="text" pattern="[a-zA-Z]+" class="form-control" id="persona_acargo"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-primary btn-block my-4">Eliminar</button>
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
        <script src="../../js/spur.js" type="application/javascript"></script>
        <script src="../../js/reloj.js" type="application/javascript"></script>

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
    function mostrarContraseña() {
  var x = document.getElementById("contraseña");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
} 
</script>
<!-- ----------------------------------- -->