<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Ticket extends BaseController
{
    public function index()
    {
        $data = [
            'name' => 'ticketing',
            'title' => 'Ticketing',
            'homeNavButton' => false,
            'ticketNavButton' => true,
            'contactNavButton' => false,
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
        ];

        return view('ticketing/create', $data);
    }
}
