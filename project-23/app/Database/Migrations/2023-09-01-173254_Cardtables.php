<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;

class Cardtables extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'uc_number' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'priority' => [
                'type' => 'ENUM',
                'constraint' => ['pr', 'no_pr']
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('card_table');
    }

    public function down()
    {
        $this->forge->dropTable('card_table');
    }
}
