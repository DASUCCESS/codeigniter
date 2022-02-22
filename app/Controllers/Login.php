<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        // echo view('extend/header');
        return view('login-view');
        // echo view('extend/footer');
    }
}
