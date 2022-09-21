<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataAdmin extends Seeder
{
    public function run()
    {
        $data = [
            [
                "id_admin" => "adm-123",
                "email" => "test@email.com",
                "nama" => "Admin 1",
                "hp" => "08123131",
            ],
            [
                "id_admin" => "adm-666",
                "email" => "sa@email.com",
                "nama" => "Super Admin 1",
                "hp" => "08123131",
            ]
        ];
        $this->db->table('data_admin')->insertBatch($data);
    }
}
