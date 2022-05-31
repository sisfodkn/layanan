<?php

namespace App\Controllers;

class Permintaan extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('topbar');
        echo view('sidebar');
        echo view('dashboard');
        echo view('footer');
    }

    public function atk()
    {
        $data['activeMenu'] = 'permintaan-atk';
        echo view('header');
        echo view('topbar');
        echo view('sidebar', $data);
        echo view('permintaan_atk');
        echo view('footer');
    }
}
