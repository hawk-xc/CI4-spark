<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;
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
                'constraint' => 10,
                'unsigned'   => true
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
            ],
            'media'          => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true
            ],
            'created_at'     => [
                'type'       => 'datetime',
                'null'       => false
            ]
        ]);

        $this->forge->addKey('ticket_id', true);
        // $this->forge->addKey('contact_id', false);
        $this->forge->addForeignKey('contact_id', 'contact', 'contact_id', 'CASCADE', 'CASCADE', 'contact_fk');
        $this->forge->createTable('ticket');
    }

    public function down()
    {
        $this->forge->dropTable('ticket');
    }
}
