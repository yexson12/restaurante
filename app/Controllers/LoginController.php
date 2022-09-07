<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class LoginController extends Controller{
    public function login()
    {
        echo view('Login/header');
        echo view('Login/login');
        echo view('Login/footer');
    }

    public function ingresar()
    {   session_start();
        $conexion = mysqli_connect("localhost","root","1234","bd_restaurante");

        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        
        $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
        and contrasena ='$contrasena'");

        $validar_estado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
        and contrasena ='$contrasena' ");
        
        if (mysqli_num_rows($validar_login) > 0){
            $_SESSION['usuario'] = $correo;
            return $this->response->redirect((site_url('/admin_pro')));
            exit;
            
        }else{
            return $this->response->redirect((site_url('/login')));
            exit;
        }


    }
    public function cerrarsesion()
    {
        session_start();
        session_destroy();
        return $this->response->redirect((site_url('/login')));
       
    }





}