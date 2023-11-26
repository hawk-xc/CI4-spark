<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TicketModel;
use CodeIgniter\Session\Session;

class Dashboard extends BaseController
{
    public $session;
    public $ticketModel;
    public function __construct()
    {
        $this->session = session();
        $this->ticketModel = new TicketModel();
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
            'formNavButton' => false,
            'open_ticket'       => $this->ticketModel->where('status', 'open')->countAllResults(),
            'close_ticket'      => $this->ticketModel->where('status', 'close')->countAllResults(),
        ];

        return view('dashboard', $data);
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
