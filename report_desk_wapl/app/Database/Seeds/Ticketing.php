<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Ticketing extends Seeder
{
    public function run()
    {
        $data = [
            'subject' => 'NEW INSTALLATION',
            'type' => 'new',
            'contact_id' => 1,
            'description' => 'REPORT FROM CUSTOMER AT 08.22 12 September 2023'
        ];

        $this->db->query("INSERT INTO ticket (subject, type, contact_id, description) VALUES (:subject:, :type:, :contact_id:, :description:)", $data);

        // $this->db->table('tickets')->insert($data);
    }
}
