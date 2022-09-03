<?php

namespace App\Controllers;

class Postres extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('postres');
        echo view('footer');
    }

}
