<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataAdmin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_admin' => [
                'type' => 'VARCHAR(25)',
                'null' => false
            ],
            'email' => [
                'type' => 'VARCHAR(25)',
            ],
            'nama' => [
                'type' => 'VARCHAR(20)'
            ],
            'hp' => [
                'type' => 'VARCHAR(15)'
            ],
        ]);
        $this->forge->addPrimaryKey('id_admin');
        $this->forge->addForeignKey('email', 'login_admin', 'email');
        $this->forge->createTable('data_admin');
    }

    public function down()
    {
        $this->forge->dropTable('data_admin');
    }
}
