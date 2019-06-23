<?php 
 include'conexion.php';
$rut=$_POST["rut"];
$nombre1=$_POST["nombre1"];
$Provincia=$_POST["provincia"];
$Comuna=$_POST["comuna"];



	if(isset($_POST['enviar']) && $nombre!="" &&  $Region!=""&& $Provincia!=""&& $Comuna!=""){
								                 	
            $sql="INSERT INTO sector (NOMBRE_SECTOR,REGION_ID,PROVINCIA_ID,COMUNA_ID)values('$nombre','$Region','$Provincia','$Comuna')";
	       	$result=mysqli_query($con,$sql);

		
            
          	echo '<script>alert("sector registrado con exito")</script>';
	echo '<script>window.location="form-sector.php"</script>';
		
}else{

	echo '<script>alert("Faltan datos")</script>';
	echo '<script>window.location="form-sector.php"</script>';
    }