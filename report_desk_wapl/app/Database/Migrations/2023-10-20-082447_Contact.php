<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contact extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'contact_id'      => [
                'type'        => 'INT',
                'constraint'  => 10,
                'unsigned'    => true,
                'auto_increment' => true
            ],
            'name' => [
                'type'        => 'VARCHAR',
                'constraint'  => 255,
                // 'unsigned' => true
            ],
            'mail' => [
                'type'        => 'VARCHAR',
                'constraint'  => 255,
                // 'unsigned' => true
            ],
            'phone' => [
                'type'        => 'VARCHAR',
                'constraint'  => 255,
                // 'unsigned' => true
            ],
            'address' => [
                'type'        => 'VARCHAR',
                'constraint'  => 255,
                // 'unsigned' => true
            ],
            'description'     => [
                'type'        => 'VARCHAR',
                'constraint'  => 255
            ]
        ]);

        $this->forge->addKey('contact_id');
        $this->forge->createTable('contact');
    }

    public function down()
    {
        $this->forge->dropTable('contact');
    }
}
