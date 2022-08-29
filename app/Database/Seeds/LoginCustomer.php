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
                "password" => "123",
                "is_deleted" => false,
            ]
        ];
        $this->db->table('login_customer')->insertBatch($data);
    }
}
