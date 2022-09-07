<?php

session_start();
include 'conexion.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
and contrasena ='$contrasena' and estado='2'");
$validar_estado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
and contrasena ='$contrasena' and estado='1'");

if (mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $correo;
    header("location: ../../proyecto/index.php");
    exit;}
    else if (mysqli_num_rows($validar_estado) > 0){
      $_SESSION['usuario'] = $correo;
      header("location:../../PRODUCTO.php");
      exit;
}else{
    echo'
      <script>
      window.location =  "../index.php";
      alert("El usuario no existe, por favor verifique los datos introducidos");

      </script>
    ';
    exit;
}
?>