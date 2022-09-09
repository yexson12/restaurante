<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Subcategoria;

class Subcategorias extends Controller
{

    public function admin_subcat()
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


        $subcategorias = new Subcategoria();
        $datos['producto'] = $subcategorias->findAll();
        echo view('admin/template/headadmin');

        echo view('admin/subcategoria/listar_subcat', $datos);
        echo view('admin/template/footadmin');
    }
}
