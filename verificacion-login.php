<?php 
    
    include_once("inc/conexion.php");
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

        if(isset($_POST['submit'])){          
            if($_POST['nickname']!="" && $_POST['password']!="" ){
            $institucionId = $_POST['combobox-institucion'];  //comprobar si los campos no estan vacios
            $nombreUsuario=$_POST['nickname'];     //guardar los datos
            $passwordUsuario=$_POST['password'];
            
            $sql = "SELECT HASH_PASSWORD FROM usuario WHERE NOMBRE_USUARIO='$nombreUsuario'";
            $result=mysqli_query($con,$sql);
            $Arrayhash = mysqli_fetch_assoc($result);
            // echo print_r($hash);
            $hash = implode($Arrayhash);
            
                if (password_verify ($passwordUsuario ,$hash )) {
                    $sql1="SELECT * FROM usuario WHERE NOMBRE_USUARIO='$nombreUsuario' AND HASH_PASSWORD='$hash' AND INSTITUCION='$institucionId'";  /// hacer la consulta si existe el usuario
                    $result1=mysqli_query($con,$sql1);
                    $contar=mysqli_num_rows($result1);
                    
                    if($contar >=1){
                        
                        $sql2="SELECT PREVILEGIOS FROM usuario WHERE NOMBRE_USUARIO='$nombreUsuario'";   // obtener el privilegio
                            $result2=mysqli_query($con,$sql2);
                            $pre;
                    while($row = mysqli_fetch_array($result2)){
                        $pre = $row[0];	
                    }
                        ///////////////////si el usuario es admin 

                        if ($pre === "Administrador") {
                            header("location:page-administrador.php");
                        } elseif ($pre === "Jefe de Zona") {
                            header("location:page-jefezona.php");
                        } elseif ($pre === "Operador"){
                            header("location:page-operador.php");
                        }

                    }else{
                        // echo $hash;
                        echo "Error: " . $sql1 . "<br>" . mysqli_error($con);
                        
                    }

                }
            }else{
            echo "Faltan datos";
        
        
            }
        }          
?>