<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterContact extends Migration
{
    public function up()
    {
        $this->forge->addColumn("contact", [
            'updated_at DATETIME'
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn("contact", "updated_at");
    }
}
