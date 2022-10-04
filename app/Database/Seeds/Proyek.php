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
                "id_admin" => "adm-123",
                "nama" => "Proyek 1",
                "lokasi_proyek" => "Semolowaru Gang Buntu",
                "selesai" => true,
                "rab" => "no",
            ],
            [
                "id_proyek" => "proy-666",
                "id_customer" => "cust-123",
                "id_admin" => "adm-123",
                "nama" => "Proyek 2",
                "lokasi_proyek" => "Semolowaru Gang Buntu",
                "selesai" => false,
                "rab" => "no",
            ],
        ];
        $this->db->table('proyek')->insertBatch($data);
    }
}
