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
        $area_pencucian = [
            [
                'id' => 1,
                'area_pencucian' => 'Area 1',
            ],
            [
                'id' => 2,
                'area_pencucian' => 'Area 2',
            ],
            [
                'id' => 3,
                'area_pencucian' => 'Area 3',
            ],
        ];

        $data = [
            'title' => 'Detail Pesanan',
            'area_pencucian' => $area_pencucian,
        ];
        
        return view("pelanggan/detail_pesanan", $data);
    }
    public function pembayaran(){
        return view("pelanggan/pembayaran");
    }
}