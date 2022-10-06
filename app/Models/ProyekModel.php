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

    public function addProyek($idCustomer, $idAdmin, $nama, $lokasi, $biaya, $tglMulai, $tglSelesai, $rab)
    {
        $this->proyek->insert([
            'id_proyek' => 'proy-' . bin2hex(random_bytes(8)),
            'id_customer' => $idCustomer,
            'id_admin' => $idAdmin,
            'nama' => $nama,
            'lokasi_proyek' => $lokasi,
            'biaya' => $biaya,
            'tgl_mulai' => $tglMulai,
            'tgl_selesai' => $tglSelesai,
            'rab' => $rab,
        ]);
    }

    public function getProyek()
    {
        return $this->proyek
            ->get()->getResultArray();
    }

    public function getProyekWithOwner()
    {
        return $this->proyek
            ->select('proyek.id_admin, proyek.id_customer, proyek.biaya, proyek.tgl_mulai, proyek.tgl_selesai, id_proyek, data_customer.nama AS nama_owner, data_admin.nama AS nama_pengawas, proyek.nama AS nama_proyek, lokasi_proyek')
            ->join('data_customer', 'proyek.id_customer = data_customer.id_customer')
            ->join('data_admin', 'proyek.id_admin = data_admin.id_admin')
            ->where(['status' => 'Dikerjakan'])
            ->get()
            ->getResultArray();
    }

    public function getProyekWithOwnerSelesai()
    {
        return $this->proyek
            ->select('id_proyek, data_customer.nama AS nama_owner, data_admin.nama AS nama_pengawas, proyek.nama AS nama_proyek, lokasi_proyek, status')
            ->join('data_customer', 'proyek.id_customer = data_customer.id_customer')
            ->join('data_admin', 'proyek.id_admin = data_admin.id_admin')
            ->where(['status !=' => 'Dikerjakan'])
            ->get()
            ->getResultArray();
    }

    public function getProyekOwnerById($idProyek)
    {
        return $this->proyek
            ->where(['id_proyek' => $idProyek])
            ->get()
            ->getRowObject(0)
            ->id_customer;
    }

    public function getProyekAdminById($idProyek)
    {
        return $this->proyek
            ->where(['id_proyek' => $idProyek])
            ->get()
            ->getRowObject(0)
            ->id_admin;
    }

    public function getProyekByIdCustomer($idCustomer, $status = null)
    {
        if ($status) {
            return $this->proyek
                ->select('id_proyek, data_admin.nama AS nama_admin, proyek.nama, lokasi_proyek, tgl_mulai, tgl_selesai, status')
                ->where([
                    'id_customer' => $idCustomer,
                    'status !=' => 'Dikerjakan',
                ])
                ->join('data_admin', 'data_admin.id_admin = proyek.id_admin')
                ->get()->getResultArray();
        } else {
            return $this->proyek
                ->select('id_proyek, data_admin.nama AS nama_admin, proyek.nama, lokasi_proyek, tgl_mulai, tgl_selesai, status')
                ->where([
                    'id_customer' => $idCustomer,
                    'status' => 'Dikerjakan',
                ])
                ->join('data_admin', 'data_admin.id_admin = proyek.id_admin')
                ->get()->getResultArray();
        }
    }

    public function getProyekByIdAdmin($idAdmin, $status = null)
    {
        if ($status) {
            return $this->proyek
                ->select('id_proyek, data_customer.nama AS nama_owner, proyek.nama, lokasi_proyek, tgl_mulai, tgl_selesai, status')
                ->where([
                    'id_admin' => $idAdmin,
                    'status !=' => 'Dikerjakan',
                ])
                ->join('data_customer', 'data_customer.id_customer = proyek.id_customer')
                ->get()->getResultArray();
        } else {
            return $this->proyek
                ->select('id_proyek, data_customer.nama AS nama_owner, proyek.nama, lokasi_proyek, tgl_mulai, tgl_selesai, status')
                ->where([
                    'id_admin' => $idAdmin,
                    'status' => 'Dikerjakan',
                ])
                ->join('data_customer', 'data_customer.id_customer = proyek.id_customer')
                ->get()->getResultArray();
        }
    }

    public function getProyekById($idProyek)
    {
        return $this->proyek
            ->select('proyek.id_admin, proyek.id_customer, proyek.biaya, proyek.tgl_mulai, proyek.tgl_selesai, id_proyek, data_customer.nama AS nama_owner, data_admin.nama AS nama_pengawas, proyek.nama AS nama_proyek, lokasi_proyek, rab, status')
            ->join('data_customer', 'proyek.id_customer = data_customer.id_customer')
            ->join('data_admin', 'proyek.id_admin = data_admin.id_admin')
            ->where(['id_proyek' => $idProyek])
            ->get()
            ->getRowObject(0);
    }

    public function addProgressByIdProyek($idProyek, $nama, $tgl, $presentase, $ket)
    {
        $generatedId = 'prog-' . bin2hex(random_bytes(8));
        $this->progress->insert([
            'id_progress' => $generatedId,
            'id_proyek' => $idProyek,
            'nama' => $nama,
            'tgl_progress' => $tgl,
            'presentase' => $presentase,
            'keterangan' => $ket,
        ]);
        return $generatedId;
    }

    public function getProgressByIdProyek($idProyek)
    {
        return $this->progress
            ->where(['id_proyek' => $idProyek])
            ->get()->getResultArray();
    }

    public function editProgressById($id, $nama, $tgl, $presentase, $ket)
    {
        $this->progress->update([
            'nama' => $nama,
            'tgl_progress' => $tgl,
            'presentase' => $presentase,
            'keterangan' => $ket,
        ], [
            'id_progress' => $id,
        ]);
    }

    public function getProgressById($idProgress)
    {
        return $this->progress
            ->where(['id_progress' => $idProgress])
            ->get()->getRowObject(0);
    }

    public function editProyek($idProyek, $idCustomer, $idAdmin, $nama, $lokasi, $biaya, $tglMulai, $tglSelesai, $rab = null)
    {
        if ($rab) {
            $this->proyek->update(
                [
                    'id_customer' => $idCustomer,
                    'id_admin' => $idAdmin,
                    'nama' => $nama,
                    'lokasi_proyek' => $lokasi,
                    'biaya' => $biaya,
                    'tgl_mulai' => $tglMulai,
                    'tgl_selesai' => $tglSelesai,
                    'rab' => $rab,
                ],
                [
                    'id_proyek' => $idProyek
                ]
            );
        } else {
            $this->proyek->update(
                [
                    'id_customer' => $idCustomer,
                    'id_admin' => $idAdmin,
                    'nama' => $nama,
                    'lokasi_proyek' => $lokasi,
                    'biaya' => $biaya,
                    'tgl_mulai' => $tglMulai,
                    'tgl_selesai' => $tglSelesai,
                ],
                [
                    'id_proyek' => $idProyek
                ]
            );
        }
    }

    public function updateStatusByProyekId($id, $status)
    {
        $this->proyek->update(
            [
                'status' => $status
            ],
            [
                'id_proyek' => $id
            ]
        );
    }
}
