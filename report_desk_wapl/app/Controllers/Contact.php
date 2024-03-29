<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;
use Config\App;

class Contact extends BaseController
{
    public $contactModel;
    public function __construct()
    {
        $this->contactModel = new ContactModel;
    }
    public function index()
    {
        $query = $this->request->getVar('query');

        // Menentukan model untuk digunakan
        $contactModel = new ContactModel();

        $data = [
            'name' => 'contact',
            'title' => 'Contact',
            'homeNavButton' => false,
            'ticketNavButton' => false,
            'contactNavButton' => true,
            'formNavButton' => false,
            'manageUserNavButton' => false,
            'error' => \Config\Services::validation(),
            'contact' => $contactModel->search($query),
            'currentPage' => $this->request->getVar('page_contact') ?? 1,
            'pager' => $contactModel->pager,
        ];

        return view('contact/contact', $data);
    }


    public function validation()
    {
        $data = [
            'name' => 'Form',
            'title' => 'Form Validasi',
            'homeNavButton' => false,
            'ticketNavButton' => false,
            'contactNavButton' => true,
            'manageUserNavButton' => false,
            'error' => [],
        ];
        if ($this->request->getMethod() == 'post') {
            // var_dump($this->request->getVar());
            $nama = $this->request->getVar('name');
            $email = $this->request->getVar('email');
            $message = $this->request->getVar('message');
            $validation = \config\Services::validation();
            $valid = [
                'name' => [
                    'label' => 'Nama',
                    'rules' => 'required|min_length[5]|max_length[25]',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong!',
                        'min_length' => '{field} Anda Terlalu Pendek',
                        'max_length' => '{field} Anda Melebihi 25 Karakter',
                    ],
                ],
                'email' => [
                    'label' => 'Email',
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong!',
                        'valid_email' => '{field} Yang Anda Masukkan Tidak Valid!',

                    ],
                ],
                'message' => [
                    'label' => 'Pesan',
                    'rules' => 'required|max_length[55]',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong!',
                        'max_length' => '{field} Anda Melebihi Karakter Yang Terlalu Panjang',
                    ],
                ],
            ];
            $validation->setRules($valid);
            if ($validation->withRequest($this->request)->run()) {
                echo "<h1>Berhasil lah</h1>";
                session()->setFlashdata("success", "Berhasil melakukan penambahan");
                return redirect()->back();
            } else {
                // echo "<h1>Tidak Berhasil</h1>";
                $error = $validation->listErrors();
                // $data['error'] = [$error];
                session()->setFlashdata("error", [$error]);
                return redirect()->back()->withInput();
            }
        }


        echo view('contact/form', $data);
    }
    public function edit()
    {
        $data = [
            'name' => 'contact',
            'title' => 'Edit ',
            'homeNavButton' => false,
            'ticketNavButton' => false,
            'contactNavButton' => true,
            'manageUserNavButton' => false,
        ];
        return view('contact/coba', $data);
    }
    // Metode controller untuk menampilkan detail kontak
    public function detail($contact_id)
    {
        $contact = $this->contactModel->getContact($contact_id);

        $data = [
            'name' => 'contact',
            'title' => 'Detail Kontak',
            'homeNavButton' => false,
            'ticketNavButton' => false,
            'contactNavButton' => true,
            'formNavButton' => false,
            'manageUserNavButton' => false,
            'contact' => $contact,
        ];

        return view('contact/detail', $data);
    }
}
