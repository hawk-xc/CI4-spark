<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()

    {
        $data = [
            'name' => 'dashboard',
            'title' => 'laman dashboard',
            // 'session' => $this->session,
            'homeNavButton' => true,
            'ticketNavButton' => false,
            'contactNavButton' => false,
        ];

        return view('dummydash', $data);
    }
}
