<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Test\Database\Migrations;

class CreateTestTable extends \BasicApp\Migration\BaseMigration
{

    public $table = 'test';

    public function up()
    {
        $this->forge->addField([
            'id' => $this->primaryKey()->toArray(),
            'parent_id' => $this->foreignKey()->toArray(),
            'created' => $this->created()->toArray(),
            'name' => $this->string()->toArray()
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey('parent_id', $this->table, 'id', 'RESTRICT', 'RESTRICT');

        $this->forge->createTable($this->table, false);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }

}