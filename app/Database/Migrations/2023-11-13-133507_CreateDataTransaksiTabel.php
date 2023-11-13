<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDataTransaksiTabel extends Migration
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
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'jenis_motor' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_area_pencucian' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
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
        $this->forge->addForeignKey('id_area_pencucian', 'area_pencucian', 'id');
        $this->forge->createTable('data_transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('data_transaksi', true);
    }
}
