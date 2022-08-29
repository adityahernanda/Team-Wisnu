<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Proyek extends Seeder
{
    public function run()
    {
        $data = [
            [
                "id_proyek" => "proy-123",
                "id_customer" => "cust-123",
                "progress" => "Pelanggan 1",
                "lokasi_proyek" => "Semolowaru Gang Buntu",
            ]
        ];
        $this->db->table('proyek')->insertBatch($data);
    }
}
