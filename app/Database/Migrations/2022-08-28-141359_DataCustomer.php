<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataCustomer extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_customer' => [
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
        $this->forge->addPrimaryKey('id_customer');
        $this->forge->addForeignKey('email', 'login_customer', 'email');
        $this->forge->createTable('data_customer');
    }

    public function down()
    {
        $this->forge->dropTable('data_customer');
    }
}
