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
        <link rel="stylesheet" <link rel="stylesheet" href="../../css/spur.css" type="text/css">
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
                            <a href="#" class="dash-nav-dropdown-item">Modificar</a>
                            <a href="admin-eliminar.php" class="dash-nav-dropdown-item">Eliminar</a>
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
                    <header>
            </div>

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

                    <div class="row">
                        <div class="col">
                            <h5 class="dash-title">Datos Personales</h5>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col-xs-5">RUT</th>
                                        <th scope="col">FECHA NACIMIENTO</th>
                                        <th scope="col">NOMBRE</th>
                                        <th scope="col">APELLIDO PATERNO</th>
                                        <th scope="col">APELLIDO MATERNO</th>
                                        <th scope="col">TELEFONO FIJO</th>
                                        <th scope="col">TELEFONO MOVIL</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">DOMICILIO PARTICULAR</th>
                                        <th scope="col">REGION</th>
                                        <th scope="col">PROVINCIA</th>
                                        <th scope="col">COMUNA</th>
                                        <th scope="col">ACCIONES</th>
                                        <th scope="col">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                    
                                        $sql="SELECT PER.RUT, PER.NOMBRE,PER.FECHA_NACIMIENTO,PER.APELLIDO_PA, PER.APELLIDO_MA, PER.TELEFONO_RED_FIJA,PER.TELEFONO,PER.CORREO_ELECTRONICO,PER.DOMICILIO_PARTICULAR, rg.REGION_NOMBRE, rg.REGION_ID,pr.PROVINCIA_NOMBRE, cm.COMUNA_NOMBRE FROM persona PER INNER JOIN region rg INNER JOIN provincia pr INNER JOIN comuna cm WHERE PER.REGION_ID=rg.REGION_ID AND rg.REGION_ID=PER.REGION_ID and PER.PROVINCIA_ID=pr.PROVINCIA_ID and pr.PROVINCIA_ID=PER.PROVINCIA_ID AND cm.COMUNA_ID = PER.COMUNA_ID";
                                        $result=mysqli_query($con,$sql);
                    
                                        while($mostrar=mysqli_fetch_array($result)){
                                        ?>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><?php echo $mostrar['RUT']?></td>
                                        <td><?php echo $mostrar['FECHA_NACIMIENTO']?></td>
                                        <td><?php echo $mostrar['NOMBRE']?></td>
                                        <td><?php echo $mostrar['APELLIDO_PA']?></td>
                                        <td><?php echo $mostrar['APELLIDO_MA']?></td>
                                        <td><?php echo $mostrar['TELEFONO_RED_FIJA']?></td>
                                        <td><?php echo $mostrar['TELEFONO']?></td>
                                        <td><?php echo $mostrar['CORREO_ELECTRONICO']?></td>
                                        <td><?php echo $mostrar['DOMICILIO_PARTICULAR']?></td>
                                        <td><?php echo $mostrar['REGION_NOMBRE']?></td>
                                        <td><?php echo $mostrar['PROVINCIA_NOMBRE']?></td>
                                        <td><?php echo $mostrar['COMUNA_NOMBRE']?></td>
                                        <th>
                                            <a
                                                href="admin-mod-datosP.php?RUT=<?php echo $mostrar['RUT']?>">MODIFICAR</a>
                                        </th>
                                        <th>
                                            <a
                                                href="eliminar-operador.php?RUT=<?php echo $mostrar['RUT']?>">ELIMINAR</a>
                                        </th>
                                        <!--boton para eliminar-->
                                    </tr>
                                    <?php
                                            }
                                        ?>
                                </tbody>
                            </table>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h5 class="dash-title">Datos de Usuario</h5>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col-xs-5">RUT</th>
                                        <th scope="col">NOMBRE USUARIO</th>
                                        <th scope="col">FECHA CREACION USUARIO</th>
                                        <th scope="col">PRIVILEGIOS</th>
                                        <th scope="col">INSTITUCION</th>
                                        <th scope="col">ACCIONES</th>
                                        <th scope="col">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql = "SELECT RUT, NOMBRE_USUARIO, FECHA_CREACION_USUARIO, PREVILEGIOS, INSTITUCION FROM usuario";
                                            // $sql="SELECT PER.RUT, PER.NOMBRE,PER.FECHA_NACIMIENTO,PER.APELLIDO_PA, PER.APELLIDO_MA, PER.TELEFONO_RED_FIJA,PER.TELEFONO,PER.CORREO_ELECTRONICO,PER.DOMICILIO_PARTICULAR, rg.REGION_NOMBRE, rg.REGION_ID,pr.PROVINCIA_NOMBRE, cm.COMUNA_NOMBRE FROM persona PER INNER JOIN region rg INNER JOIN provincia pr INNER JOIN comuna cm WHERE PER.REGION_ID=rg.REGION_ID AND rg.REGION_ID=PER.REGION_ID and PER.PROVINCIA_ID=pr.PROVINCIA_ID and pr.PROVINCIA_ID=PER.PROVINCIA_ID AND cm.COMUNA_ID = PER.COMUNA_ID";
                                        $result=mysqli_query($con,$sql);

                                        while($mostrar=mysqli_fetch_array($result)){
                                    ?>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><?php echo $mostrar['RUT']?></td>
                                            <td><?php echo $mostrar['NOMBRE_USUARIO']?></td>
                                            <td><?php echo $mostrar['FECHA_CREACION_USUARIO']?></td>
                                            <td><?php echo $mostrar['PREVILEGIOS']?></td>
                                            <td><?php echo $mostrar['INSTITUCION']?></td>
                                            <th>
                                                <a href="form-mod/admin-mod-usuario.php?RUT=<?php echo $mostrar['RUT']?>">MODIFICAR</a>
                                            </th>
                                            <th>
                                            <a href="eliminar-operador.php?RUT=<?php echo $mostrar['RUT']?>">ELIMINAR</a>
                                            </th>
                                             <!--boton para eliminar-->
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h5 class="dash-title">Datos de Institucion</h5>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col-xs-5">NOMBRE INSTITUCION</th>
                                        <th scope="col">JEFE DE INSTITUCION</th>
                                        <th scope="col">ACCIONES</th>
                                        <th scope="col">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql = "SELECT * FROM institución";
                                            // $sql="SELECT PER.RUT, PER.NOMBRE,PER.FECHA_NACIMIENTO,PER.APELLIDO_PA, PER.APELLIDO_MA, PER.TELEFONO_RED_FIJA,PER.TELEFONO,PER.CORREO_ELECTRONICO,PER.DOMICILIO_PARTICULAR, rg.REGION_NOMBRE, rg.REGION_ID,pr.PROVINCIA_NOMBRE, cm.COMUNA_NOMBRE FROM persona PER INNER JOIN region rg INNER JOIN provincia pr INNER JOIN comuna cm WHERE PER.REGION_ID=rg.REGION_ID AND rg.REGION_ID=PER.REGION_ID and PER.PROVINCIA_ID=pr.PROVINCIA_ID and pr.PROVINCIA_ID=PER.PROVINCIA_ID AND cm.COMUNA_ID = PER.COMUNA_ID";
                                        $result=mysqli_query($con,$sql);

                                        while($mostrar=mysqli_fetch_array($result)){
                                    ?>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><?php echo $mostrar['NOMBRE_INSTITUCION']?></td>
                                            <td><?php echo $mostrar['USUARIO_JEFE']?></td>
                                            <th>
                                                <a href="admin-modificaciones.php?RUT=<?php echo $mostrar['RUT']?>">MODIFICAR</a>
                                            </th>
                                            <th>
                                                <a href="eliminar-operador.php?RUT=<?php echo $mostrar['RUT']?>">ELIMINAR</a>
                                            </th>
                                             <!--boton para eliminar-->
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>            
                        </div>
                    </div>
                </div>
            </main>
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
