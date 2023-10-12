<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function tambah($a, $b)
    {
        return "hasil dari penjumlahan antara $a dan $b adalah " . $a + $b;
    }
}
