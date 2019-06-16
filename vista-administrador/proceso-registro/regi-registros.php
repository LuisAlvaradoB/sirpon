<?php include 'C:\xampp\htdocs\sirpon\head.php'; ?>

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
                <div class="dash-nav-dropdown show">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="far fa-edit"></i>Registros</a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="#" class="dash-nav-dropdown-item">Registrar</a>
                        <a href="/vista-administrador/proceso-registro/mod-registros.php" class="dash-nav-dropdown-item">Modificar</a>
                        <a href="/vista-administrador/proceso-registro/elimi-registros.php" class="dash-nav-dropdown-item">Eliminar</a>
                    </div>
                </div>

                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-user"></i> Usuarios </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="vista-administrador/proceso-usuarios/regi-usuarios.php" class="dash-nav-dropdown-item">Registrar</a>
                        <a href="vista-administrador/proceso-usuarios/mod-usuarios.php" class="dash-nav-dropdown-item">Modificar</a>
                        <a href="vista-administrador/proceso-usuarios/elimi-usuarios.php" class="dash-nav-dropdown-item">Eliminar</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown ">
                    <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-database"></i>Mantenimiento</a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="vista-administrador/proceso-mantenimiento/mantenimiento-respaldo-bd.php" class="dash-nav-dropdown-item">Respaldo</a>
                        <a href="vista-administrador/proceso-mantenimiento/optimizacion-bd.php" class="dash-nav-dropdown-item">Optimización</a>
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
                    <h1 class="dash-title">Registros de Instituciones y Perfil Jefe de Zona</h1>
                    <!-- put your rows / columns here -->
                    DESDE REGISTRO
                    
                </div>
            </main>
        </div>
    </div>
    <?php include 'C:\xampp\htdocs\sirpon\footer.php'; ?>