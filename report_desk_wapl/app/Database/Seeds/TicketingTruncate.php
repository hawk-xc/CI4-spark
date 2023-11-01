<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TicketingTruncate extends Seeder
{
    public function run()
    {
        $this->db->table('ticket')->truncate();
    }
}
