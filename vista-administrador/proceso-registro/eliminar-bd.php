<?php 

include_once("../../inc/conexion.php");

if(isset($_REQUEST['RUT'])){
	// Formulario de Datos Personales
	$Rut=$_REQUEST["RUT"];

    $sql="DELETE FROM persona WHERE RUT='$Rut'";
	$result=mysqli_query($con,$sql);
		
	if ($result) {
		echo '<script>alert("Datos Personales Eliminados")</script>';
		echo '<script>window.location="admin-tabla-modificaciones.php"</script>';
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
		// echo '<script>alert("Faltan datos")</script>';
		// echo '<script>window.location="admin-registros.php"</script>';
}

if(isset($_REQUEST['INSTITUCION_ID'])){
	// Formulario Usuario
    $institucionID=$_REQUEST["INSTITUCION_ID"];

	$sql1="DELETE FROM institución WHERE INSTITUCION_ID='$institucionID'";   
	$result1=mysqli_query($con,$sql1);
	   
	if ($result1) {
		echo '<script>alert("Institución Eliminada")</script>';
		echo '<script>window.location="admin-tabla-modificaciones.php"</script>';
	} else {
	   echo "Error: " . $sql1 . "<br>" . mysqli_error($con);
	}
}

    