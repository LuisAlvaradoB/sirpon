<?php 
 include'conexion.php';


$Rut=$_POST["rut"];
$nombreus=$_POST["nombreuser"];
$contraseña=$_POST["contra"];
$fecha_creacion=$_POST["fechacr"];
$asignacion=$_POST["asignacion"];
$institucion=$_POST["institucion"];



	if(isset($_POST['guardarus']) && $Rut!="" && $nombreus!="" && $contraseña!="" && $fecha_creacion!=""&& $asignacion!=""&& $institucion!="" ){
								                 	

		
            $sql="INSERT INTO usuario (RUT,NOMBRE_USUARIO,HASH_PASSWORD,FECHA_CREACION_USUARIO,PREVILEGIOS,INSTITUCION)values('$Rut','$nombreus','$contraseña','$fecha_creacion','$asignacion','$institucion')";
	       	$result=mysqli_query($con,$sql);
	
		
           

echo '<script>alert("usuario registrado con exito")</script>';
	echo '<script>window.location="registro.php"</script>';
		
	}else{
	
		echo '<script>alert("Faltan datos")</script>';
		echo '<script>window.location="registro.php"</script>';
	}
   
    
//UPDATE  cuenta_corriente SET saldo_disponible = 150000 WHERE id_cuenta =1 
   
   ?>