<!doctype html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700"
            type="text/css">
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
                    <a href="#" class="dash-nav-item">
                        <i class="fas fa-home"></i> Inicio </a>
                    <div class="dash-nav-dropdown ">
                        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                            <i class="far fa-edit"></i>Registros</a>
                        <div class="dash-nav-dropdown-menu">
                            <a href="vista-administrador/proceso-registro/admin-registros.php"
                                class="dash-nav-dropdown-item">Registrar</a>
                            <a href="vista-administrador/proceso-registro/admin-modificaciones.php"
                                class="dash-nav-dropdown-item">Modificar</a>
                            <a href="#"
                                class="dash-nav-dropdown-item">Eliminar</a>
                        </div>
                    </div>

                    <div class="dash-nav-dropdown ">
                        <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
                            <i class="fas fa-database"></i>Mantenimiento</a>
                        <div class="dash-nav-dropdown-menu">
                            <a href="vista-administrador/proceso-mantenimiento/mantenimiento-respaldo-bd.php"
                                class="dash-nav-dropdown-item">Respaldo</a>
                            <a href="vista-administrador/proceso-mantenimiento/optimizacion-bd.php"
                                class="dash-nav-dropdown-item">Optimización</a>
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
                                <h2 class="text-center dash-title font-weight-bold text-uppercase">Sistema Integrado de Registro para la
                                Prevención Online</h2>
                            </div>
                        </div>
                        
                            <div class="row">
                                <div class="col">
                                    <h4 class="dash-title">Bienvenido Administrador</h4>
                                </div>
                                <div class="col">
                                    <h4 class="dash-title text-right">
                                        15/06/2019 - 20:27 hrs
                                    </h4>
                                </div>
                            </div>
                        
                        <!-- put your rows / columns here -->
                        <div class="row dash-row">
                            <div class="col-xl-4">
                                <div class="stats stats-primary">
                                    <h3 class="stats-title"> Cantidad de Usuarios </h3>
                                    <div class="stats-content">
                                        <div class="stats-icon">
                                            <i class="fas fa-user-friends"></i>
                                        </div>
                                        <div class="stats-data">
                                            <div class="stats-number">7</div>
                                            <!-- <div class="stats-change">
                                                <span class="stats-percentage">+25%</span>
                                                <span class="stats-timeframe">from last month</span>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="stats stats-success ">
                                    <h3 class="stats-title"> Cantidad de Instituciones </h3>
                                    <div class="stats-content">
                                        <div class="stats-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="stats-data">
                                            <div class="stats-number">4</div>
                                            <!-- <div class="stats-change">
                                                <span class="stats-percentage">+17.5%</span>
                                                <span class="stats-timeframe">from last month</span>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="stats stats-danger">
                                    <h3 class="stats-title"> Cantidad de Jefe de Zona </h3>
                                    <div class="stats-content">
                                        <div class="stats-icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="stats-data">
                                            <div class="stats-number">2</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card spur-card">
                                    <div class="card-header">
                                        <div class="spur-card-icon">
                                            <i class="fas fa-chart-bar"></i>
                                        </div>
                                        <div class="spur-card-title"> Bar Chart </div>
                                        <div class="spur-card-menu">
                                            <div class="dropdown show">
                                                <a class="spur-card-menu-link" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body spur-card-body-chart">
                                        <canvas id="spurChartjsBar"></canvas>
                                        <script>
                                        var ctx = document.getElementById("spurChartjsBar").getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'bar',
                                            data: {
                                                labels: ["Monday", "Tuesday", "Wednesday", "Thursday",
                                                    "Friday"],
                                                datasets: [{
                                                    label: 'Blue',
                                                    data: [12, 19, 3, 5, 2],
                                                    backgroundColor: window.chartColors.primary,
                                                    borderColor: 'transparent'
                                                }]
                                            },
                                            options: {
                                                legend: {
                                                    display: false
                                                },
                                                scales: {
                                                    yAxes: [{
                                                        ticks: {
                                                            beginAtZero: true
                                                        }
                                                    }]
                                                }
                                            }
                                        });
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card spur-card">
                                    <div class="card-header">
                                        <div class="spur-card-icon">
                                            <i class="fas fa-bell"></i>
                                        </div>
                                        <div class="spur-card-title"> Notifications </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="notifications">
                                            <a href="#!" class="notification">
                                                <div class="notification-icon">
                                                    <i class="fas fa-inbox"></i>
                                                </div>
                                                <div class="notification-text">New comment</div>
                                                <span class="notification-time">21 days ago</span>
                                            </a>
                                            <a href="#!" class="notification">
                                                <div class="notification-icon">
                                                    <i class="fas fa-inbox"></i>
                                                </div>
                                                <div class="notification-text">New comment</div>
                                                <span class="notification-time">21 days ago</span>
                                            </a>
                                            <a href="#!" class="notification">
                                                <div class="notification-icon">
                                                    <i class="fas fa-inbox"></i>
                                                </div>
                                                <div class="notification-text">New comment</div>
                                                <span class="notification-time">21 days ago</span>
                                            </a>
                                            <div class="notifications-show-all">
                                                <a href="#!">Show all</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" type="application/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            type="application/javascript"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            type="application/javascript"></script>
        <script src="../../js/spur.js" type="application/javascript"></script>
    </body>

</html>