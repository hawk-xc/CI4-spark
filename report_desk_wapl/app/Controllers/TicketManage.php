<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;
use App\Models\TicketDataModel;
use App\Models\TicketModel;
use CodeIgniter\I18n\Time;

class TicketManage extends BaseController
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

    public function delete($ticket_id, $contact_id = null)
    {
        // $ticket_id_en = base64_decode($ticket_id);
        $dir = 'media/';
        $image = 'media/' . $this->ticketModel->select('media')->where('ticket_id', $ticket_id)->first()['media'];

        if (file_exists($image)) {
            unlink($image);
        }

        if (in_array($image, scandir($dir))) {
            unlink($image);
        }

        // dd('media/' . $this->ticketModel->select('media')->where('ticket_id', $ticket_id)->first()['media']);

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

        return redirect()->to(base_url('ticket'));
    }

    public function close($ticket_id)
    {
        $data = [
            'status'    => 'close'
        ];

        $this->ticketModel->update($ticket_id, $data);
        $this->session->setFlashdata('message', 'ticket sudah diubah menjadi close!');
        return redirect()->to(base_url('ticket'));
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
