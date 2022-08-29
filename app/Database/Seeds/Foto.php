<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Foto extends Seeder
{
    public function run()
    {
        $data = [
            [
                "id_foto" => "foto-123",
                "id_proyek" => "proy-123",
                "url_foto" => "ini_url",
            ]
        ];
        $this->db->table('foto')->insertBatch($data);
    }
}
