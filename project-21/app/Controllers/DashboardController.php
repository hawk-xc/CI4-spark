<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PHPUnit\TextUI\XmlConfiguration\PhpHandler;

class DashboardController extends BaseController
{
    public function index()
    {
        return view('dashboard/index');
    }
}
