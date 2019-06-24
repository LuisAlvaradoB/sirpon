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
                    <h1 class="dash-title">Bienvenido - Sistema Integrado da Prevención Online</h1>
                    <!-- put your rows / columns here -->
                    <div class="spur-card-title"> Detalle delito segun delincuente </div>
                               
                              
           <table class="table">
                                   
           <thead class="thead-dark">
  
  <tr>
    <th scope="col">RUT</th>
    <th scope="col">NOMBRE</th>
    <th scope="col">APELLIDO PA.</th>
    <th scope="col">DIRECION</th>
    <th scope="col">APODO DELINCUENTE</th>
    <th scope="col">ULTIMO LUGAR VISTO</th>
    <th scope="col">ESTADO</th>
    <th scope="col">AGREGAR NUEVO ANTECEDENTE</th>
  </tr>
</thead>
  </thead>
    <?php 

$Rut=$_REQUEST['RUT'];
   
    $sql = "SELECT PER.RUT, PER.NOMBRE, PER.APELLIDO_PA, PER.DOMICILIO_PARTICULAR,  del.APODO_DELINCUENTE, del.ULTIMO_LUGAR_VISTO, del.ESTADO_PENAL FROM persona PER INNER JOIN delicuente del WHERE PER.RUT=$Rut and del.RUT=$Rut" ;         // consulta para ver todas la ventas 
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
               <th><a href="antecedentes.php"><span class="text-danger">NUEVO</span></a></th>   <!--boton para eliminar-->
                </tr>
            <?php
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