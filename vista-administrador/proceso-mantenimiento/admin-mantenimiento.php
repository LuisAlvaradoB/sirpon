<!doctype html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700"
            type="text/css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
        <link rel="stylesheet" href="../../css/spur.css" type="text/css">


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
                    <div class="dash-nav-dropdown show ">
                        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                            <i class="far fa-edit"></i>Registros</a>
                        <div class="dash-nav-dropdown-menu">
                            <a href="../proceso-registro/admin-registros.php" class="dash-nav-dropdown-item">Registrar</a>
                            <a href="../proceso-registro/admin-modificaciones.php"
                                class="dash-nav-dropdown-item">Modificar</a>
                            <a href="../proceso-registro/admin-eliminar.php"
                                class="dash-nav-dropdown-item">Eliminar</a>
                        </div>
                    </div>

                    <div class="dash-nav-dropdown show">
                        <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
                            <i class="fas fa-database"></i>Mantenimiento</a>
                        <div class="dash-nav-dropdown-menu">
                            <a href="#"
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
                                <a class="dropdown-item" href="login.php">Cerrar Sesión</a>
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
                                <h4 class="dash-title">Tareas de Mantenimiento</h4>
                            </div>
                            <div class="col">
                            <h4 class="dash-title text-right" id="fechaActual+reloj"></h4>
                            </div>
                        </div>
                        <hr>
                        <!-- put your rows / columns here -->
                        <div class="row">
                            <div class="col">
                                <h5 class="mb-3">Copia de Seguridad</h5>
                                <p>
                                Una copia de seguridad, respaldo, en ciencias de la información e informática es una copia de los datos originales que se realiza con el fin de disponer de un medio para recuperarlos en caso de su pérdida. Las copias de seguridad son útiles ante distintos eventos y usos: recuperar los sistemas informáticos y los datos de una catástrofe informática, natural o ataque; restaurar una pequeña cantidad de archivos que pueden haberse eliminado accidentalmente, corrompido, infectado por un virus informático u otras causas; guardar información histórica de forma más económica que los discos duros y además permitiendo el traslado a ubicaciones distintas de la de los datos originales; etc. 
                                <br>
                                <br>
                                - El sistema dispone la opción para hacer un respaldo total de la base de datos SIRPON, mediante un solo click en el boton de respaldar, (Se utiliza la herramienta provista por MySQL "mysqldump"). <br>
                                - El archivo generado es un dump SQL que contiene todos los datos y estructura de la base de datos. <br>
                                - El archivo se guardara en la carpeta Respaldos segun la fecha correspondiente. <br>
                                - Queda al criterio del Administrador que hacer con el archivo SQL, si lo guardara en otro medio de almacenamiento o no.    


                                </p>
                                <button type="submit" class="btn btn-primary btn-lg float-right">Respaldar</button>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <h5 class="mb-3">Optimización de tablas</h5>
                                <p>
                                El flujo de información en una gran base de datos suele ser constante, por lo tanto, ésta debe de ser organizada de forma óptima.

                                Lo que hacen los comandos de optimización de base de datos es reorganizar el almacenamiento físico de los datos de las tablas y sus índices asociados, de este modo se reduce el espacio que necesitan y mejora considerablemente las consultas y el tiempo de acceso a la información.
                                </p>
                                <button type="submit" class="btn btn-primary btn-lg float-right">Optimizar</button>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" type="application/javascript"></script>
        <script type="application/javascript" src="../../js/moment.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            type="application/javascript"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            type="application/javascript"></script>
        <script src="../../js/spur.js" type="application/javascript"></script>
        <script type="application/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js">
        </script>
        <script src="../../js/reloj.js" type="application/javascript"></script>

    </body>

</html>