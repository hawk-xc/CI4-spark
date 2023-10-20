<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use DateTime;

class Ticket extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ticket_id'      => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
                'auto_increment' => true
            ],
            'contact_id'     => [
                'type'       => 'INT',
                'constraint' => 10
            ],
            'subject'       => [
                'type'      => 'VARCHAR',
                'constraint' => 255
            ],
            'type' => [
                'type'       => 'ENUM',
                'constraint' => ['new', 'mt'],
                'default'    => 'new',
            ],
            'status'         => [
                'type'       => 'ENUM',
                'constraint' => ['open', 'close', 'pending'],
                'default'    => 'open'
            ],
            'description'    => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ]
        ]);

        // $this->forge->addKey('ticket_id');
        // $this->forge->createTable('ticket');

        $this->forge->addKey('ticket_id');
        // $this->forge->addForeignKey('contact_id', 'contact', 'contact_id');
        $this->forge->createTable('ticket');
    }

    public function down()
    {
        $this->forge->dropTable('ticket');
    }
}
