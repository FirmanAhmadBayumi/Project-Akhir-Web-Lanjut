<?php

namespace App\Database\Seeds;

use App\Models\AreaPencucianModel;
use CodeIgniter\Database\Seeder;

class AreaPencucianSeeder extends Seeder
{
    public function run()
    {
        $areaPencModel = new AreaPencucianModel();

        $areaPencModel->save([
            'area_pencucian' => 'Area 1',
        ]);
        $areaPencModel->save([
            'area_pencucian' => 'Area 2',
        ]);
        $areaPencModel->save([
            'area_pencucian' => 'Area 3',
        ]);
    }
}
