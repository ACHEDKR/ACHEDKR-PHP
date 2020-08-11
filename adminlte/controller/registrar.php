<?php
//Recibir los datos y almacenarlos en variables
include 'conexion.php';
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$nickname = $_POST["nickname"];
$correo = $_POST["correo"];
$cedula = $_POST["cedula"];
$clave = $_POST["clave"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$contratonumero = $_POST["contratonumero"];

//Hash contraseña

$pass_cifrado=password_hash($clave, PASSWORD_DEFAULT, array("cost"=>12));

//Comando para insertar
$insertar = "INSERT INTO usuarios(nombre, apellidos, nickname, correo, cedula, clave, direccion, telefono, contratonumero) VALUES ('$nombre',
 '$apellidos','$nickname', '$correo', '$cedula', '$pass_cifrado', '$direccion', '$telefono', '$contratonumero')";

 

//Verificar Usuario

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nickname = '$nickname'");
if (mysqli_num_rows($verificar_usuario) > 0){
    echo '<script>
    alert("El nickname  ya se encuentra registrado");
    window.history.go(-1);
    </script>';
    exit;
}


//Verificar correo
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_usuario) > 0){
    echo '<script>
    alert("El correo  ya se encuentra registrado");
    window.history.go(-1);
    </script>';
    exit;
}

 // Verificar cedula

 $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE cedula = '$cedula'");
 if (mysqli_num_rows($verificar_usuario) > 0){
     echo '<script>
     alert("El numero de Cedula ya se encuentra registrado");
     window.history.go(-1);
     </script>
     ';
     exit;
 }



//Ejecutar comando
 $resultado= mysqli_query($conexion, $insertar);
if (!$resultado){
    echo 'Error al registrarse';
}   else {
    echo '<script>
    alert("Usuario registrado satisfactoriamente");
    location.href ="../vista/login.html"
    </script>';
    exit;
}
//Cerrar conexion
mysqli_close($conexion);
?>