<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Session\Session;

class User extends BaseController
{
    public $session;
    public function __construct()
    {
        $this->session = session();
    }

    public function login()
    {
        $data = [
            'title' => 'Login here',
            'session' => $this->session,
        ];

        return view('login', $data);
    }
}
