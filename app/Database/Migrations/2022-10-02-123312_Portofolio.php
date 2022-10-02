<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Portofolio extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_portofolio' => [
                'type' => 'VARCHAR(25)',
                'null' => false
            ],
            'url_gambar' => [
                'type' => 'VARCHAR(30)'
            ],
            'keterangan' => [
                'type' => 'VARCHAR(30)'
            ],
        ]);
        $this->forge->addPrimaryKey('id_portofolio');
        $this->forge->createTable('portofolio');
    }

    public function down()
    {
        $this->forge->dropTable('portofolio');
    }
}
