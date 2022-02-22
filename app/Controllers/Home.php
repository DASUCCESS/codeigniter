<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        // echo view('extend/header');
        return view('homepage');
        // echo view('extend/footer');
    }
}
