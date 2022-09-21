<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LoginCustomer extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'email' => [
                'type' => 'VARCHAR(25)',
                'null' => false
            ],
            'password' => [
                'type' => 'VARCHAR(80)'
            ],
            'is_deleted' => [
                'type' => 'BOOLEAN',
                'default' => false
            ],
        ]);
        $this->forge->addPrimaryKey('email');
        $this->forge->createTable('login_customer');
    }

    public function down()
    {
        $this->forge->dropTable('login_customer');
    }
}
