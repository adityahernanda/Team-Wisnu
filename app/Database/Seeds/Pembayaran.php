<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pembayaran extends Seeder
{
    public function run()
    {
        $data = [
            [
                "id_pembayaran" => "pemb-123",
                "id_proyek" => "proy-123",
                "jumlah" => 1000000,
                "ket" => "DP",
            ]
        ];
        $this->db->table('pembayaran')->insertBatch($data);
    }
}
