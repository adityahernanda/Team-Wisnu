<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JenisPekerjaan extends Seeder
{
    public function run()
    {
        $data = [
            [
                "id_jenis" => "jenis-123",
                "nama" => "Pekerjaan Teras",
            ]
        ];
        $this->db->table('jenis_pekerjaan')->insertBatch($data);
    }
}
