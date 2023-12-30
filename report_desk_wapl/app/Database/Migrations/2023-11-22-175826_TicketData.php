<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TicketData extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ticket_data_id' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
                'auto_increment' => true
            ],
            'ticket_id'      => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true
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

        $this->forge->addKey('ticket_data_id', true);
        // $this->forge->addKey('contact_id', false);
        $this->forge->addForeignKey('ticket_id', 'ticket', 'ticket_id', 'CASCADE', 'CASCADE', 'ticket_data_fk');
        $this->forge->createTable('ticket_data');
    }

    public function down()
    {
        $this->forge->dropTable('ticket_data');
    }
}
