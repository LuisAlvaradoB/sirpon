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
                <a href="#" class="spur-logo"><i class="far fa-eye"></i><span>SIRPON</span></a>
            </header>
            <!-- Sidebar de Navegacion -->
            <nav class="dash-nav-list">
                <a href="#" class="dash-nav-item">
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
              
            </nav>
            <!-- fin navbar -->
        </div>
        <div class="dash-app">
            
            <main class="dash-content">
                <div class="container-fluid ">
                    <h1 class="dash-title">Bienvenido - Sistema Integrado de Busqueda para la Prevención Online</h1>
                    <!-- put your rows / columns here -->
                    <div class="spur-card-title"> Ficha de Delincuente </div>
                                </div>
                                <div class="card-body ">
                                    <form  method="POST" >
                                        
                                     
                                        <div class="form-row">

                                                <div class="form-group  col-xs-6" >
                                                     <label >RUT</label>
                                                     <input type="text" class="form-control"  placeholder="Rut" name="rut">
                                                </div>
                                             
                                             
                                              
                                                
                                            
                                        </div><!-- div de class form-row de datos de delincuente como numero etc -->
                                        <button type="submit" class="btn btn-primary" name="buscar" > BUSCAR </button>
                                        
</div>

                                    </form>
                                    <br> 
                                    
                <table class="table" name="rut">
                
  
  <thead class="thead-dark">
    <tr>
      <th scope="col">RUT</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">FECHA DELITO</th>
      <th scope="col">HORA DELITO</th>
      <th scope="col">NOMBRE DELITO</th>
      <th scope="col">ESTADO DE CONDENA</th>
      <th scope="col">DESCRIPCION DELITO</th>
      <th scope="col">VER DETALLES</th>
      <th scope="col">AGREGAR ANTECEDENTES</th>
    </tr>
  </thead>
<?php 


if(isset($_POST['buscar'])  ){
    $rut=$_POST['rut'];
    
     $sql ="SELECT PER.RUT, PER.NOMBRE, DC.FECHA_DELITO, DC.HORA_DELITO, tp.NOMBRE_TIPO, DC.ESTADO_DELITO, DC.DESCRIPCION_DELITO FROM persona PER INNER JOIN delitos_cometido DC INNER JOIN tipo_de_delito tp WHERE PER.RUT=$rut AND DC.RUT=$rut and DC.RUT=$rut AND PER.RUT=$rut AND tp.TIPO_DELITO_ID=DC.TIPO_DELITO_ID AND DC.TIPO_DELITO_ID=tp.TIPO_DELITO_ID";
     $result= mysqli_query($con,$sql);
		if(mysqli_num_rows($result) > 0){
	     while($row = mysqli_fetch_array($result))
		{
			?>
  
      
            <!--tabla-->
           
            <tr>

             <!--llenar los datos-->
            <td><?php echo $row["RUT"];?></td>     
            <td><?php echo $row["NOMBRE"];?></td>
            <td><?php echo $row["FECHA_DELITO"];?></td>
            <td><?php echo $row["HORA_DELITO"];?></td>
            <td><?php echo $row["NOMBRE_TIPO"];?></td>
            <td><?php echo $row["ESTADO_DELITO"]; ?></td>
            <td><?php echo $row["DESCRIPCION_DELITO"]; ?></td>
             <th><a href="antecedentes.php"><span class="text-danger">NUEVO</span></a></th>   <!--boton para eliminar-->
		     </tr>

            <?php
        }
      }else{
        echo '<script>alert("NO HAY REGISTRO DE ANTECEDENTES ")</script>';
		echo '<script>window.location="page-operador.php"</script>';  
        
      }
    }else{
        $sql1  ="SELECT PER.RUT, PER.NOMBRE, DC.FECHA_DELITO, DC.HORA_DELITO, tp.NOMBRE_TIPO, DC.ESTADO_DELITO, DC.DESCRIPCION_DELITO FROM persona PER INNER JOIN delitos_cometido DC INNER JOIN tipo_de_delito tp WHERE PER.RUT=DC.RUT AND DC.RUT=PER.RUT and DC.RUT=PER.RUT AND PER.RUT=DC.RUT AND tp.TIPO_DELITO_ID=DC.TIPO_DELITO_ID AND DC.TIPO_DELITO_ID=tp.TIPO_DELITO_ID";
        $result1= mysqli_query($con,$sql1);
           if(mysqli_num_rows($result1) > 0){
            while($row = mysqli_fetch_array($result1))
           {
               ?>
               <!--tabla-->
               <tr>
            <td><?php echo $row["RUT"];?></td>     
            <td><?php echo $row["NOMBRE"];?></td>
            <td><?php echo $row["FECHA_DELITO"];?></td>
            <td><?php echo $row["HORA_DELITO"];?></td>
            <td><?php echo $row["NOMBRE_TIPO"];?></td>
            <td><?php echo $row["ESTADO_DELITO"]; ?></td>
            <td><?php echo $row["DESCRIPCION_DELITO"]; ?></td><!--llenar los datos-->
            <th><a href="antecedentes-delincuente.php"><span class="text-danger">detalle</span></a></th>   <!--boton para eliminar-->
               <th><a href="antecedentes.php"><span class="text-danger">NUEVO</span></a></th>   <!--boton para eliminar-->
                </tr>
               <?php
        
         }
       }
    }
           ?>
       </table>    
    
	                          
    


</body>
                                </div>
                </div>
            </main>
 
         
        </div>
    </div>

    <?php include 'footer.php'; ?>