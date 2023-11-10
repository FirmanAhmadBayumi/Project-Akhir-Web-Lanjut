<?php

namespace App\Controllers;

class Pemilik extends BaseController
{
    
    public function login(): string
    {
        return view('pemilikusaha/login');
    }
    public function dashboard(): string
    {
        return view('pemilikusaha/dashboard');
    }
    public function tarif()
    {
        return view('pemilikusaha/tarif');
    }
    public function detail(): string
    {
        return view('pemilikusaha/detail');
    }
}
