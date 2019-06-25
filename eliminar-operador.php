<?php 
 include'conexion.php';

 $Rut=$_REQUEST['rut'];
    
	$sql4="DELETE FROM persona WHERE RUT='$Rut'";
     $result4=mysqli_query($con,$sql4);


echo '<script>alert("usuario eliminado con exito")</script>';
echo '<script>window.location="registro.php"</script>';							                 	
    
    

     
 
 ?>