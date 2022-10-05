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
                "id_progress" => "prog-123",
                "url_foto" => "porto_sample.png",
            ]
        ];
        $this->db->table('foto')->insertBatch($data);
    }
}
