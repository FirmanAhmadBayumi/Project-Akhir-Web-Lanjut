<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PelangganController extends BaseController
{
    public function dashboard(){
        $data = [
            'title' => 'Beranda',
        ];
        return view("pelanggan/dashboard", $data);
    }
    public function pesan(){
        $data = [
            'title' => 'Pesanan',
        ];
        return view("pelanggan/pesan", $data);
    }
    public function detail_pesanan(){
        $data = [
            'title' => 'Detail Pesanan',
        ];
        return view("pelanggan/detail_pesanan", $data);
    }
}
