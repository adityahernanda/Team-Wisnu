<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class ProyekModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'proyek';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

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

    protected $db;
    protected $proyek;
    protected $progress;
    public function __construct()
    {
        $this->db = Database::connect();
        $this->proyek = $this->db->table('proyek');
        $this->progress = $this->db->table('progress');
    }

    public function getProyek()
    {
        return $this->proyek
            ->get()->getResultArray();
    }

    public function getProyekByIdCustomer($idCustomer)
    {
        return $this->proyek
            ->where(['id_customer' => $idCustomer])
            ->get()->getResultArray();
    }

    public function getProgressByIdProyek($idProyek)
    {
        return $this->progress
            ->where(['id_proyek' => $idProyek])
            ->get()->getResultArray();
    }

    public function getProgressById($idProgress)
    {
        return $this->progress
            ->where(['id_progress' => $idProgress])
            ->get()->getRowObject(0);
    }

    public function getAnggaranByIdProyek($idProyek)
    {
        return $this->progress
            ->selectSum('biaya', 'anggaran')
            ->where(['id_proyek' => $idProyek])
            ->get()
            ->getRowObject(0)
            ->anggaran;
    }
}
