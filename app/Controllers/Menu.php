<?php

namespace App\Controllers;

class Menu extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('subcategorias');
        echo view('footer');
    }

}
