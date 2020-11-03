<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Test\Database\Seeds;

class TestSeeder extends \CodeIgniter\Database\Seeder
{

    public function run()
    {
        $this->db->table('test')->insert(['id' => 1, 'parent_id' => null, 'name' => 'Record #1']);
        $this->db->table('test')->insert(['id' => 2, 'parent_id' => null, 'name' => 'Record #2']);
        $this->db->table('test')->insert(['id' => 3, 'parent_id' => 2, 'name' => 'Record #3']);
    }

}