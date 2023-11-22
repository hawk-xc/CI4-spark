<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;
use App\Models\TicketModel;
use CodeIgniter\I18n\Time;

class Ticket extends BaseController
{
    public $ticketModel;
    public $contactModel;
    public $request;
    public $db;
    public $session;
    public function __construct()
    {
        $this->ticketModel = new TicketModel();
        $this->contactModel = new ContactModel();
        $this->request = request();
        $this->session = session();
        $this->db = db_connect();
    }

    public function gettimestamp($datetime)
    {
        date_default_timezone_set('Asia/Jakarta');
        $currentTimestamp = time();
        $currentDate = date('Y-m-d H:i:s', $currentTimestamp);
        $date = strtotime($datetime);
        $elapse = $currentTimestamp - $date;

        // echo "waktu saat ini -> " . $currentDate . "\n" . "jumlah selisih detik -> " . $currentTimestamp - $date . "\n";

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
        } elseif ($elapse < (60 * 60 * 24 * 30)) {
            return "one month ago!";
        } else {
            return "a year ago";
        }
    }

    public function index()
    {
        $keyword = $this->request->getPost('keyword');

        if ($keyword) {
            $result = $this->ticketModel->search($keyword);
        } else {
            $result = $this->ticketModel;
        }

        $data = [
            'name'              => 'ticketing',
            'title'             => 'Ticketing',
            'homeNavButton'     => false,
            'ticketNavButton'   => true,
            'contactNavButton'  => false,
            'formNavButton'     => false,
            'request'           => $result->select('*')->select('name')->select('phone')->join('contact', 'contact_id')->orderBy('ticket_id', 'desc')->paginate(3, 'ticket'),
            'pager'             => $result->select('*')->select('name')->select('phone')->join('contact', 'contact_id')->orderBy('ticket_id', 'desc')->pager,
            'requestId'         => $this->ticketModel->select('contact_id')->orderBy('contact_id', 'asc')->findAll(),
            'open_ticket'       => $this->ticketModel->where('status', 'open')->countAllResults(),
            'close_ticket'      => $this->ticketModel->where('status', 'close')->countAllResults(),
            'contact'           => $this->contactModel->select('name')->select('phone')->findAll(),
            'contact_id'        => $this->contactModel->select('contact_id')->select('name')->findAll(),
        ];

        for ($i = 0; $i < count($this->ticketModel->findAll()); $i++) {
            $data['setdatetime'][] = $this->gettimestamp($this->ticketModel->select('created_at')->orderBy('ticket_id', 'desc')->findAll()[$i]['created_at']);
        }

        return view('ticketing/ticket', $data);
    }

    public function new()
    {
        $data = [
            'name' => 'create ticketing',
            'title' => 'Create Ticketing',
            'homeNavButton' => false,
            'ticketNavButton' => true,
            'contactNavButton' => false,
            'formNavButton' => false,
            'ticket' => $this->ticketModel->findAll(),
            'contact' => $this->contactModel->select('name')->select('contact_id')->findAll()
        ];

        return view('ticketing/create', $data);
    }

    public function create()
    {
        $data = [
            'contact_id'     => $this->request->getPost('contact_id'),
            'subject'        => $this->request->getPost('subject'),
            'type'           => $this->request->getPost('type'),
            'status'         => $this->request->getPost('status'),
            'description'    => $this->request->getPost('description'),
            'created_at'     => Time::now()
        ];

        $this->db->table('ticket')->insert($data);
        // $this->db->query()
        // $this->db->query("INSERT INTO ticket (contact_id, subject, type, status, description, created_at) VALUES (:contact_id:, :type:, :type:, :status:, :description:, :created_at:)", $data);
        $this->session->setFlashdata('message', 'telah berhasil menambahkan ticket baru!');
        return redirect()->to(base_url('ticket'));

        return dd($data);

        // return (dd($data));
    }

    public function showTicket($ticketId)
    {
        $data = [
            'name'              => 'ticketing',
            'title'             => 'Ticketing',
            'homeNavButton'     => false,
            'ticketNavButton'   => true,
            'contactNavButton'  => false,
            'formNavButton'     => false,
            'ticket'            => $this->ticketModel->where('ticket_id', $ticketId)->join('contact', 'contact_id')->findAll(),
            'description'       => $this->ticketModel->select('description')->where('ticket_id', $ticketId)->findAll(),
            'ticket_date'       => $this->ticketModel->select('created_at')->where('ticket_id', $ticketId)->find(),
            'getdatetime'       => $this->gettimestamp($this->ticketModel->select('created_at')->where('ticket_id', $ticketId)->find()[0]['created_at'])
        ];

        return view('ticketing/showTicket', $data);
    }

    public function delete($ticket_id)
    {
        $this->ticketModel->where('ticket_id', $ticket_id)->delete();
        $this->session->setFlashdata('message', 'ticket telah terhapus dari daftar!');

        return redirect()->to(base_url('ticket'));
    }

    public function close($ticket_id)
    {
        $data = [
            'status'    => 'close'
        ];

        $this->ticketModel->update($ticket_id, $data);
        $this->session->setFlashdata('message', 'ticket sudah diubah menjadi close!');
        return redirect()->to(base_url('ticket/') . $ticket_id);
    }

    public function open($ticket_id)
    {
        $data = [
            'status'    => 'open'
        ];

        $this->ticketModel->update($ticket_id, $data);
        $this->session->setFlashdata('message', 'ticket sudah diubah menjadi open!');
        return redirect()->to(base_url('ticket/') . $ticket_id);
    }
}
