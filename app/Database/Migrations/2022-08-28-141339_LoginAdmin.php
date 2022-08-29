<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LoginAdmin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'email' => [
                'type' => 'VARCHAR(25)',
                'null' => false
            ],
            'password' => [
                'type' => 'VARCHAR(20)'
            ],
            'akses' => [
                'type' => 'INT(3)'
            ],
            'is_deleted' => [
                'type' => 'BOOLEAN',
                'default' => false
            ],
        ]);
        $this->forge->addPrimaryKey('email');
        $this->forge->createTable('login_admin');
    }

    public function down()
    {
        $this->forge->dropTable('login_admin');
    }
}
