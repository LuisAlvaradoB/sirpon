<?php
	// $BBDD_host="64.37.62.74:3306";
	// $BBDD_user="pgmvvduz_adminsirpon";
	// $BBDD_pass="adminsirpon19";
	// $BBDD_BBDD="pgmvvduz_sirpon";
	
	$BBDD_host="localhost";
	$BBDD_user="root";
	$BBDD_pass="";
    $BBDD_BBDD="sirpon";

	// Crear Conexion
	 $con=mysqli_connect($BBDD_host,$BBDD_user,$BBDD_pass);
	//  Check Conexion
	if (!$con) {
		die("Conexión Fallida: " . mysqli_connect_error());
	}else{
		echo 'Conexión Lista';
	}
	
		 
	mysqli_set_charset($con,"UTF8");
	mysqli_select_db($con,$BBDD_BBDD) or die ("No existe Base de Datos...");
