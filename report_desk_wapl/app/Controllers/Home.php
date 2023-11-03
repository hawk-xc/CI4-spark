<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public $faker;
    public function __construct()
    {
        $this->faker = \Faker\Factory::create('id_ID');
    }

    public function index()
    {
        $data = [
            'name' => 'dashboard',
            'title' => 'laman dashboard',
            // 'session' => $this->session,
            'homeNavButton' => true,
            'ticketNavButton' => false,
            'contactNavButton' => false,
            'formNavButton' => false,

        ];

        return view('dashboard', $data);
    }

    public function testing()
    {
        $data = [
            'name' => 'testing',
            'title' => 'halaman testing',
            'homeNavButton' => false,
            'ticketNavButton' => false,
            'contactNavButton' => false,
            'formNavButton' => false,
            'faker' => [$this->faker->name, $this->faker->address, $this->faker->email]
        ];

        session()->setFlashdata('message', 'kamu baru saja kembali dari testing!');

        return view('testing', $data);
    }

    public function testing2()
    {
        $data = [
            'name' => 'testing',
            'title' => 'halaman testing',
            'homeNavButton' => false,
            'ticketNavButton' => false,
            'contactNavButton' => false,
            'faker' => [$this->faker->name, $this->faker->address, $this->faker->email]
        ];

        return view('testing2', $data);
    }
}
