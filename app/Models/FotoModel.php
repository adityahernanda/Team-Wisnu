<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class FotoModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'fotos';
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
        $this->db = Database::connect()->table('foto');
    }

    public function addFoto($idProgress, $gambar)
    {
        $this->db->insert([
            'id_foto' => 'foto-' . bin2hex(random_bytes(8)),
            'id_progress' => $idProgress,
            'url_foto' => $gambar,
        ]);
    }

    public function getFotoByProgressId($idProgress)
    {
        return $this->db->where([
            'id_progress' => $idProgress
        ])
            ->get()
            ->getResultArray();
    }
}
