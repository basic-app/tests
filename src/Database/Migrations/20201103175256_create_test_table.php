<?php

namespace BasicApp\Test\Database\Migrations;

class CreateTestTable extends \CodeIgniter\Database\Migration
{

    public $table = 'test';

    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'auto_increment' => true],
            'parent_id' => ['type' => 'INT', 'default' => null, 'null' => true],
            'created_at' => ['type' => 'TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP'],
            'name' => ['type' => 'VARCHAR', 'constraint' => 255]
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey('parent_id', $this->table, 'id', 'RESTRICT', 'RESTRICT');

        $this->forge->createTable($this->table, false, ['ENGINE' => 'InnoDB']);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }

}