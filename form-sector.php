<?php include 'head.php';
 include'conexion.php';
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
                <a href="page-jefezona.php" class="dash-nav-item">
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
            
            <main class="dash-content">
                <div class="container-fluid ">
                    <h1 class="dash-title">Formulario de Registro de sectores</h1>
                    <!-- put your rows / columns here -->
                    <div class="spur-card-title">Sectores</div>
                                </div>
                                <div class="card-body ">
                                    <form action="registrosectorbd.php" method="POST" >
                                        <div class="form-group">
                                        <div class="form-group">
                                            <label >NOMBRE SECTOR</label>
                                            <input type="text" class="form-control"  placeholder="ej: la herradura" name="nombre">
                                        </div>
                                        
                                        
                                        <div class="form-row">
     
                                        <div class="form-group col-md-4">
                                                <label >REGION</label>
                                                <select  class="form-control" name="region" >
                                                    <option>hola   </option>
                                                    <option>chao </option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label >PROVINCIA</label>
                                                <select  class="form-control" name="provincia">
                                                <option>hola</option>
                                                    <option>chao </option>
                                                  
                                                </select>
                                            </div>
                                           
                                          <div class="form-group col-md-4">
                                                <label >COMUNA</label>
                                                <select  class="form-control" name="comuna">
                                                <option>hola   </option>
                                                    <option>chao </option>
                                                  
                                                    </select>
                                            </div>  
                                          
</div>
                                        <button type="submit" class="btn btn-primary" name="enviar">REGISTRA DATOS</button>
                                    </form>
                                </div>
                </div>
            </main>
 
         
        </div>
    </div>
    
    <?php include 'footer.php'; ?>