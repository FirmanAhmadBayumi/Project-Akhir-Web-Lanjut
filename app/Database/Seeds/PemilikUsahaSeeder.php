<?php

namespace App\Database\Seeds;

use App\Models\PemilikUsahaModel;
use CodeIgniter\Database\Seeder;

class PemilikUsahaSeeder extends Seeder
{
    public function run()
    {
        $pemilikUsahaModel = new PemilikUsahaModel();

        $pemilikUsahaModel->save([
            'jenis_kendaraan' => 'Scooter',
            'harga' => 10000,
            'foto' => '../assets/img/motor-matic.jpeg',
        ]);

        $pemilikUsahaModel->save([
            'jenis_kendaraan' => 'Cub',
            'harga' => 15000,
            'foto' => '../assets/img/motor-bebek.jpeg',
        ]);

        $pemilikUsahaModel->save([
            'jenis_kendaraan' => 'Sport-Bike',
            'harga' => 30000,
            'foto' => '../assets/img/motor-laki.jpeg',
        ]);
    }
}
