<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Register extends Controller
{
    public function index()
    {
        // echo view('extend/header');
        return view('register-view');
        // echo view('extend/footer');
    }
}
