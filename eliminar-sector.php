<?php 
 include'conexion.php';

 $id=$_REQUEST['ID'];
    
	$sql4="DELETE FROM sector WHERE SECTOR_ID='$id'";
     $result4=mysqli_query($con,$sql4);


     echo '<script>alert("usuario eliminado con exito")</script>';
echo '<script>window.location="form-sector.php"</script>';			
 
 ?>