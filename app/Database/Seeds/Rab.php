<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Rab extends Seeder
{
    public function run()
    {
        $data = [
            [
                "id_rab" => "rab-123",
                "id_proyek" => "proy-123",
                "id_jenis" => "jenis-123",
                "uraian" => "Semen",
                "volume" => 1,
                "satuan" => "sak",
                "harga_satuan" => 15000,
            ]
        ];
        $this->db->table('rab')->insertBatch($data);
    }
}
