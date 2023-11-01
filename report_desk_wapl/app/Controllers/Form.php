<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\App;

class Form extends BaseController
{
    public function index()
    {
        $data = [
            'name' => 'contact',
            'title' => 'Contact',
            'homeNavButton' => false,
            'ticketNavButton' => false,
            'contactNavButton' => false,
            'formNavButton' => true,

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
                'nomor' => [
                    'label' => 'No. Telepon',
                    'rules' => 'required|numeric',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong!',
                        'numeric' => '{field} Tidak Valid Harap Masukkan Berupa Angka',

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
                session()->setFlashdata("success", "<p class='font-bold italic text-sky-500'>Berhasil melakukan penambahan</p>");
                return redirect()->back();
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
        }


        // return view('contact/index', $data);
        // return view('contact/dummyListContact', $data);
        echo view('contact/form', $data);
    }
}