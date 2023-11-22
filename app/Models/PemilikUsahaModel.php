<?php

namespace App\Models;

use CodeIgniter\Model;

class PemilikUsahaModel extends Model
{
    protected $table            = 'data_kendaraan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['jenis_kendaraan', 'harga', 'foto'];

    // Dates
    protected $useTimestamps = true;
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
    
    public function getAllPemilik()
    {
        return $this->findAll();
    }

    public function getPemilikById($id)
    {
        return $this->find($id);
    }

    public function createPemilik($data)
    {
        return $this->insert($data);
    }

    public function updatePemilik($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deletePemilik($id)
    {
        return $this->delete($id);
    }


}
