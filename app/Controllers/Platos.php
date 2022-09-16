<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Bebida;
use App\Models\Subcategoria;
class Platos extends BaseController
{
    public function index()
    {      $bedida = new Bebida();
        $datos['producto'] = $bedida->where("ID_CATEGORIA",3)->where( "ESTADO",1)->orderBy('PRODUCTO_ID', 'ASC')->findAll();

        $subcategorias = new Subcategoria();
        $datos['subcategoria'] = $subcategorias->where("ID_CATEGORIA",3)->orderBy('ID_SUBCAT', 'ASC')->findAll();
        echo view('header');
        echo view('platos', $datos);
        echo view('footer');
    }

}
