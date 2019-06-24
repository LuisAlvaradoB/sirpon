<?php 
 include'conexion.php';
$Rut=$_POST["Rut"];
$nombre=$_POST["nombre"];
$Fecha_Nacimiento=$_POST["fechaNacimiento"];
$Apellido_Pt=$_POST["ApellidoP"];
$Apellido_Mt=$_POST["ApellidoM"];
$Direccion_domicilio=$_POST["Direccion_Domicilio"];
$Telefono_celular=$_POST["num_telefono_celular"];
$Telefono_fijo=$_POST["Telefono_Fijo"];
$Correo=$_POST["correo"];
$Region=$_POST["region"];
$Provincia=$_POST["provincia"];
$Comuna=$_POST["comuna"];

if(isset($_POST['modificar']) && $nombre!="" && $Apellido_Pt!="" && $Apellido_Mt!="" && $Rut!="" && $Direccion_domicilio!="" && $Fecha_Nacimiento!="" && $Telefono_celular!="" && $Telefono_fijo!="" && $Correo!="" && $Region!=""&& $Provincia!="" && $Comuna!="" ){
    
	$sql3="UPDATE persona SET RUT='$Rut', FECHA_NACIMIENTO='$Fecha_Nacimiento', NOMBRE='$nombre', APELLIDO_PA='$Apellido_Pt', APELLIDO_MA='$Apellido_Mt',TELEFONO_RED_FIJA=$Telefono_fijo, TELEFONO='$Telefono_celular',CORREO_ELECTRONICO='$Correo', DOMICILIO_PARTICULAR='$Direccion_domicilio',REGION_ID='$Region', PROVINCIA_ID='$Provincia', COMUNA_ID='$Comuna' WHERE RUT=$Rut";
     $result3=mysqli_query($con,$sql3);


echo '<script>alert("usuario modificado con exito")</script>';
echo '<script>window.location="registro.php"</script>';							                 	
    
    
}else{
    echo '<script>alert("Faltan datos")</script>';
    echo '<script>window.location="registro.php"</script>';
          
  
     
 }