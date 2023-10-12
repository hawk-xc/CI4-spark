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
            'name' => 'dashboard',
            'title' => 'laman dashboard',
            'session' => $this->session,
            'homeNavButton' => true,
            'ticketNavButton' => false,
            'contactNavButton' => false,
        ];

        return view('dummydash', $data);
    }

    public function contact()
    {
        $data = [
            'name' => 'Contact',
            'title' => 'laman Contact',
            'session' => $this->session,
        ];

        return view('contact', $data);
    }
}
