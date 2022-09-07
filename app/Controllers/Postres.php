<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Bebida;
use App\Models\Subcategoria;
class Postres extends BaseController
{
    public function index()
    {      $bedida = new Bebida();
        $datos['producto'] = $bedida->where("ID_CATEGORIA",4)->orderBy('PRODUCTO_ID', 'ASC')->findAll();
        $subcategorias = new Subcategoria();
        $datos['subcategoria'] = $subcategorias->where("ID_CATEGORIA",4)->orderBy('ID_SUBCAT', 'ASC')->findAll();
        echo view('header');
        echo view('postres', $datos);
        echo view('footer');
    }

}
