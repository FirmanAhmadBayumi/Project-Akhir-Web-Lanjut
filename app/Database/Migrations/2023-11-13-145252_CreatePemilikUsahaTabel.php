<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;


class CreatePemilikUsahaTabel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'jenis_kendaraan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => '10',
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('data_kendaraan');
    }

    public function down()
    {
        $this->forge->dropTable('data_kendaraan', true);
    }
    
}
