<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class PembayaranModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pembayarans';
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
        $this->db = Database::connect()->table('pembayaran');
    }

    public function addPembayaran($idProyek, $jumlah, $ket, $tgl)
    {
        $this->db->insert([
            "id_pembayaran" => "pemb-" . bin2hex(random_bytes(8)),
            "id_proyek" => $idProyek,
            "jumlah" => $jumlah,
            "ket" => $ket,
            "tgl" => $tgl,
        ]);
    }

    public function getPembayaranByIdProyek($idProyek)
    {
        return $this->db
            ->where(['id_proyek' => $idProyek])
            ->get()->getResultArray();
    }

    public function getTerbayarByIdProyek($idProyek)
    {
        return $this->db
            ->selectSum('jumlah', 'terbayar')
            ->where(['id_proyek' => $idProyek])
            ->get()
            ->getRowObject(0)
            ->terbayar ?: '0';
    }

    public function deletePembayaranById($id)
    {
        $this->db->delete(['id_pembayaran' => $id]);
    }
}
