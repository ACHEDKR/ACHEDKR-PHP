<?php

try{
	
	$nickname=htmlentities(addslashes($_POST["nickname"]));
	
    $clave=htmlentities(addslashes($_POST["clave"]));
    
    $contador=0;
	
	
	$base=new PDO("mysql:host=localhost; dbname=bd_prueba" , "root", "");
	
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	$sql="SELECT * FROM usuarios WHERE nickname= :nickname";
	
	$resultado=$base->prepare($sql);	
		
	$resultado->execute(array(":nickname"=>$nickname));
		
		while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){			
			
			//echo "Usuario: " . $registro['USUARIOS'] . " Contraseña: " . $registro['PASSWORD'] . "<br>";			
			if(password_verify($clave, $registro['clave']))	{
                $contador++;
            }	
			
		}
		
		if($contador>0){
			//echo"USUARIO REGISTRADO";

			session_start();

			$_SESSION["usuario"]=$_POST["nickname"];
			
			header("location:../vista/index.php");
        }	else{
			//echo"USUARIO NO REGISTRADO";
			echo '<script language="javascript">alert("El usuario o contraseña no estan registrados, intenta de nuevo"); window.location.href="../vista/login.html"</script>';
			
			
        }				
		
		
		$resultado->closeCursor();

	
	
}catch(Exception $e){
	
	die("Error: " . $e->getMessage());
	
	
	
}




?>