<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use Config\Database;

class Admin extends Seeder
{
    public $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function run()
    {
        // $users = [
        //     'email'     => 'admin@gmail.com',
        //     'username'  => 'admin',
        //     'password_hash'  => password_hash('admin123', PASSWORD_DEFAULT),
        //     'active'    => 1,
        //     'created_at' => Time::now()
        // ];

        $auth_groups = [
            [
                'name'      => 'admin',
                'description'      => 'admin account'
            ],
            [
                'name'      => 'noc',
                'description'      => 'noc\'s account manager'
            ],
            [
                'name'      => 'teknisi',
                'description'      => 'teknisi\'s account manager'
            ],
            [
                'name'      => 'user',
                'description'      => 'guest account'
            ]
        ];

        $auth_groups_user = [
            'group_id'      => '1',
            'user_id'       => '1'
        ];

        // $this->db->table('users')->insert($users);
        $this->db->table('auth_groups')->insertBatch($auth_groups);
        // $this->db->table('auth_groups_users')->insert($auth_groups_user);

        // update auth_groups_users set group_id=1 where user_id=1
    }
}
