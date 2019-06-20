<?php include 'head.php';
include'conexion.php';
$query = mysqli_query($con, "SELECT * FROM region");
$query1 = mysqli_query($con, "SELECT * FROM provincia");
$query2 = mysqli_query($con, "SELECT*  FROM comuna");


?>

<!DOCTYPE html>
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
                                <a href="antecedentes.php" class="dash-nav-dropdown-item">crear nuevo antecedente</a>
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
                    <div class="spur-card-title"> Ficha de Delincuente </div>
                                </div>
                                <div class="card-body ">
                                    <form action="registro-ficha.php" method="POST" >
                                        <div class="form-group">
                                        <div class="form-group">
                                            <label >Rut</label>
                                            <input type="text" class="form-control"  placeholder="ejem 18.700.672-0" name="Rut">
                                        </div>
                                            <label >NOMBRES COMPELTO</label>
                                            <input type="text" class="form-control"  placeholder="Nombre" name="nombre">
                                        </div>
                                        <div class="form-group">
                                            <label >APELLIDO PATERNO</label>
                                            <input type="text" class="form-control"  placeholder="Apellido Paterno" name="ApellidoP">
                                        </div>
                                        <div class="form-group">
                                            <label >APELLIDO MATERNO</label>
                                            <input type="text" class="form-control"  placeholder="Apellido Materno" name="ApellidoM">
                                        </div>
                                       
                                       
                                        <div class="form-group">
                                            <label >DIRECCIÓN DE DOMICILIO PARTICULAR</label>
                                            <input type="text" class="form-control"  placeholder="DIRECCIÓN DE DOMICILIO" name="Direccion_Domicilio">
                                        </div>
                                        <div class="form-row">

                                                <div class="form-group col-md-3">
                                                     <label >FECHA DE NACIMIENTO</label>
                                                     <input type="date" class="form-control"  placeholder="Nombre" name="fechaNacimiento">
                                                </div>
                                     
                                                <div class="form-group col-md-3">
                                                      <label >TELEFONO CELULAR</label>
                                                      <input type="text" class="form-control"  placeholder="+569..." name="num_telefono_celular">
                                                </div>
                                                <div class="form-group col-md-3">
                                                      <label >TELEFONO RED FIJA</label>
                                                      <input type="text" class="form-control"  placeholder="ejem,02 42 46..." name="Telefono_Fijo">
                                                </div>
                                                <div class="form-group col-md-3">
                                                      <label >CORREO ELECTRONICO</label>
                                                      <input type="email" class="form-control"  placeholder="no olvidar @" name="correo">
                                                </div>
                                        </div><!-- div de class form-row de datos de delincuente como numero etc -->
                                        <div class="form-row">
                                                 <div class="form-group col-md-3">
                                                      <label >APODO DEL DELINCUENTE</label>
                                                      <input type="text" class="form-control"  placeholder="APODO " name="Apodo_delincuente">
                                                 </div>
                                                <div class="form-group col-md-3">
                                                     <label >ESTADO PENAL</label>
                                                     <input type="text" class="form-control"  placeholder="Estado Penal" name="Estado_penal">
                                                </div>
                                                <div class="form-group col-md-3">
                                                     <label >CANTIDAD DE DELITOS</label>
                                                     <input type="text" class="form-control"  placeholder="Estado Penal" name="CANTIDAD">
                                                </div>
                                                <div class="form-group col-md-3">
                                                <label >ULTIMO LUGAR VISTO</label>
                                                      <input type="text" class="form-control"  placeholder="ejem, direccion de la calle" name="Direc_Ultima_Vista">
                                                </div>
                                        </div><!-- div de class form-row de delincuente -->
                                     
                                        <div class="form-row">
     
                                      
                                            <div class="form-group col-md-4">
                                             
                                            <label>REGION</label>
                                                    <select class="form-control" name="region">
                                                    
                                                    <?php
                                                        while ($datos = mysqli_fetch_array($query)) {
                                                               
                                                        ?>
                                                    
                                                        <option  value="<?php echo $datos['REGION_ID']?>" selected="" n><?php echo $datos['REGION_NOMBRE'] ?> </option>
                                                      
                                                    <?php
                                                    }
                                                    ?>

                                                </select>
                                                                                                            
                                               
                                            </div>
                                           
                                          <div class="form-group col-md-4">
                                          <label>PROVINCIA</label>
                                <select class="form-control" name="provincia">
                                                                 <?php
                                    while ($datos = mysqli_fetch_array($query1)) {

                                    ?>
                                    <option  value="<?php echo $datos['PROVINCIA_ID']?>" selected=""><?php echo $datos['PROVINCIA_NOMBRE'] ?> </option>
                                <?php
                                 }
                                ?>

                            </select>  
                                            </div>   
                                        <div class="form-group col-md-4">
                                <label>COMUNA</label>
                                <select class="form-control" name="comuna">
                    
                                   <?php
                                    while ($datos = mysqli_fetch_array($query2)) {

                                    ?>
                                     
                                    <option  value="<?php echo $datos['COMUNA_ID']?>" selected=""><?php echo $datos['COMUNA_NOMBRE'] ?> </option>

                                <?php
                                 }
                                ?>

                            </select>
                        </div> 
                       
</div>
<br>
                                        <button type="submit" style="margin-right:80px" class="btn btn-primary" name="enviar">REGISTRA DATOS</button>
                                        <a  href="antecedentes.php" class="btn btn-primary" role="button" aria-pressed="true">CREAR ANTECEDENTES</a>
                                       
                                    </form>
                                    
                                   
                                </div>
                </div>
            </main>
 
         
        </div>
    </div>
    <?php include 'footer.php'; ?>