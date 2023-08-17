<?php

namespace App\Controllers;

use \App\Models\komikModel;

class komikControllers extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new komikModel();
    }

    public function index()
    {
        // return view('komikPages/index');
        $data = [
            'title' => 'Hawkxc | landing page',
            'detail' => $this->komikModel->findAll()
        ];

        return view('komikPages/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Hawkxc | landing page',
            'detail' => $this->komikModel->where(['slug_name' => $slug])->first()
        ];

        d($data);
        // return view('KomikPages/detail', $data);
    }
}
