<?php 
 include'conexion.php';

 $Rut=$_REQUEST['RUT'];
    
	$sql4="DELETE FROM persona WHERE RUT='$Rut'";
     $result4=mysqli_query($con,$sql4);


echo '<script>alert("usuario modificado con exito")</script>';
echo '<script>window.location="registro.php"</script>';							                 	
    
    

     
 
 ?>