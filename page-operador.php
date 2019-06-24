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
                               
                                <div class="card-body ">
                                    <form  method="POST" >
                                        
                                     
                                        <div class="form-row">

                                                <div class="form-group  col-xs-6" >
                                                     <label >RUT</label>
                                                     <input type="text" minlength="10" maxlength="10" oninput="checkRut(this)" required class="form-control"  placeholder="Rut" name="rut">
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
            <th><a href="antecedentes-delincuente.php?RUT=<?php echo $row['RUT']?>">DETALLE</a></th>
             <th><a href="antecedentes.php?RUT=<?php echo $row['RUT']?>"><span >NUEVO</span></a></th>   
             <th><a href="modificar-datos-personales-delincuente.php?RUT=<?php echo $row['RUT']?>">MODIFICAR</a></th>

		     </tr>

            <?php
        }
      }else{
        echo '<script>alert("NO HAY REGISTRO DE ANTECEDENTES ")</script>';
		echo '<script>window.location="page-operador.php"</script>';  
        
      }
    }
    ?>
       </table>    
    
	                          
    



                                </div>

                </div>
            </main>
 
         
        </div>
    </div>

    <script>
        function checkRut(Rut) {
    // Despejar Puntos
    var valor = Rut.value.replace('.','');
    // Despejar Guión
    valor = valor.replace('-','');
    
    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0,-1);
    dv = valor.slice(-1).toUpperCase();
    
    // Formatear RUN
    Rut.value = cuerpo + '-'+ dv
    
    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { Rut.setCustomValidity("Rut Incompleto"); return false;}
    
    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;
    
    // Para cada dígito del Cuerpo
    for(i=1;i<=cuerpo.length;i++) {
    
        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);
        
        // Sumar al Contador General
        suma = suma + index;
        
        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
  
    }
    
    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);
    
    // Casos Especiales (0 y K)
    dv = (dv == 'K')?10:dv;
    dv = (dv == 0)?11:dv;
    
    // Validar que el Cuerpo coincide con su Dígito Verificador
    if(dvEsperado != dv) { Rut.setCustomValidity("Rut Inválido"); return false; }
    
    // Si todo sale bien, eliminar errores (decretar que es válido)
    Rut.setCustomValidity('');
}
    </script>
    <?php include 'footer.php'; ?>