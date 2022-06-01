<?php

namespace App\Controllers;

class Permintaan extends BaseController
{
    public function index()
    {
        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar');
        echo view('base/dashboard');
        echo view('base/footer');
    }

    public function atk()
    {
        $data['activeMenu'] = 'permintaan-atk';
        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar', $data);
        echo view('permintaan/atk');
        echo view('base/footer');
    }
}
