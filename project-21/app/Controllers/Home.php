<?php

namespace App\Controllers;

use App\Models\KomikModel;
use App\Models\TestingModel;

class Home extends BaseController
{
    public $komik;
    public $session;
    public $validation;
    // this is validation message
    public $message;

    public function __construct()
    {
        $this->komik = new KomikModel();
        $this->session = session();
        $this->validation = \Config\Services::validation();
        $this->message = array();
    }

    public function index()
    {
        $data = [
            'title' => 'Hawkxc | Landing Page',
            'komik' => $this->komik->findAll(),
            'pesan' => $this->session->getFlashdata('pesan'),
        ];

        return view('Pages/index', $data);
    }

    public function komik()
    {
        $data = [
            'title' => 'Hawkxc | Daftar Komik',
            'komik' => $this->komik->getName()
        ];

        return view('Pages/komik', $data);
    }

    // public function detail($slug)
    public function detail($slug)
    {
        $data = [
            'title' => 'Hawkxc | Data Komik',
            'komik' => $this->komik->getName($slug)
        ];

        return view('Pages/detail', $data);
        // dd($data['komik']);
    }

    public function create()
    {
        $data = [
            'title' => 'Hawkxc | Create data'
        ];

        return view('Pages/create', $data);
    }

    // method save is using to insert content into database
    public function save()
    {
        $gambar = $this->request->getFile('sampul');
        if ($gambar->getError() === 4) {
            $gambar_new = 'default.png';
        } else {
            $gambar_new = $gambar->getRandomName();
            $gambar->move('image/', $gambar_new);
        }

        $data = [
            'sampul' => $gambar_new,
            'judul' => htmlspecialchars($this->request->getPost('judul')),
            'slug' => url_title($this->request->getVar('judul'), '-', true),
            'karangan' => $this->request->getPost('karangan'),
            'penerbit' => $this->request->getPost('penerbit')
        ];

        $this->message['required'] = '{field} harus diisi!';
        $this->message['is_unique'] = '{field} sudah terdata, bisa ganti nama yang lain!';
        $this->message['min_length'] = '{field} penggunaan minimal adalah 3 abjad';

        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[komik.sampul]|min_length[3]',
                'errors' => [
                    'required' => $this->message['required'],
                    'is_unique' => $this->message['is_unique'],
                    'min_length' => $this->message['min_length'],
                ]
            ],
            'karangan' => [
                'rules' => 'required|is_unique[komik.sampul]|min_length[3]',
                'errors' => [
                    'required' => $this->message['required'],
                    'is_unique' => $this->message['is_unique'],
                    'min_length' => $this->message['min_length'],
                ]
            ],
            'penerbit' => [
                'rules' => 'required|is_unique[komik.sampul]|min_length[3]',
                'errors' => [
                    'required' => $this->message['required'],
                    'is_unique' => $this->message['is_unique'],
                    'min_length' => $this->message['min_length'],
                ]
            ]
        ])) {
            $this->session->setFlashdata('pesan', 'data gagal dibuat');
            return redirect()->to(base_url('/create'))->withInput()->with('validation', $this->validation->getErrors());
        } else {
            $this->komik->save($data);
            $this->session->setFlashdata('pesan', 'data berhasil disimpan');

            return redirect()->to(base_url());
        }
    }

    public function editData()
    {
    }

    public function delete()
    {
        $idVar = $this->request->getPost('data-to-delete');
        $ifExist = $this->komik->find($idVar);
        if ($ifExist !== null) {
            $this->session->setFlashdata('pesan', $ifExist['judul'] . " berhasil dihapus");
            $this->komik->delete($idVar);
            ($ifExist['sampul'] !== 'default.png') ? unlink('image/' . $ifExist['sampul']) : null;
        } else {
            $this->session->setFlashdata('pesan', "mohon maaf data $idVar tidak ada didatabase :'(");
        }

        return redirect()->to(base_url());
    }
}
