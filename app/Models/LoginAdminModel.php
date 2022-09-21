<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class LoginAdminModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'loginadmins';
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
        $this->db = Database::connect()->table('login_admin');
    }

    public function addLogin($email, $pass)
    {
        $encryptedPass = password_hash($pass, PASSWORD_BCRYPT);
        $this->db->insert([
            "email" => $email,
            "password" => $encryptedPass,
            "akses" => 1,
        ]);
    }

    public function verifyUser($email, $pass)
    {
        $user = $this->db
            ->where([
                "email" => $email,
                "is_deleted" => false
            ])
            ->get()
            ->getRowObject(0);

        if ($user) {
            return password_verify($pass, $user->password);
        }
        return false;
    }

    public function getAksesByEmail($email)
    {
        return $this->db
            ->where([
                "email" => $email,
                "is_deleted" => false
            ])
            ->get()
            ->getRowObject(0)->akses;
    }
}
