<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;
use App\Models\TicketDataModel;
use App\Models\TicketModel;
use CodeIgniter\I18n\Time;

class Ticket extends BaseController
{
    public $ticketModel;
    public $contactModel;
    public $request;
    public $db;
    public $session;
    public $ticketDataModel;

    public function __construct()
    {
        $this->ticketModel = new TicketModel();
        $this->contactModel = new ContactModel();
        $this->ticketDataModel = new TicketDataModel();
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
        $query = $this->request->getGet('search');
        $count = $this->request->getGet('count');
        $type = $this->request->getGet('type');
        $order_by = $this->request->getGet('order_by');
        $status = $this->request->getGet('status');

        $data = [
            'name'              => 'ticketing',
            'title'             => 'Ticketing',
            'homeNavButton'     => false,
            'ticketNavButton'   => true,
            'contactNavButton'  => false,
            'formNavButton'     => false,
            'manageUserNavButton' => false,
            'request'           => $this->ticketModel->searchData($query, $count, $type, $order_by, $status),
            'pager'             => $this->ticketModel->pager,
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
        $this->session;
        $data = [
            'name' => 'create ticketing',
            'title' => 'Create Ticketing',
            'homeNavButton' => false,
            'ticketNavButton' => true,
            'contactNavButton' => false,
            'formNavButton' => false,
            'manageUserNavButton' => false,
            'ticket' => $this->ticketModel->findAll(),
            'contact' => $this->contactModel->select('name')->select('contact_id')->findAll(),
            'validation' => \Config\Services::validation()
        ];

        return view('ticketing/create', $data);
    }

    public function create()
    {
        // validation
        $validation = \Config\Services::validation();
        $valid = [
            'subject' => [
                'label' => 'subject',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} harus diisi!',
                    'min_length' => 'keterangan {field} terlalu pendek!'
                ],
            ],
            'media' => [
                'label' => 'dokumentasi',
                'rules' => 'uploaded[media]|is_image[media]|max_size[media,1024]|mime_in[media,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded'  => '{field} belum diupload!',
                    'is_image'  => 'file yang diupload haru berekstensi gambar!',
                    'max_size'  => 'file yang diupload terlalu besar, minmal 1Mb!',
                    'mime_in'   => 'format tidak didukung/diketahui!'
                ]
            ]
        ];
        $validation->setRules($valid);

        function media($media)
        {
            $dir = 'media';

            $mediaRandomName = $media->getRandomName();
            $media->move($dir, $mediaRandomName);

            return $mediaRandomName;
        }

        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'contact_id'     => htmlspecialchars($this->request->getPost('contact_id')),
                'subject'        => htmlspecialchars($this->request->getPost('subject')),
                'type'           => htmlspecialchars($this->request->getPost('type')),
                'status'         => htmlspecialchars($this->request->getPost('status')),
                'description'    => htmlspecialchars($this->request->getPost('description')),
                'media'          => media($this->request->getFile('media')),
                'created_at'     => Time::now()
            ];

            $this->session->setFlashdata('message', 'telah berhasil menambahkan ticket baru!');
            $this->db->table('ticket')->insert($data);
            return redirect()->to(base_url('ticket'));
        } else {
            $errors = $validation->getErrors();
            session()->setFlashdata("error", $errors);
            return redirect()->back()->withInput();
        }

        // $this->db->query()
        // $this->db->query("INSERT INTO ticket (contact_id, subject, type, status, description, created_at) VALUES (:contact_id:, :type:, :type:, :status:, :description:, :created_at:)", $data);

        // return (dd($data));
    }

    public function showTicket($ticketId, $contactId = null)
    {
        $data = [
            'name'                => 'ticketing',
            'title'               => 'Ticketing',
            'homeNavButton'       => false,
            'ticketNavButton'     => true,
            'contactNavButton'    => false,
            'formNavButton'       => false,
            'manageUserNavButton' => false,
            'ticket'              => $this->ticketModel->where('ticket_id', $ticketId)->join('contact', 'contact_id')->first(),
            'description'         => $this->ticketModel->select('description')->where('ticket_id', $ticketId)->findAll(),
            'ticket_date'         => $this->ticketModel->select('created_at')->where('ticket_id', $ticketId)->find(),
            'getdatetime'         => $this->gettimestamp($this->ticketModel->select('created_at')->where('ticket_id', $ticketId)->find()[0]['created_at']),
            'ticketData'          => $this->ticketDataModel->where('ticket_id', $ticketId)->findAll(),
            'timeLine'            => $this->ticketModel->where('contact_id', $contactId)->orderBy('created_at', 'asc')->findAll(),
        ];

        return view('ticketing/showTicket', $data);
    }

    public function delete($ticket_id, $contact_id = null)
    {
        $db = \Config\Database::connect();
        $query = $db->table('ticket')->select('media')->where('ticket_id', $ticket_id)->get();

        $image = 'media/' . $query->getRow()->media;

        if (file_exists($image)) {
            unlink($image);
        }

        // dd($image);


        # bug, during solved
        // $i = 0;
        // // foreach ($this->ticketDataModel->select('media')->where('ticket_id', $ticket_id) as $mediaComment) {
        // foreach ($this->ticketDataModel->select('media')->where('ticket_id', $ticket_id)->find()[0]['media'] as $mediaComment) {
        //     if (file_exists('media/' . $mediaComment[$i])) {
        //         unlink('media/' . $mediaComment[$i]);
        //         $i++;
        //     }
        // }

        $this->ticketModel->where('ticket_id', $ticket_id)->delete();
        $this->ticketDataModel->where('ticket_id', $ticket_id)->delete();
        $this->session->setFlashdata('message', 'ticket telah terhapus dari daftar!');

        return redirect()->to('ticket');
    }

    public function open($ticket_id, $contact_id)
    {
        $data = [
            'status'    => 'open'
        ];

        $this->ticketModel->update($ticket_id, $data);
        $this->session->setFlashdata('message', 'ticket sudah diubah menjadi open!');
        return redirect()->to(base_url('ticket/') . $ticket_id . "/" . $contact_id);
    }

    public function close($ticket_id, $contact_id)
    {
        $data = [
            'status'    => 'close'
        ];

        $this->ticketModel->update($ticket_id, $data);
        $this->session->setFlashdata('message', 'ticket sudah diubah menjadi close!');
        return redirect()->to(base_url('ticket/') . $ticket_id . "/" . $contact_id);
    }

    public function edit($ticket_id)
    {
        $validation = \Config\Services::validation();
        $valid = [
            'description' => [
                'label' => 'description',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} harus diisi!',
                    'min_length' => 'keterangan {field} terlalu pendek!'
                ],
            ],
            'media' => [
                'label' => 'media',
                'rules' => 'uploaded[media]|is_image[media]|max_size[media,1024]|mime_in[media,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded'  => '{field} belum diupload!',
                    'is_image'  => 'file yang diupload haru berekstensi gambar!',
                    'max_size'  => 'file yang diupload terlalu besar, minmal 1Mb!',
                    'mime_in'   => 'format tidak didukung/diketahui!'
                ]
            ]
        ];
        $validation->setRules($valid);

        function media($media)
        {
            $dir = 'media';

            $mediaRandomName = $media->getRandomName();
            $media->move($dir, $mediaRandomName);

            return $mediaRandomName;
        }

        if ($validation->withRequest($this->request)->run()) {
            $data = [
                // 'ticket_id'     => htmlspecialchars($this->request->getPost('ticket_id')),
                'ticket_id'     => $ticket_id,
                'description'    => htmlspecialchars($this->request->getPost('description')),
                'media'          => media($this->request->getFile('media')),
                'created_at'     => Time::now()
            ];

            $this->session->setFlashdata('message', 'telah berhasil update ticket!');
            $this->db->table('ticket_data')->insert($data);
            return redirect()->to(base_url('ticket/') . $ticket_id);
        } else {
            $errors = $validation->getErrors();
            session()->setFlashdata("error", $errors);
            return redirect()->back()->withInput();
        }
    }

    public function removeComment($ticket_data_id)
    {
        $image = 'media/' . $this->ticketDataModel->select('media')->where('ticket_data_id', $ticket_data_id)->find()[0]['media'];

        if (file_exists($image)) {
            unlink($image);
        }

        $this->ticketDataModel->where('ticket_data_id', $ticket_data_id)->delete();
        return redirect()->back();
    }
}
