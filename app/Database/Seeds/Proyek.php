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
                "biaya" => 10000000,
                "status" => "Dikerjakan",
                "rab" => "no",
            ],
            [
                "id_proyek" => "proy-666",
                "id_customer" => "cust-123",
                "id_admin" => "adm-123",
                "nama" => "Proyek 2",
                "lokasi_proyek" => "Semolowaru Gang Buntu",
                "biaya" => 5000000,
                "status" => "Selesai",
                "rab" => "no",
            ],
            [
                "id_proyek" => "proy-111",
                "id_customer" => "cust-123",
                "id_admin" => "adm-123",
                "nama" => "Proyek Cancelled",
                "lokasi_proyek" => "Wiyung",
                "biaya" => 3000000,
                "status" => "Cancelled",
                "rab" => "no",
            ],
        ];
        $this->db->table('proyek')->insertBatch($data);
    }
}
