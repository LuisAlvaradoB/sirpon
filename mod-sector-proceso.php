<?php 
 include'conexion.php';
 
 $id=$_POST['id'];
 $nombre=$_POST["nombre"];
 $Region=$_POST["region"];
 $Provincia=$_POST["provincia"];
 $Comuna=$_POST["comuna"];
 
 
 
     if(isset($_POST['modsector']) && $id!="" && $nombre!="" &&  $Region!=""&& $Provincia!=""&& $Comuna!=""){

        echo '<script>alert("Faltan datos")</script>';
        echo '<script>window.location="form-sector.php"</script>';

    					                 	
    }else{
     

	$sql3="UPDATE sector SET SECTOR_ID='$id',NOMBRE_SECTOR='$nombre', REGION_ID='$Region', PROVINCIA_ID='$Provincia',COMUNA_ID='$Comuna' WHERE SECTOR_ID=$id";
    $result5=mysqli_query($con,$sql3);

    echo '<script>alert("usuario modificado con exito")</script>';
    echo '<script>window.location="form-sector.php"</script>';		
    
     
         
   
               
       
          
      }