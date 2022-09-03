<?php

namespace App\Controllers;

class Parrillas extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('parrillas');
        echo view('footer');
    }

}