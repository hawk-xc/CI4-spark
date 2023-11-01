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

    public function index()
    {
        $data = [
            'name'              => 'ticketing',
            'title'             => 'Ticketing',
            'homeNavButton'     => false,
            'ticketNavButton'   => true,
            'contactNavButton'  => false,
<<<<<<< HEAD
            'formNavButton' => false,
            'request'           => $this->ticketModel->select('*')->findAll(),
=======
            'formNavButton'     => false,
            'request'           => $this->ticketModel->select('*')->select('name')->select('phone')->join('contact', 'contact_id')->findAll(),
>>>>>>> 6e005ecf779f9e1c23c12a24ccad97c9aa79e081
            'requestId'         => $this->ticketModel->select('contact_id')->orderBy('contact_id', 'asc')->findAll(),
            'open_ticket'       => $this->ticketModel->where('status', 'open')->countAllResults(),
            'close_ticket'      => $this->ticketModel->where('status', 'close')->countAllResults(),
            'contact'           => $this->contactModel->select('name')->select('phone')->findAll(),
            'contact_id'        => $this->contactModel->select('contact_id')->select('name')->findAll(),
        ];

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
        // $this->db->query("INSERT INTO ticket (contact_id, type, status, description, created_at) VALUES (:contact_id:, :type:, :status:, :description:, :created_at:)", $data);
        $this->session->setFlashdata('message', 'telah berhasil menambahkan ticket baru!');
        return redirect()->to(base_url('ticket'));

        // return (dd($data));
    }
}
