<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'null'       => true,
                'constraint' => '125',
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '125',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '125',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '125',
            ],
            'role' => [
                'type' => 'VARCHAR',
                'constraint' => '125',
            ],
            'profile' => [
                'type' => 'VARCHAR',
                'constraint' => '125',
                'default' => 'default.png'
            ],
            'created_at' => [
                'type' => 'date ',
                'null'       => true,
            ],
            'updated_at' => [
                'type' => 'date ',
                'null'       => true,
            ],
            'deleted_at' => [
                'type' => 'date ',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
