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
                "password" => "123",
                "akses" => 1,
                "is_deleted" => false,
            ]
        ];
        $this->db->table('login_admin')->insertBatch($data);
    }
}
