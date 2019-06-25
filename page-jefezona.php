<?php include 'head.php'; 
include 'conexion.php';
?>

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
            <div class="row">
                                <div class="col">
                                    <h4 class="dash-title">Bienvenido Jefe de Zona</h4>
                                </div>
                                <div class="col-md-4">
                               <h4 class="dash-title text-right" id="fechaActual+reloj"></h4>
                                </div>
                            </div>
                            <hr>
                        <!-- put your rows / columns here -->
                        <?php
                        
                        $sql="SELECT * FROM persona";
                        $result=mysqli_query($con,$sql);
                        $cantidad=mysqli_num_rows($result);
                        ?>
                        <div class="row dash-row">
                            <div class="col-xs-4">
                                <div class="stats stats-primary">
                                    <h3 class="stats-title"> Cantidad de Operadores </h3>
                                    <div class="stats-content">
                                        <div class="stats-icon">
                                            <i class="fas fa-user-friends"></i>
                                        </div>
                                        <div class="stats-data">
                                            <div class="stats-number"><?php echo $cantidad;?></div>
                                            <!-- <div class="stats-change">
                                                <span class="stats-percentage">+25%</span>
                                                <span class="stats-timeframe">from last month</span>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        
                        $sql="SELECT * FROM sector";
                        $result=mysqli_query($con,$sql);
                        $cantidad1=mysqli_num_rows($result);
                        ?>
                            <div class="col-xl-4">
                                <div class="stats stats-success ">
                                    <h3 class="stats-title"> Cantidad de sectores </h3>
                                    <div class="stats-content">
                                        <div class="stats-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="stats-data">
                                            <div class="stats-number"><?php echo $cantidad1;?></div>
                                            <!-- <div class="stats-change">
                                                <span class="stats-percentage">+17.5%</span>
                                                <span class="stats-timeframe">from last month</span>
                                            </div> -->
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>
                            <?php
                        
                        $sql="SELECT * FROM usuario";
                        $result=mysqli_query($con,$sql);
                        $cantidad2=mysqli_num_rows($result);
                        ?>
                            <div class="col-xl-4">
                                <div class="stats stats-danger">
                                    <h3 class="stats-title"> Cantidad de usuarios </h3>
                                    <div class="stats-content">
                                        <div class="stats-icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="stats-data">
                                            <div class="stats-number"><?php echo $cantidad2;?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                      
        </div>
    </div>
    <?php include 'footer.php'; ?>