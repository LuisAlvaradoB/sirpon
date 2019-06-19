<?php include 'head.php'; ?>

<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <!-- Logo -->
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="" class="spur-logo"><i class="far fa-eye"></i><span>SIRPON</span></a>
            </header>
            <!-- Sidebar de Navegacion -->
            <nav class="dash-nav-list">
                <a href="" class="dash-nav-item">
                    <i class="fas fa-home"></i> home </a>
                <div class="dash-nav-dropdown ">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="far fa-edit"></i> Registros </a>
                    <div class="dash-nav-dropdown-menu">
                        <div class="dash-nav-dropdown ">
                            <a href="#" class="dash-nav-dropdown-item dash-nav-dropdown-toggle">Registrar</a>
                            <div class="dash-nav-dropdown-menu">
                                <a href="form-sector.php" class="dash-nav-dropdown-item">Sectores</a>
                                <a href="registro.php" class="dash-nav-dropdown-item">Operadores</a>
                                
                            </div>
                        </div>
                        <div class="dash-nav-dropdown ">
                            <a href="#" class="dash-nav-dropdown-item dash-nav-dropdown-toggle">Modificar</a>
                            <div class="dash-nav-dropdown-menu">
                                <a href="icons.html#regular-icons" class="dash-nav-dropdown-item">Sectores</a>
                                <a href="icons.html#brand-icons" class="dash-nav-dropdown-item">Operador</a>
                            </div>
                        </div>
                        <div class="dash-nav-dropdown ">
                            <a href="#" class="dash-nav-dropdown-item dash-nav-dropdown-toggle">Eliminar</a>
                            <div class="dash-nav-dropdown-menu">
                                <a href="icons.html#regular-icons" class="dash-nav-dropdown-item">Sectores</a>
                                <a href="icons.html#brand-icons" class="dash-nav-dropdown-item">Operadores</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dash-nav-dropdown show">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-user"></i>Reportes</a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="blank.html" class="dash-nav-dropdown-item">Delincuentes</a>
                        <a href="content.html" class="dash-nav-dropdown-item">Zona de Riesgos</a>
                        <a href="login.html" class="dash-nav-dropdown-item">Delitos</a>
                    </div>
                </div>
                
                
            </nav>
            <!-- fin navbar -->
        </div>



        
        <div class="dash-app">
            <header class="dash-toolbar">
                <!-- Boton Hambuerguesa -->
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
              
                <div class="tools">
                
                    <div class="dropdown tools-item">
                        <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <span>Felipe</span>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <!-- <a class="dropdown-item" href="#!">Profile</a> -->
                            <a class="dropdown-item" href="login.php">Cerrar Sesión</a>
                        </div>
                    </div>
                </div>
            </header>
            
                      
        </div>
    </div>
    <?php include 'footer.php'; ?>