<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Test\Database\Seeds;

class TruncateTestSeeder extends \CodeIgniter\Database\Seeder
{

    public function run()
    {
        $this->db->table('test')->truncate();
    }

}