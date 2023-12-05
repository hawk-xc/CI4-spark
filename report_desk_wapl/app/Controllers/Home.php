<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;
use App\Models\TicketModel;

class Home extends BaseController
{
    public $faker;
    public $ticket;
    public $contact;
    public function __construct()
    {
        $this->ticket = new TicketModel();
        $this->contact = new ContactModel();
        $this->faker = \Faker\Factory::create('id_ID');
    }

    public function gettimestamp($datetime)
    {
        date_default_timezone_set('Asia/Jakarta');
        $currentTimestamp = time();
        $currentDate = date('Y-m-d H:i:s', $currentTimestamp);
        $date = strtotime($datetime);
        $elapse = $currentTimestamp - $date;

        echo "waktu saat ini -> " . $currentDate . "\n" . "jumlah selisih detik -> " . $currentTimestamp - $date . "\n";

        if ($elapse < 60) {
            return "one minutes ago!";
        } elseif ($elapse < 60 * 5) {
            return "5 minutes ago!";
        } elseif ($elapse < 60 * 15) {
            return "15 minutes ago!";
        } elseif ($elapse < 60 * 30) {
            return "30 minutes ago!";
        } elseif ($elapse < 60 * 60) {
            return "one hour ago!";
        } elseif ($elapse < (60 * 60 * 24 / 2)) {
            return "12 hour ago!";
        } elseif ($elapse < (60 * 60 * 24)) {
            return "one day ago!";
        } elseif ($elapse < (60 * 60 * 24 * 7)) {
            return "one week ago!";
        } else {
            return "a year ago";
        }
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
            'open_ticket'   => $this->ticket->where('status', 'open')->countAllResults(),
            'close_ticket'  => $this->ticket->where('status', 'close')->countAllResults(),
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
            'contact'   => $this->contact->paginate(5, 'contact'),
        ];

        session()->setFlashdata('message', 'kamu baru saja kembali dari testing!');

        return view('testing', $data);
    }

    public function testing2()
    {
        $data = [
            'media' => $this->request->getFile('media'),
            'namespace' => $this->request->getVar('namespace')
        ];

        $file = $this->request->getFile('media');
        dd($file->getMimeType());
    }
}
