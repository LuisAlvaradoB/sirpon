<?php include 'head.php';
include'conexion.php';
$query2 = mysqli_query($con, "SELECT * FROM comuna");
$query3 = mysqli_query($con, "SELECT * FROM tipo_de_delito");
?>
<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <!-- Logo -->
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="page-operador.php" class="spur-logo"><i class="far fa-eye"></i><span>SIRPON</span></a>
            </header>
            <!-- Sidebar de Navegacion -->
            <nav class="dash-nav-list">
                <a href="page-operador.php" class="dash-nav-item">
                    <i class="fas fa-home"></i> Inicio </a>
                <div class="dash-nav-dropdown ">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="far fa-edit"></i> Ingresar </a>
                    <div class="dash-nav-dropdown-menu">
                        <div class="dash-nav-dropdown ">
                            <a href="#" class="dash-nav-dropdown-item dash-nav-dropdown-toggle">registro</a>
                            <div class="dash-nav-dropdown-menu">
                                <a href="delincuente_form.php" class="dash-nav-dropdown-item">crear ficha</a>
                               
                                <a href="" class="dash-nav-dropdown-item">Buscar Antecedentes</a>
                            </div>
                        </div>
                        
                   
                    </div>
                </div>
                <div class="dash-nav-dropdown show">
                    <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-database"></i>Cerrar Sesión </a>
                   
                    </div>
                </div>
                <div class="dash-app">
            
            <main class="dash-content">
                <div class="container-fluid ">
                    <h1 class="dash-title">Bienvenido - Sistema Integrado de Registro para la Prevención Online</h1>
                    <!-- put your rows / columns here -->
                    <div class="spur-card-title"> Ficha de Antecedentes </div>
                                </div>
                                <div class="card-body ">
                                    <form action="registro-antecedentes.php" method="POST" >
                                        <div class="form-group">
                                        <div class="form-group">
                                            <label >RUT</label>
                                            <input type="text" class="form-control"  name="rut">
                                        </div>
                                       
                                        <div class="form-group">
                                            <label >Dirección del Delito</label>
                                            <input type="text" class="form-control"  placeholder="Dirección Delito" name="direc">
                                        </div>

                                       
                                              
                                        <div class="form-group">
                                            <label >descripcion del delito</label>   
                                         <textarea class="form-control"   rows="3" name="descripcion_delito"></textarea>
                                        </div>
                                        <div class="form-row">
                                        <div class="form-row">

                                                <div class="form-group col-md-3">
                                                    <label >FECHA DEL DELITO</label>
                                                    <input type="date" class="form-control"   name="fecha_delito">
                                                </div>

                                                <div class="form-group col-md-2">
                                                    <label >HORA DEL DELITO</label>
                                                    <input type="time" class="form-control"   name="hora_delito">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label >TIPO DE DELITO</label>
                                                    <select  class="form-control" name="tipo" >
                                                  
                                   <?php
                                    while ($datos = mysqli_fetch_array($query3)) {

                                    ?>
                                     
                                    <option  value="<?php echo $datos['TIPO_DELITO_ID']?>" selected=""><?php echo $datos['NOMBRE_TIPO'] ?> </option>
                                           
                                <?php
                                 }
                                ?>

                            </select>
                                                </div>
                                                <div class="form-group col-md-2">
                                                <label>COMUNA</label>
                                <select class="form-control" name="comuna">
                    
                                   <?php
                                    while ($datos1 = mysqli_fetch_array($query2)) {

                                    ?>
                                     
                                    <option  value="<?php echo $datos1['COMUNA_ID']?>" selected=""><?php echo $datos1['COMUNA_NOMBRE'] ?> </option>

                                <?php
                                 }
                                ?>

                            </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                              
                                                <label >ESTADO DELITO</label>
                                                <input type="text" class="form-control"  placeholder="ESTADO" name="estado_delito">
                                            
                                                  
                                                </div>
                                        <button type="submit" class="btn btn-primary" name="registro">REGISTRA DATOS</button>
                                    </form>
                                </div>
                </div>
            </main>
 
         
        </div>
    </div>
    <?php include 'footer.php'; ?>