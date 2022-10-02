<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class PortofolioModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'portofolios';
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
    public function __construct()
    {
        $this->db = Database::connect()->table('portofolio');
    }

    public function addPortofolio($gbr, $ket)
    {
        $this->db->insert([
            'id_portofolio' => 'porto-' . bin2hex(random_bytes(8)),
            'url_gambar' => $gbr,
            'keterangan' => $ket,
        ]);
    }

    public function getPortofolio()
    {
        return $this->db
            ->get()
            ->getResultArray();
    }

    public function getPortofolioById($id)
    {
        return $this->db
            ->where([
                'id_portofolio' => $id
            ])
            ->get()
            ->getRowObject(0);
    }

    public function editPortofolio($id, $ket, $gbr = null)
    {
        if ($gbr) {
            $this->db->update([
                'url_gambar' => $gbr,
                'keterangan' => $ket,
            ], [
                'id_portofolio' => $id,
            ]);
        } else {
            $this->db->update([
                'keterangan' => $ket,
            ], [
                'id_portofolio' => $id,
            ]);
        }
    }

    public function deletePortofolio($id)
    {
        $this->db->delete([
            'id_portofolio' => $id
        ]);
    }
}
