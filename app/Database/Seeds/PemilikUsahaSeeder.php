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
            'jenis' => 'Scooter',
            'harga' => 10000,
            'foto' => 'assets/images/foto1.jpg',
        ]);

        $pemilikUsahaModel->save([
            'jenis' => 'Cub',
            'harga' => 15000,
            'foto' => 'assets/images/foto2.jpg',
        ]);

        $pemilikUsahaModel->save([
            'jenis' => 'Sport-Bike',
            'harga' => 20000,
            'foto' => 'assets/images/foto3.jpg',
        ]);
    }
}
