<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Bebida;
use App\Models\Subcategoria;
class Menugeneral extends BaseController
{
    public function index()
    {
        $bedida = new Bebida();
        $datos['producto'] = $bedida->orderBy('PRODUCTO_ID', 'ASC')->findAll();
        $subcategorias = new Subcategoria();
        $datos['subcategoria'] = $subcategorias->orderBy('ID_SUBCAT', 'ASC')->findAll();
        echo view('header');
        echo view('menugeneral',$datos);
        echo view('footer');
    }

}
