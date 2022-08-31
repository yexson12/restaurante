<?php

namespace App\Controllers;

class Dividir extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('dividir');
        echo view('footer');
    }

}