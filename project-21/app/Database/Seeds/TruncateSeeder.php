<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TruncateSeeder extends Seeder
{
    public function run()
    {
        $table = 'tabelpenduduk';

        $this->db->table($table)->truncate();
    }
}
