<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Progress extends Seeder
{
    public function run()
    {
        $data = [
            [
                "id_progress" => "prog-123",
                "id_proyek" => "proy-123",
                "nama" => "Pasang ubin",
                'biaya' => 5000000,
                'presentase' => 50,
                'keterangan' => 'Terpakai 5 sisa 6',
            ],
            [
                "id_progress" => "prog-666",
                "id_proyek" => "proy-666",
                "nama" => "Pasang Jendela",
                'biaya' => 10000000,
                'presentase' => 50,
                'keterangan' => 'Terpakai 5 sisa 6',
            ]
        ];
        $this->db->table('progress')->insertBatch($data);
    }
}
