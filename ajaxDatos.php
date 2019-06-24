<?php 
 include_once("conexion.php");

 if(isset($_POST["regionID"]) && !empty($_POST["regionID"])){
    //Get all state data
    $query = $con->query("SELECT * FROM provincia WHERE PROVINCIA_REGION_ID = ".$_POST['regionID']."");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Selecciona Provincia</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['PROVINCIA_ID'].'">'.$row['PROVINCIA_NOMBRE'].'</option>';
		}
		
    }else{
        echo '<option value="">Selecciona Región</option>';
    }
}
 
if(isset($_POST["provinciaID"]) && !empty($_POST["provinciaID"])){
    //Get all city data
    $query = $con->query("SELECT * FROM comuna WHERE COMUNA_PROVINCIA_ID = ".$_POST['provinciaID']."");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Selecciona Comuna</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['COMUNA_ID'].'">'.$row['COMUNA_NOMBRE'].'</option>';
		}
		
    }else{
        echo '<option value="">Comuna no disponible</option>';
    }
}



//  _________________________________________

//  $region=$_POST['region'];

//  if(isset($_POST["region"]) && !empty($_POST["region"])){
//     //Get all state data
//     $query = "SELECT * FROM provincia WHERE PROVINCIA_REGION_ID='$region'";
    
//     //Count total number of rows
// 	$result=mysqli_query($con,$query);

// 	$cadena="<label>Provincia</label>
// 			<select class='form-control' id='provincia' name='provincia'>";

// 	while ($ver=mysqli_fetch_row($result)) {
// 		$cadena=$cadena.'<option value='.$ver[0].'>'.$ver[1].'</option>';
// 	}

// 	echo  $cadena."</select>";
// }

// -------------------------------------------------------
// $region=$_POST['region'];

// 	$sql="SELECT * FROM provincia WHERE PROVINCIA_REGION_ID='$region'";

// 	$result=mysqli_query($con,$sql);

// 	$cadena="<label>Provincia</label>
// 			<select class='form-control' id='provincia' name='provincia'>";

// 	while ($ver=mysqli_fetch_row($result)) {
// 		$cadena=$cadena.'<option value='.$ver[0].'>'.$ver[1].'</option>';
// 	}

// 	echo  $cadena."</select>";



	// $provincia=$_POST['provincia'];

	// $sql="SELECT * FROM comuna WHERE COMUNA_PROVINCIA_ID='$provincia'";

	// $result=mysqli_query($con,$sql);

	// $cadena="<label>Comuna</label>
	// 		<select class='form-control' id='comuna' name='comuna'>";

	// while ($ver=mysqli_fetch_row($result)) {
	// 	$cadena=$cadena.'<option value='.$ver[0].'>'.$ver[1].'</option>';
	// }

	// echo  $cadena."</select>";
	
	

?>