<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Tabelpenduduk extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'wahyu',
            ],

            [
                'nama' => 'cahyono'
            ]
        ];

        $this->db->table('tabelpenduduk')->insertBatch($data);
    }
}
