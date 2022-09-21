<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LoginAdmin extends Seeder
{
    public function run()
    {
        $data = [
            [
                "email" => "test@email.com",
                "password" => password_hash("123", PASSWORD_BCRYPT),
                "akses" => 1,
                "is_deleted" => false,
            ],
            [
                "email" => "sa@email.com",
                "password" => password_hash("123", PASSWORD_BCRYPT),
                "akses" => 0,
                "is_deleted" => false,
            ],
        ];
        $this->db->table('login_admin')->insertBatch($data);
    }
}
