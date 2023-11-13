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
            'jenis' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => '10',
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
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
        $this->forge->createTable('pemilik_usaha');
    }

    public function down()
    {
        $this->forge->dropTable('pemilik_usaha', true);
    }
    
}
