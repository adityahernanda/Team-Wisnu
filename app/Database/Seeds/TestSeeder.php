<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TestSeeder extends Seeder
{
    public function run()
    {
        $this->call('LoginAdmin');
        $this->call('DataAdmin');
        $this->call('LoginCustomer');
        $this->call('DataCustomer');
        $this->call('Proyek');
        $this->call('Pembayaran');
        $this->call('JenisPekerjaan');
        $this->call('Rab');
        $this->call('Progress');
        $this->call('Portofolio');
        $this->call('Foto');
    }
}
