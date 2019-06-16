<?php
	$BBDD_host="64.37.62.74:3306";
	$BBDD_user="pgmvvduz_adminsirpon";
	$BBDD_pass="adminsirpon19";
    $BBDD_BBDD="pgmvvduz_sirpon";


     $con=mysqli_connect($BBDD_host,$BBDD_user,$BBDD_pass);
     if(mysqli_connect_errno()){
		 echo "Error con la conexión...";
	 }
		 
	mysqli_set_charset($con,"UTF8");
	mysqli_select_db($con,$BBDD_BBDD) or die ("No existe Base de Datos...");
