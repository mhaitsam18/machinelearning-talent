<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DatasetMigration extends Migration
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
                'constraint' => '225',
            ],
            'id_user' => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'id_result' => [
                'type'       => 'INT',
                'constraint' => 5,
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
        $this->forge->createTable('Dataset');
    }

    public function down()
    {
        $this->forge->dropTable('Dataset');
    }
}
