<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ContactTruncate extends Seeder
{
    public function run()
    {
        $data = [
            'name',
            'email',
            'phone',
            'address'
        ];
    }
}
