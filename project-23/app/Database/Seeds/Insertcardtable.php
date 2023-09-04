<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Insertcardtable extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $faker = \Faker\Factory::create('id_ID');
            $data = [
                'name'          => $faker->name(),
                'address'       => $faker->address(),
                'uc_number'     => hash('md5', random_int(100000, 199999)),
                'priority'      => rand(0, 1) ? 'pr' : 'no_pr',
                'created_at'     => $faker->date()
            ];
            $this->db->table('card_table')->insertBatch($data);
        }
    }
}
