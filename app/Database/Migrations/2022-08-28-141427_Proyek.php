<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Proyek extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_proyek' => [
                'type' => 'VARCHAR(25)',
                'null' => false
            ],
            'id_customer' => [
                'type' => 'VARCHAR(25)',
            ],
            'nama' => [
                'type' => 'VARCHAR(25)'
            ],
            'lokasi_proyek' => [
                'type' => 'VARCHAR(30)'
            ],
            'tgl_mulai' => [
                'type' => 'DATE'
            ],
            'tgl_selesai' => [
                'type' => 'DATE'
            ],
        ]);
        $this->forge->addPrimaryKey('id_proyek');
        $this->forge->addForeignKey('id_customer', 'data_customer', 'id_customer');
        $this->forge->createTable('proyek');
    }

    public function down()
    {
        $this->forge->dropTable('proyek');
    }
}
