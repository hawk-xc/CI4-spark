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
            'request'           => $this->ticketModel->findAll(),
            'row'               => $this->ticketModel->countAllResults(),
            'open_ticket'       => $this->ticketModel->findAll()
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
            'ticket' => $this->ticketModel->findAll()
        ];

        return view('ticketing/create', $data);
    }
}
