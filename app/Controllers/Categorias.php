<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Categoria;
class Categorias extends Controller{


    public function admin_cat()
    {
        session_start();
        if (!isset($_SESSION['usuario'])) {
            echo '
        <script>
        window.location =  "../index.php";
        </script>';
            session_destroy();
            exit();
        }


        $categorias = new categoria();
        $datos['producto'] = $categorias->findAll();
        echo view('admin/template/headadmin');

        echo view('admin/categoria/listar_cat', $datos);
        echo view('admin/template/footadmin');
    }
}