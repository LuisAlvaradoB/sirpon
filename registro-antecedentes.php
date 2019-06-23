
<?php 
include'conexion.php';


$Direccion_delito=$_POST["direc"];
$Fecha_DELITO=$_POST["fecha_delito"];
$descripcion=$_POST["descripcion_delito"];
$Hora_delito=$_POST["hora_delito"];
$Tipo_delito=$_POST["tipo"];
$Comuna=$_POST["comuna"];
$Estado_DELITO=$_POST["estado_delito"];
$rut=$_POST["rut"];
///&& $Region!=""&& $Provincia!=""&& $Comuna!=""
	if(isset($_POST['registro']) && $Direccion_delito!="" && $Fecha_DELITO!="" && $descripcion!="" && $Hora_delito!=""&& $Tipo_delito!=""&&  $Comuna!=""&& $Estado_DELITO!=""&& $rut!="" ){
						                 	
               
		
            $sql="INSERT INTO delitos_cometido (DESCRIPCION_DELITO,DIRECCION_DELITO,COMUNA_DELITO,TIPO_DELITO_ID,FECHA_DELITO,HORA_DELITO,ESTADO_DELITO,RUT)values('$descripcion','$Direccion_delito','$Comuna','$Tipo_delito','$Fecha_DELITO','$Hora_delito','$Estado_DELITO','$rut')";
	       	$result=mysqli_query($con,$sql);
			 
			  
			  
		

		   echo '<script>alert("usuario registrado con exito")</script>';
    echo '<script>window.location="page-operador.php"</script>';
		
	}else{
	
		echo '<script>alert("Faltan datos")</script>';
	echo '<script>window.location="delincuente_form.php"</script>';
}


		?>
        
        

        

       