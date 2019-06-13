<?php 
    
    require("conexion.php");
        // $value = $_POST['value'] ?? '';
        $email = $_POST['email'] ?? '';
        $password= $_POST['password'] ?? '';
        
		$sql="INSERT INTO test(email,password) values('$email','$password')";
		$result=mysqli_query($con,$sql);
			
        if($result >=1){
            echo "weas listas";
        }else{
            echo "nose se pudo";
        }
        

?>