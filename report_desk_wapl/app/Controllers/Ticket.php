<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;
use App\Models\TicketModel;

class Ticket extends BaseController
{
    public $ticketModel;
    public $contactModel;
    public $db;
    public function __construct()
    {
        $this->ticketModel = new TicketModel();
        $this->contactModel = new ContactModel();
        // $this->db = db_connect();
    }

    public function index()
    {
        $data = [
            'name'              => 'ticketing',
            'title'             => 'Ticketing',
            'homeNavButton'     => false,
            'ticketNavButton'   => true,
            'contactNavButton'  => false,
            'request'           => $this->ticketModel->select('*')->findAll(),
            'requestId'         => $this->ticketModel->select('contact_id')->findAll(),
            'open_ticket'       => $this->ticketModel->where('status', 'open')->countAllResults(),
            'close_ticket'      => $this->ticketModel->where('status', 'close')->countAllResults(),
            'contact'           => $this->contactModel->select('name')->select('phone')->findAll()
        ];

        return view('ticketing/ticket', $data);
    }

    public function create()
    {
        $data = [
            'name' => 'create ticketing',
            'title' => 'Create Ticketing',
            'homeNavButton' => false,
            'ticketNavButton' => true,
            'contactNavButton' => false,
            'ticket' => $this->ticketModel->findAll(),
            'contact' => $this->contactModel->select('name')->findAll()
        ];

        return view('ticketing/create', $data);
    }
}
