<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class DataAdminModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'dataadmins';
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
    protected $tableData;
    protected $tableLogin;
    public function __construct()
    {
        $this->db = Database::connect();
        $this->tableData = $this->db->table('data_admin');
        $this->tableLogin = $this->db->table('login_admin');
    }

    public function getUserDataByEmail($email)
    {
        return $this->tableData
            ->where(["email" => $email])
            ->get()
            ->getRowObject(0);
    }

    public function getUserDataById($id)
    {
        return $this->tableData
            ->where(["id_admin" => $id])
            ->get()
            ->getRowObject(0);
    }

    public function addUser($nama, $pass, $email, $hp)
    {
        $this->tableLogin->insert([
            'email' => $email,
            'password' => password_hash($pass, PASSWORD_BCRYPT)
        ]);
        $this->tableData->insert([
            'id_admin' => 'adm-' . bin2hex(random_bytes(8)),
            'email' => $email,
            'nama' => $nama,
            'hp' => $hp,
        ]);
    }

    public function getUsers()
    {
        return $this->tableData
            ->join('login_admin', 'login_admin.email = data_admin.email')
            ->where([
                'akses !=' => 0,
                'is_deleted' => false
            ])
            ->get()
            ->getResultArray();
    }

    public function editUserById($id, $pass, $email, $hp)
    {
        $oldEmail = $this->tableData
            ->where(['id_admin' => $id])
            ->get()
            ->getRowObject(0)
            ->email;

        $oldPass = $this->tableLogin
            ->where(['email' => $oldEmail])
            ->get()
            ->getRowObject(0)
            ->password;

        if ($email && ($email !== $oldEmail)) {
            $this->tableLogin->insert([
                'email' => $email,
                'password' => $pass ? password_hash($pass, PASSWORD_BCRYPT) : $oldPass
            ]);

            $this->tableData->update([
                'email' => $email,
            ], [
                'id_admin' => $id
            ]);

            $this->tableLogin->delete([
                'email' => $oldEmail
            ]);
        }

        if ($pass && !$email) {
            $this->tableLogin->update([
                'password' => password_hash($pass, PASSWORD_BCRYPT)
            ], [
                'email' => $oldEmail
            ]);
        }

        if ($hp) {
            $this->tableData->update([
                'hp' => $hp
            ], [
                'id_admin' => $id
            ]);
        }
    }

    public function deleteUserByEmail($email)
    {
        $this->tableLogin->update(
            ["is_deleted" => true],
            ["email" => $email]
        );
    }
}
