<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Portofolio extends Seeder
{
    public function run()
    {
        $data = [
            [
                "id_portofolio" => "porto-123",
                "keterangan" => "Sample Image",
                "url_gambar" => "porto_sample.png",
            ]
        ];
        $this->db->table('portofolio')->insertBatch($data);
    }
}
