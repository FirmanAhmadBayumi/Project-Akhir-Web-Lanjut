<?php

namespace App\Models;

use CodeIgniter\Model;

class DataTransaksiModel extends Model
{
    protected $table            = 'data_transaksi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'alamat', 'tgl_pemesanan', 'jenis_motor', 'id_area_pencucian', 'harga', 'jns_pembayaran'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function saveDataTransaksi($data){
        $this->insert($data);
    }
    public function getDataTransaksi(){
        return $this->select('data_transaksi.*, area_pencucian.area_pencucian')
            ->join('area_pencucian', 'area_pencucian.id=data_transaksi.id_area_pencucian')->findAll();
    }
}
