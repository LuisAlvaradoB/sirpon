<?php 
 include'conexion.php';



 $Rut=$_REQUEST["RUT"];

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


if(isset($_POST['enviar1']) && $nombre!="" && $Apellido_Pt!="" && $Apellido_Mt!="" && $Rut!=""&& $Direccion_domicilio!=""&& $Fecha_Nacimiento!=""&& $Telefono_celular!=""&& $Telefono_fijo!=""&& $Correo!=""&& $Region!=""&& $Provincia!=""&& $Comuna!="" ){

								                 	
		
            $sql="UPDATE persona SET FECHA_NACIMIENTO=$Fecha_Nacimiento,NOMBRE=$nombre,APELLIDO_PA=$Apellido_Pt,APELLIDO_MA=$Apellido_Mt,TELEFONO_RED_FIJA=$Telefono_fijo,
            TELEFONO=$Telefono_celular,CORREO_ELECTRONICO=$Correo,DOMICILIO_PARTICULAR=$Direccion_domicilio,REGION=$Region,
            PROVINCIA=$Provincia,COMUNAa=$Comuna WHERE RUT=$Rut";
	       	$result=mysqli_query($con,$sql);
	
          

 echo '<script>alert("usuario modificado con exito")</script>';
  echo '<script>window.location="registro.php"</script>';
    
 }else{

     echo '<script>alert("Faltan datos")</script>';
      echo '<script>window.location="registro.php"</script>';
 }


//UPDATE  cuenta_corriente SET saldo_disponible = 150000 WHERE id_cuenta =1 

?>
       


    

