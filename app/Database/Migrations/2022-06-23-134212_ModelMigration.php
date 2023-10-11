<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ModelMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'model' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type' => 'date',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'date',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'date',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('models');
    }

    public function down()
    {
        $this->forge->dropTable('model');
    }
}
