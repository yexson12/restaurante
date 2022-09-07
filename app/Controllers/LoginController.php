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
    {
        echo view('Login/header');
        echo view('Login/login');
        echo view('Login/footer');
    }


}