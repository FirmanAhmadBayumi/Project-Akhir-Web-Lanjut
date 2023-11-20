<?php

namespace App\Models;

use CodeIgniter\Model;

class AreaPencucianModel extends Model
{
    protected $table            = 'area_pencucian';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['area_pencucian'];

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
    public function getAllAreaPencucian()
    {
        return $this->findAll();
    }

    public function getAreaPencucianById($id)
    {
        return $this->find($id);
    }

    public function createAreaPencucian($data)
    {
        return $this->insert($data);
    }

    public function updateAreaPencucian($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteAreaPencucian($id)
    {
        return $this->delete($id);
    }
}
