<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisPekerjaan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jenis' => [
                'type' => 'VARCHAR(25)',
                'null' => false
            ],
            'nama' => [
                'type' => 'VARCHAR(20)'
            ]
        ]);
        $this->forge->addPrimaryKey('id_jenis');
        $this->forge->createTable('jenis_pekerjaan');
    }

    public function down()
    {
        $this->forge->dropTable('jenis_pekerjaan');
    }
}
