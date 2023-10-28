<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TicketModel;

class Ticket extends BaseController
{
    public $ticketModel;
    public function __construct()
    {
        $this->ticketModel = new TicketModel();
    }

    public function index()
    {
        $data = [
            'name' => 'ticketing',
            'title' => 'Ticketing',
            'homeNavButton' => false,
            'ticketNavButton' => true,
            'contactNavButton' => false,
            'formNavButton' => false,

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
