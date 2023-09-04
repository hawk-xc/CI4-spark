<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'BNH (BANK NEGARA HAWK) | Card Display'
        ];

        return view('halamanutama', $data);
    }
}
