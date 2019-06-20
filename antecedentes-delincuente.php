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
                                </div>
                                <div class="card-body ">
                                <table class="table">
                                   
  <thead class="thead-dark">
    <tr>
      <th scope="col">RUT</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">FECHA DELITO</th>
      <th scope="col">HORA DELITO</th>
      <th scope="col">TIPO DE DELITO</th>
      <th scope="col">ESTADO DE CONDENA</th>
      <th scope="col">DESCRIPCION DE DELITO</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php 


if(isset($_POST['detalle'])  ){
    $rut=$_POST['rut'];
     $sql = "SELECT PER.RUT, PER.NOMBRE, DCM.FECHA_DELITO, DCM.HORA_DELITO,  DCM.TIPO_DELITO, DCM.ESTADO_DELITO FROM persona PER INNER JOIN delincuente_delito DCM ON delitos_cometido DC WHERE PER.RUT=$rut AND DCM.RUT=$rut AND DCM.DELITO_ID=DC.DELITO_ID"   ;         // consulta para ver todas la ventas 
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
      }else{
        echo '<script>alert("NO HAY REGISTRO DE ANTECEDENTES ")</script>';
		echo '<script>window.location="page-operador.php"</script>';  
        
      }
    }
      ?>
    </tr>

  </tbody>
</table>
                               
                                </div>
                </div>
            </main>
 
         
        </div>
    </div>
    <?php include 'footer.php'; ?>