<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ContactTruncate extends Seeder
{
    public function run()
    {
        $this->db->table('contact')->truncate();
    }
}
