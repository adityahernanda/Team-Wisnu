<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LoginCustomer extends Seeder
{
    public function run()
    {
        $data = [
            [
                "email" => "customer@email.com",
                "password" => password_hash("123", PASSWORD_BCRYPT),
                "is_deleted" => false,
            ]
        ];
        $this->db->table('login_customer')->insertBatch($data);
    }
}
