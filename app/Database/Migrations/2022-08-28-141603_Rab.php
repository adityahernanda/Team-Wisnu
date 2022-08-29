<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rab extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_rab' => [
                'type' => 'VARCHAR(25)',
                'null' => false
            ],
            'id_proyek' => [
                'type' => 'VARCHAR(25)',
            ],
            'id_jenis' => [
                'type' => 'VARCHAR(25)',
            ],
            'uraian' => [
                'type' => 'VARCHAR(50)'
            ],
            'volume' => [
                'type' => 'INT'
            ],
            'satuan' => [
                'type' => 'VARCHAR(10)'
            ],
            'harga_satuan' => [
                'type' => 'INT'
            ],
        ]);
        $this->forge->addPrimaryKey('id_rab');
        $this->forge->addForeignKey('id_proyek', 'proyek', 'id_proyek');
        $this->forge->addForeignKey('id_jenis', 'jenis_pekerjaan', 'id_jenis');
        $this->forge->createTable('rab');
    }

    public function down()
    {
        $this->forge->dropTable('rab');
    }
}
