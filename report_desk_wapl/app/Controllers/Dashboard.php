<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Session\Session;

class Dashboard extends BaseController
{
    public $session;
    public function __construct()
    {
        $this->session = session();
    }

    public function index()
    {
        $data = [
            'title' => 'laman dashboard',
            'session' => $this->session,
        ];

        return view('dashboard.php', $data);
    }
}
