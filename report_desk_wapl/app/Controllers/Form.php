<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\App;
use App\Models\ContactModel;
use App\Models\TicketModel;
use CodeIgniter\I18n\Time;

class Form extends BaseController
{
    public $ticketModel;
    public $contactModel;
    public $request;
    public $db;
    public $session;

    public function __construct()
    {
        $this->ticketModel = new TicketModel();
        $this->contactModel = new ContactModel;
        $this->request = request();
        $this->session = session();
        $this->db = db_connect();
    }
    public function index()
    {
        $data = [
            'name' => 'contact',
            'title' => 'Contact',
            'homeNavButton' => false,
            'ticketNavButton' => false,
            'contactNavButton' => false,
            'formNavButton' => true,
            'manageUserNavButton' => false,
            // 'request' => $this->contactModel->select("*")->select("name")->select("phone")->join('contact', 'contact_id')->orderBy('contact_id', 'desc')->findAll(),
            'request' => ''

        ];
        if ($this->request->getMethod() == 'post') {
            // var_dump($this->request->getVar());
            // $nama = $this->request->getVar('name');
            // $email = $this->request->getVar('email');
            // $message = $this->request->getVar('message');
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
                'nomor' => [
                    'label' => 'No. Telepon',
                    'rules' => 'required|numeric',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong!',
                        'numeric' => '{field} Tidak Valid Harap Masukkan Berupa Angka',

                    ],
                ],
                'address' => [
                    'label' => 'Alamat Lengkap',
                    'rules' => 'required|min_length[3]',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong!',
                        'min_length' => '{field} Anda Terlalu Pendek',

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
                // echo "<h1>Berhasil lah</h1>";
                // session()->setFlashdata("success", "<p class='font-bold italic text-sky-500'>Berhasil melakukan penambahan</p>");
                // return redirect()->back();
                $data = [
                    'name' => $this->request->getVar('name'),
                    'email' => $this->request->getVar('email'),
                    'phone' => $this->request->getVar('nomor'),
                    'address' => $this->request->getVar('address'),
                    'description' => $this->request->getVar('message'),
                    'created_at' => Time::now(),

                ];




                $this->db->table('contact')->insert($data);
                $this->session->setFlashdata('message', 'Telah Berhasil Menambahkan Contact Baru!');
                return redirect()->to(base_url('contact'));
            } else {
                // echo "<h1>Tidak Berhasil</h1>";
                $errors = $validation->getErrors();
                // $data['error'] = [$error];
                session()->setFlashdata("error", $errors);
                return redirect()->back()->withInput();
            }
        } else {
            $data['error'] = "";
            $data['title'] = "";
            $data["contact"] = "";
        }



        // return view('contact/index', $data);
        // return view('contact/dummyListContact', $data);
        echo view('contact/form', $data);
    }
    // public function create()
    // {
    //     $data = [
    //         'name' => $this->request->getVar('name'),
    //         'email' => $this->request->getVar('email'),
    //         'phone' => $this->request->getVar('nomor'),
    //         'address' => $this->request->getVar('address'),
    //         'description' => $this->request->getVar('message'),
    //         'created_at' => Time::now(),

    //     ];




    //     $this->db->table('contact')->insert($data);
    //     $this->session->setFlashdata('message', 'Telah Berhasil Menambahkan Contact Baru!');
    //     return redirect()->to(base_url('contact'));
    // }
    public function create()
    {
        $validation = \Config\Services::validation();
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
            'phone' => [
                'label' => 'No. Telepon',
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!',
                    'numeric' => '{field} Tidak Valid Harap Masukkan Berupa Angka',
                ],
            ],
            'address' => [
                'label' => 'Alamat Lengkap',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!',
                    'min_length' => '{field} Anda Terlalu Pendek',
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
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'phone' => $this->request->getVar('phone'),
                'address' => $this->request->getVar('address'),
                'description' => $this->request->getVar('message'),
                'created_at' => Time::now(),
            ];
            $this->contactModel->save($data);
            $this->session->setFlashdata('message', 'Telah Berhasil Menambahkan Contact Baru!');
            return redirect()->to(base_url('contact'));
        } else {
            $errors = $validation->getErrors();
            session()->setFlashdata("error", $errors);
            return redirect()->back()->withInput();
        }
    }

    public function delete($contact_id)
    {
        $contact = $this->contactModel->find($contact_id);

        if ($contact) {
            // iki ta tambahi den, auto soft delete #wahyu
            $this->ticketModel->where('contact_id', $contact_id)->delete();
            $this->contactModel->delete($contact_id);
            $this->session->setFlashdata("message", "Data Kontak Berhasil Dihapus!");
        } else {
            $this->session->setFlashdata("error", "Data Kontak Tidak Ditemukan!");
        }

        return redirect()->to(base_url("contact"));
    }
    public function edit($contact_id)
    {


        $data = [
            'name' => 'contact',
            'title' => 'Form Edit',
            'homeNavButton' => false,
            'ticketNavButton' => false,
            'contactNavButton' => false,
            'formNavButton' => true,
            'manageUserNavButton' => false,
            // 'request' => $this->contactModel->select("*")->select("name")->select("phone")->join('contact', 'contact_id')->orderBy('contact_id', 'desc')->findAll(),
            'contact' => $this->contactModel->getContact($contact_id),

        ];



        // return view('contact/index', $data);
        // return view('contact/dummyListContact', $data);
        return view('contact/edit', $data);
    }
    public function update($contact_id)
    {
        $contactLama = $this->contactModel->getContact($contact_id);
        if ($contactLama['name'] == $this->request->getVar('name')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[contact.name]|min_length[5]|max_length[25]';
        }
        $validation = \Config\Services::validation();
        $valid = [
            'name' => [
                'label' => 'Nama',
                'rules' => $rule_nama,
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!',
                    'is_unique' => '{field} Sudah Ada! Tidak Boleh Sama',
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
            'phone' => [
                'label' => 'No. Telepon',
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!',
                    'numeric' => '{field} Tidak Valid Harap Masukkan Berupa Angka',
                ],
            ],
            'address' => [
                'label' => 'Alamat Lengkap',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!',
                    'min_length' => '{field} Anda Terlalu Pendek',
                ],
            ],
            'description' => [
                'label' => 'Pesan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!',
                ],
            ],
        ];
        $validation->setRules($valid);
        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'id' => $contact_id,
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'phone' => $this->request->getVar('phone'),
                'address' => $this->request->getVar('address'),
                'description' => $this->request->getVar('description'),
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ];
            $this->contactModel->update($contact_id, $data);
            $this->session->setFlashdata('message', 'Telah Berhasil Mengedit dan Mengubah  Contact Baru!');
            return redirect()->to(base_url('contact'));
        } else {
            $error = $validation->getErrors();
            session()->setFlashdata('error', $error);
            return redirect()->back()->withInput();
        }
    }
}
