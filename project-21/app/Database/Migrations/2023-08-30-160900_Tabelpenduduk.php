<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;

class Tabelpenduduk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'auto_increment'    => true
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'acc_number' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => Time::now()
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => Time::now()
            ]
        ]);
        $this->forge->addKey('id');
        $this->forge->createTable('tabelpenduduk');
    }

    public function down()
    {
        $this->forge->dropTable('tabelpenduduk');
    }
}
