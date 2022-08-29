<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataCustomer extends Seeder
{
    public function run()
    {
        $data = [
            [
                "id_customer" => "cust-123",
                "email" => "customer@email.com",
                "nama" => "Pelanggan 1",
                "hp" => "08123131",
            ]
        ];
        $this->db->table('data_customer')->insertBatch($data);
    }
}
