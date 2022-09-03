<?php

namespace App\Controllers;

class Bebidas extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('bebidas');
        echo view('footer');
    }

}