<?php 

include_once("../../inc/conexion.php");

if(isset($_POST['submit'])){
	// Formulario de Datos Personales
	$Rut=$_POST["Rut"];

	$nombre_persona=$_POST["nombre_persona"];
	$nombre_persona2=$_POST["nombre_persona2"];
	$twoNames = $nombre_persona.' '.$nombre_persona2;

	$origDate = $Fecha_Nacimiento=$_POST["fechaNacimiento"];
	$newDate = date("Y-m-d", strtotime($origDate));

	$Apellido_Pt=$_POST["apellidop_persona"];
	$Apellido_Mt=$_POST["apellidom_persona"];
	$direccion_particular=$_POST["direccion_particular"];
	$Telefono_celular=$_POST["telefono_movil"];
	$Telefono_fijo=$_POST["telefono_fijo"];
	$correo_electronico=$_POST["correo_electronico"];
	$Region=$_POST["region"];
	$Provincia=$_POST["provincia"];
	$Comuna=$_POST["comuna"];

	


	$sql="UPDATE persona SET RUT='$Rut',FECHA_NACIMIENTO='$newDate',NOMBRE='$twoNames',APELLIDO_PA='$Apellido_Pt',APELLIDO_MA='$Apellido_Mt',TELEFONO_RED_FIJA='$Telefono_fijo',TELEFONO='$Telefono_celular',
    CORREO_ELECTRONICO='$correo_electronico',DOMICILIO_PARTICULAR='$direccion_particular',REGION_ID='$Region',PROVINCIA_ID='$Provincia',COMUNA_ID='$Comuna' WHERE RUT='$Rut'";

	$result=mysqli_query($con,$sql);
		
	if ($result) {
		echo '<script>alert("usuario registrado con exito")</script>';
		echo '<script>window.location="admin-tabla-modificaciones.php"</script>';
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
		// echo '<script>alert("Faltan datos")</script>';
		// echo '<script>window.location="admin-registros.php"</script>';
}

if(isset($_POST['submit2'])){
	// Formulario Usuario
   $rutUsuario=$_POST["RutUsuario"];
   $nombre_usuario=$_POST["nombre_usuario"];
   $password = $_POST["password"];
   $hash_password = password_hash("$password", PASSWORD_DEFAULT);
   
   $origDate = $fecha_creacion_usuario = $_POST["fechaNacimientoUsuario"];
   $newDate = date("Y-m-d", strtotime($origDate));
   

   $privilegios = $_POST["privilegio"];;
   $institucion = $_POST["institucion"];;


   $sql1="UPDATE usuario SET RUT='$rutUsuario',NOMBRE_USUARIO='$nombre_usuario',HASH_PASSWORD='$hash_password',
   FECHA_CREACION_USUARIO='$fecha_creacion_usuario',PREVILEGIOS='$privilegios',INSTITUCION='$institucion' WHERE RUT='$rutUsuario'";
	   
	$result1=mysqli_query($con,$sql1);
	   
	if ($result1) {
		echo '<script>alert("usuario registrado con exito")</script>';
		echo '<script>window.location="admin-registros.php"</script>';
	} else {
	   echo "Error: " . $sql1 . "<br>" . mysqli_error($con);
	}
}

if(isset($_POST['submit3'])){
	// Formulario Usuario
	$institucionID = $_POST['INSTITUCION_ID'];
    $nombreInstitucion=$_POST["nombre_institucion"];
    $personaACargo=$_POST["persona_acargo"];

   $sql2="UPDATE institución SET NOMBRE_INSTITUCION='$nombreInstitucion',USUARIO_JEFE='$personaACargo' WHERE INSTITUCION_ID='$institucionID'";
	   
	$result2=mysqli_query($con,$sql2);
	   
	if ($result2) {
		echo '<script>alert("usuario registrado con exito")</script>';
		echo '<script>window.location="admin-tabla-modificaciones.php"</script>';
	} else {
	   echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
	}
}
    
    