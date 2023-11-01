<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Ticketing extends Seeder
{
    public function run()
    {
        for ($i = 0; $i <= 10; $i++) {
            $bilangan = rand(1, 20) / 2;
            $putar = is_float($bilangan);
            $data = [
                'contact_id'        => $bilangan,
                'subject'           => $putar ? 'MAINTENANCE' : 'NEW INSTALLATION',
                'type'              => $putar ? 'mt' : 'new',
                'status'            => $putar ? 'open' : 'close',
                'description'       => 'Lorem Ipsum testing dolor sit amet',
                'created_at'        => Time::now()
            ];
            $this->db->table('ticket')->insert($data);
        }

        // $this->db->query("INSERT INTO ticket (subject, type, contact_id, description) VALUES (:subject:, :type:, :contact_id:, :description:)", $data);

    }
}
