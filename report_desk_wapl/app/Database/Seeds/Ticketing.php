<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use Config\Database;

class Ticketing extends Seeder
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
        for ($i = 0; $i <= 100; $i++) {
            $bilangan = rand(1, 20) / 2;
            $putar = is_float($bilangan);
            $data = [
                'contact_id'        => $bilangan,
                'subject'           => $putar ? 'MAINTENANCE' : 'NEW INSTALLATION',
                'type'              => $putar ? 'mt' : 'new',
                'status'            => $putar ? 'open' : 'close',
                'description'       => 'Lorem Ipsum testing dolor sit amet',
                'media'             => 'null',
                'created_at'        => $this->faker->dateTime->format('Y-m-d H:i:s'),
                // 'created_at'        => Time::now()
            ];
            $this->db->table('ticket')->insert($data);
        }

        // $this->db->query("INSERT INTO ticket (subject, type, contact_id, description) VALUES (:subject:, :type:, :contact_id:, :description:)", $data);

    }
}
