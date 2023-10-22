<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use Config\Database;

class Contact extends Seeder
{
    public $faker;
    public $db;

    public function __construct()
    {
        $this->faker = \Faker\Factory::create('id_ID');
        $this->db = Database::connect();
    }

    public function run()
    {
        // BATCH INPUT FAKE DATA
        for ($i = 0; $i < 20; $i++) {
            $data = [
                'name'      => $this->faker->name,
                'email'     => $this->faker->email,
                'phone'     => $this->faker->phoneNumber,
                'address'   => $this->faker->address,
                'created_at' => Time::now()
            ];
            $this->db->table('contact')->insert($data);
        }
    }
}
