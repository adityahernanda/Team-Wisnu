<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Progress extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_progress' => [
                'type' => 'VARCHAR(25)',
                'null' => false
            ],
            'id_proyek' => [
                'type' => 'VARCHAR(25)',
            ],
            'nama' => [
                'type' => 'VARCHAR(30)'
            ],
            'tgl_progress date default now()',
            'presentase' => [
                'type' => 'VARCHAR(3)'
            ],
            'keterangan' => [
                'type' => 'VARCHAR(255)'
            ],
        ]);
        $this->forge->addPrimaryKey('id_progress');
        $this->forge->addForeignKey('id_proyek', 'proyek', 'id_proyek');
        $this->forge->createTable('progress');
    }

    public function down()
    {
        $this->forge->dropTable('progress');
    }
}
