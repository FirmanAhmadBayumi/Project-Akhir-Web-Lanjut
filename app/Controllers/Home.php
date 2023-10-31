<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
  
    public function dashboard(): string
    {
        return view('dashboard');
    }

    public function login()
    {
        return view('login');
    }
}
