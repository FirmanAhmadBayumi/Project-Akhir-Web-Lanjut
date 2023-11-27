<?php

namespace App\Controllers;

use App\Models\PemilikUsahaModel;

class Home extends BaseController
{
    public $dataKendaraan;
    public function __construct(){
        $this->dataKendaraan = new PemilikUsahaModel();
    }
    public function index(): string{
        $data_kendaraan = $this->dataKendaraan->getDataKendaraan();

        $data = [
            'data_kendaraan' => $data_kendaraan,
        ];

        return view ('index', $data);
    }
    public function login()
    {
        return view('login', [
            'config' => config('Auth'),
        ]);
    }
    public function register()
    {
        return view('register');
    }
    public function redirect() {
        if(in_groups('pelanggan')) {
            return redirect()->to('/pelanggan/dashboard');
        } elseif(in_groups('admin')) {
            return redirect()->to('/admin/dashboard');
        } else {
            return redirect()->to('/pemilikusaha/dashboard');
        }
    }
}
