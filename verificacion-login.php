<?php 
    
    require_once("conexion.php");
        // $value = $_POST['value'] ?? '';
        // $email = $_POST['email'];
        // $password= $_POST['password'];
        
		// $sql="INSERT INTO test(email,password) values('$email','$password')";
		// $result=mysqli_query($con,$sql);
			
        // if($result >=1){
        //     echo "weas listas";
        // }else{
        //     echo "nose se pudo";
        // }

        if(isset($_POST['iniciar_sesion'])){          
            if($_POST['username']!="" && $_POST['password']!="" ){  //comprobar si los campos no estan vacios
            $user2=$_POST['username'];     //guardar los datos
            $pass2=$_POST['password'];
            
            $sql3="Select * from usuarios where usuario='$user2' and clave='$pass2'";  /// hacer la consulta si existe el usuario
            $resul4=mysqli_query($con,$sql3);
            $contar4=mysqli_num_rows($resul4);
                
                if($contar4>=1){
                    
                    $sql4="select privilegios from usuarios where usuario='$user2'";   // obtener el privilegio
                        $result4=mysqli_query($con,$sql4);
                        $pre;
                while($row = mysqli_fetch_array($result4)){
                    $pre = $row[0];	
                }
                $_SESSION['iniciar_sesion']=$user2;
                    ///////////////////si el usuario es admin 
                    if($pre==1){
                        header("location:menu.php");
                    }else{
                        //////////////////si no solo puede entrar a comprar
                        header("location:productos.php");
                    }
                    
                    
                    
                
                }else{
                    
                }
            
            }else{
            echo "Faltan datos";
        
        
            }
        }          
        


        

?>