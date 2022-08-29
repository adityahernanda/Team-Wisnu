<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pembayaran' => [
                'type' => 'VARCHAR(25)',
                'null' => false
            ],
            'id_proyek' => [
                'type' => 'VARCHAR(25)',
            ],
            'jumlah' => [
                'type' => 'INT'
            ],
            'ket' => [
                'type' => 'VARCHAR(50)'
            ],
            'tgl datetime default current_timestamp'
        ]);
        $this->forge->addPrimaryKey('id_pembayaran');
        $this->forge->addForeignKey('id_proyek', 'proyek', 'id_proyek');
        $this->forge->createTable('pembayaran');
    }

    public function down()
    {
        $this->forge->dropTable('pembayaran');
    }
}
