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
            'id_user' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tgl_pemesanan' => [
                'type' => 'DATETIME',
                'null' => false,
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
            'harga' => [
                'type' => 'INT',
                'constraint' => 12,
                'unsigned' => true,
            ],
            'jns_pembayaran' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
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
        $this->forge->addForeignKey('id_user', 'users', 'id');
        $this->forge->addForeignKey('id_area_pencucian', 'area_pencucian', 'id');
        $this->forge->createTable('data_transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('data_transaksi', true);
    }
}