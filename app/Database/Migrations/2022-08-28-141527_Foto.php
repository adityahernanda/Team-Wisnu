<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Foto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_foto' => [
                'type' => 'VARCHAR(25)',
                'null' => false
            ],
            'id_proyek' => [
                'type' => 'VARCHAR(25)',
            ],
            'url_foto' => [
                'type' => 'VARCHAR(25)'
            ],
            'tgl datetime default current_timestamp'
        ]);
        $this->forge->addPrimaryKey('id_foto');
        $this->forge->addForeignKey('id_proyek', 'proyek', 'id_proyek');
        $this->forge->createTable('foto');
    }

    public function down()
    {
        $this->forge->dropTable('foto');
    }
}
