<?php 

include_once'../../inc/conexion.php';
// Formulario de Datos Personales
$Rut=$_POST["Rut"];
$nombre_persona=$_POST["nombre_persona"];
$nombre_persona=$_POST["nombre_persona2"];
$Fecha_Nacimiento=$_POST["fechaNacimiento"];
$Apellido_Pt=$_POST["apellidop_persona"];
$Apellido_Mt=$_POST["apellidom_persona"];
$direccion_particular=$_POST["direccion_particular"];
$Telefono_celular=$_POST["telefono_movil"];
$Telefono_fijo=$_POST["telefono_fijo"];
$correo_electronico=$_POST["correo_electronico"];
$Region=$_POST["region"];
$Provincia=$_POST["provincia"];
$Comuna=$_POST["comuna"];

// Formulario Usuario
$nombre_usuario=$_POST["nombre_usuario"];
$password = $_POST["contraseña"];
$hash_password = password_hash("$password", PASSWORD_DEFAULT);
$fecha_creacion_usuario = $_POST["fechaNacimientoUsuario"];;
$previlegios = $_POST["jefeszonas"];;
$institucion = $_POST["instituciones"];;


	if(isset($_POST['sub']) && $nombre_persona!="" && $nombre_persona2!="" && $Apellido_Pt!="" && $Apellido_Mt!="" && $Rut!=""&& $direccion_particular!=""&& $Fecha_Nacimiento!=""&& $Telefono_celular!=""&& $Telefono_fijo!=""&& $correo_electronico!=""&& $Region!=""&& $Provincia!=""&& $Comuna!="" ){
								                 	
		
        $sql="INSERT INTO persona (RUT,FECHA_NACIMIENTO,nombre_persona,APELLIDO_PA,APELLIDO_MA,TELEFONO_RED_FIJA,TELEFONO,CORREO_ELECTRONICO,DOMICILIO_PARTICULAR,REGION_ID,PROVINCIA_ID,COMUNA_ID)values('$Rut','$Fecha_Nacimiento','$nombre_persona','$Apellido_Pt','$Apellido_Mt','$Telefono_fijo','$Telefono_celular','$correo_electronico','$direccion_particular','$Region','$Provincia',' $Comuna')";

	    $result=mysqli_query($con,$sql);
           
        $sql1="INSERT INTO usuario (RUT,NOMBRE_USUARIO,HASH_PASSWORD,FECHA_CREACION_USUARIO,PREVILEGIOS,INSTITUCION)values('$Rut','$hash_password','$fecha_creacion_usuario','$previlegios','$institucion')";
        
        $result2=mysqli_query($con,$sql1);

        echo '<script>alert("usuario registrado con exito")</script>';
	    echo '<script>window.location="ads.php"</script>';
		
	}else{
		echo '<script>alert("Faltan datos")</script>';
		echo '<script>window.location="asda.php"</script>';
	}
   
    
   
?>