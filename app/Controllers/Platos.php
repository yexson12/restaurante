<?php

namespace App\Controllers;

class Platos extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('platos');
        echo view('footer');
    }

}
