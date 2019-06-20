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
             srip
                <div class="dash-nav-dropdown show">
                    <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-database"></i>Cerrar Sesión </a>
                   
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
      <th scope="col">APELLIDO PA.</th>
      <th scope="col">DIRECION</th>
      <th scope="col">APODO DELINCUENTE</th>
      <th scope="col">ULTIMO LUGAR VISTO</th>
      <th scope="col">ESTADO</th>
      <th scope="col">VER ANTECEDENTES </th>
      <th scope="col">AGREGAR NUEVO ANTECEDENTE</th>
    </tr>
  </thead>
  
<?php 


if(isset($_POST['buscar'])  ){
    $rut=$_POST['rut'];
    
     $sql = "SELECT PER.RUT, PER.NOMBRE, PER.APELLIDO_PA, PER.DOMICILIO_PARTICULAR,  del.APODO_DELINCUENTE, del.ULTIMO_LUGAR_VISTO, del.ESTADO_PENAL FROM persona PER INNER JOIN delicuente del WHERE PER.RUT=$rut AND del.RUT=$rut"  ;         // consulta para ver todas la ventas 
     $result= mysqli_query($con,$sql);
		if(mysqli_num_rows($result) > 0){
	     while($row = mysqli_fetch_array($result))
		{
			?>
            <!--tabla-->
           
            <tr>

             <!--llenar los datos-->
            <td name="rutt"value="<?php echo $row['RUT']?>"><?php echo $row["RUT"];?></td>     
            <td><?php echo $row["NOMBRE"];?></td>
            <td><?php echo $row["APELLIDO_PA"];?></td>
            <td><?php echo $row["DOMICILIO_PARTICULAR"];?></td>
            <td><?php echo $row["APODO_DELINCUENTE"];?></td>
            <td><?php echo $row["ULTIMO_LUGAR_VISTO"];?></td>
            <td><?php echo $row["ESTADO_PENAL"]; ?></td>
            <th><a href="antecedentes-delincuente.php" ><span class="text-danger">DETALLE</span></a></th>   <!--boton para eliminar-->
             <th><a href="antecedentes.php"><span class="text-danger">NUEVO</span></a></th>   <!--boton para eliminar-->
		     </tr>

            <?php
        }
      }else{
        echo '<script>alert("NO HAY REGISTRO DE ANTECEDENTES ")</script>';
		echo '<script>window.location="page-operador.php"</script>';  
        
      }
    }else{
    
        $sql = "SELECT PER.RUT, PER.NOMBRE, PER.APELLIDO_PA, PER.DOMICILIO_PARTICULAR,  del.APODO_DELINCUENTE, del.ULTIMO_LUGAR_VISTO, del.ESTADO_PENAL FROM persona PER INNER JOIN delicuente del WHERE PER.RUT=del.RUT";         // consulta para ver todas la ventas 
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
               <td><?php echo $row["APELLIDO_PA"];?></td>
               <td><?php echo $row["DOMICILIO_PARTICULAR"];?></td>
               <td><?php echo $row["APODO_DELINCUENTE"];?></td>
               <td><?php echo $row["ULTIMO_LUGAR_VISTO"];?></td>
               <td><?php echo $row["ESTADO_PENAL"]; ?></td>
               <th><a href="antecedentes-delincuente.php"><span class="text-danger">DETALLE</span></a></th>   <!--boton para eliminar-->
                <th><a href="antecedentes.php"><span class="text-danger">NUEVO</span></a></th>   <!--boton para eliminar-->
                </tr>
               <?php
        
         }
       }
    }
           ?>
       </table>    
    
	                          
    



                                </div>
                </div>
            </main>
 
         
        </div>
    </div>

    <?php include 'footer.php'; ?>