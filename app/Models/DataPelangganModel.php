<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPelangganModel extends Model
{
    protected $table = 'data_pelanggan';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['nama', 'alamat', 'jenis_kelamin', 'no_hp'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    //punya firman untuk create sama edit pelanggan
    public function saveDataPelanggan($data) {
        $this->insert($data);
    }
    public function updateDataPelangganControl($id, $data) {
        return $this->update($id, $data);
    }
    public function getDataPelangganID() {
        return $this->select('data_pelanggan.*')->where('id', 1)->first();
    }
    //bates punya firman

    public function getDataPelangganById($id)
    {
        return $this->select('data_pelanggan.*')->where('id', $id)->first();
    }
    public function getDataPelanggan()
    {
        return $this->select('data_pelanggan.*')->findAll();
    }
    public function updateDataPelanggan($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deletePelanggan($id)
{
    $this->userModel->delete($id);
    return redirect()->to(base_url('admin/datapelanggan'));
}
}