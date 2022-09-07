<?php

include 'conexion.php';

$nombre = $_POST['nombreU'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
          VALUES('$nombre', '$correo', '$usuario', '$contrasena')";

//repetir correo
$verificar_correo=mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo'");

if(mysqli_num_rows($verificar_correo) > 0){
    echo '
     <script>
     alert("Este correo ya esta registrado , intenta con otro diferente");
     window.location =  "../index.php";
     </script>
    ';
    exit();
    mysqli_close($conexion);
}

//repetir usuario
$verificar_usuario=mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario'");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
     <script>
     alert("Este usuario ya esta registrado , intenta con otro diferente");
     window.location =  "../index.php";
     </script>
    ';
    exit();
    mysqli_close($conexion);
}
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
     <script>
     alert("Usuario almacenado exitosamente");
     window.location =  "../index.php";
     </script>
    ';
}else{
    echo'
    <script>
    alert("La creacion del usuario a fallado");
    window.location =  "../index.php";
    </script>
     ';
}

mysqli_close($conexion);
?>