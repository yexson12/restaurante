<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Bebida;
class Menugeneral extends BaseController
{
    public function index()
    {
        $bedida = new Bebida();
        $datos['producto'] = $bedida->orderBy('PRODUCTO_ID', 'ASC')->findAll();
        echo view('header');
        echo view('menugeneral',$datos);
        echo view('footer');
    }

}
