<?php 
 include'conexion.php';
$nombre=$_POST["nombre"];
$Region=$_POST["region"];
$Provincia=$_POST["provincia"];
$Comuna=$_POST["comuna"];
$Nivel=$_POST["nivel"];


	if(isset($_POST['enviar']) && $nombre!="" &&  $Region!=""&& $Provincia!=""&& $Comuna!=""&& $Nivel!="" ){
								                 	
            $sql="INSERT INTO sector (NOMBRE_SECTOR,REGION_SECTOR,PROVINCIA_SECTOR,COMUNA_SECTOR,NIVEL_DELINCUENCIA)values('$nombre','$Region','$Provincia','$Comuna','$Nivel')";
	       	$result=mysqli_query($con,$sql);

		
            $result2=mysqli_query($con,$sql1);
          	echo '<script>alert("sector registrado con exito")</script>';
	echo '<script>window.location="form-sector.php"</script>';
		
}else{

	echo '<script>alert("Faltan datos")</script>';
	echo '<script>window.location="form-sector.php"</script>';
    }