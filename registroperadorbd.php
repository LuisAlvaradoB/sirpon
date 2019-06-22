<?php 
 include'conexion.php';


$Rut=$_POST["Rut"];
$nombre=$_POST["nombre"];
$Fecha_Nacimiento=$_POST["fechaNacimiento"];
$Apellido_Pt=$_POST["ApellidoP"];
$Apellido_Mt=$_POST["ApellidoM"];
$Direccion_domicilio=$_POST["Direccion_Domicilio"];
$Fecha_Nacimiento=$_POST["fechaNacimiento"];
$Telefono_celular=$_POST["num_telefono_celular"];
$Telefono_fijo=$_POST["Telefono_Fijo"];
$Correo=$_POST["correo"];
$Region=$_POST["region"];
$Provincia=$_POST["provincia"];
$Comuna=$_POST["comuna"];



	if(isset($_POST['enviar']) && $nombre!="" && $Apellido_Pt!="" && $Apellido_Mt!="" && $Rut!=""&& $Direccion_domicilio!=""&& $Fecha_Nacimiento!=""&& $Telefono_celular!=""&& $Telefono_fijo!=""&& $Correo!=""&& $Region!=""&& $Provincia!=""&& $Comuna!="" ){
								                 	

		
            $sql="INSERT INTO persona (RUT,FECHA_NACIMIENTO,NOMBRE,APELLIDO_PA,APELLIDO_MA,TELEFONO_RED_FIJA,TELEFONO,CORREO_ELECTRONICO,DOMICILIO_PARTICULAR,REGION_ID,PROVINCIA_ID,COMUNA_ID)values('$Rut','$Fecha_Nacimiento','$nombre','$Apellido_Pt','$Apellido_Mt','$Telefono_fijo','$Telefono_celular','$Correo','$Direccion_domicilio','$Region','$Provincia',' $Comuna')";
	       	$result=mysqli_query($con,$sql);
	
		
           

echo '<script>alert("usuario registrado con exito")</script>';
	echo '<script>window.location="registro.php"</script>';
		
	}else{
	
		echo '<script>alert("Faltan datos")</script>';
		echo '<script>window.location="registro.php"</script>';
	}
   
    
//UPDATE  cuenta_corriente SET saldo_disponible = 150000 WHERE id_cuenta =1 
   
   ?>