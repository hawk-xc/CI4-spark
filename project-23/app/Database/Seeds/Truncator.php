<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Truncator extends Seeder
{
    public function run()
    {
        $this->db->table('card_table')->truncate();
    }
}
