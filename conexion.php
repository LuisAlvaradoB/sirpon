<?php
	$BBDD_host="localhost";
	$BBDD_user="root";
	$BBDD_pass="";
    $BBDD_BBDD="sirpon";


     $con=mysqli_connect($BBDD_host,$BBDD_user,$BBDD_pass);
     if(mysqli_connect_errno()){
		 echo "Error con la conexión...";
	 }
		 
	mysqli_set_charset($con,"UTF8");
	mysqli_select_db($con,$BBDD_BBDD) or die ("No existe Base de Datos...");
