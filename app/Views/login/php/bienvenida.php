<?php
session_start();

if(!isset($_SESSION['usuario'])){
    echo'
    <script>
    window.location =  "../index.php";
    </script>
  ';
    session_destroy();
    exit();
}

else{

    echo'
    <script>
    window.location =  "../../producto.php";
    </script>
  ';

}
?>

