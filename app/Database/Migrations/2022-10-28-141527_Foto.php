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
            'id_progress' => [
                'type' => 'VARCHAR(25)',
            ],
            'url_foto' => [
                'type' => 'VARCHAR(80)'
            ],
            'tgl datetime default current_timestamp'
        ]);
        $this->forge->addPrimaryKey('id_foto');
        $this->forge->addForeignKey('id_progress', 'progress', 'id_progress');
        $this->forge->createTable('foto');
    }

    public function down()
    {
        $this->forge->dropTable('foto');
    }
}
