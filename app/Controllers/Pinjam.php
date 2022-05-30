<?php

namespace App\Controllers;

class Pinjam extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('sidebar');
        echo view('dashboard');
        echo view('footer');
    }

    public function kendaraan()
    {
        $data['activeMenu'] = 'pinjam-kendaraan';
        echo view('header');
        echo view('sidebar', $data);
        echo view('pinjam_kendaraan');
        echo view('footer');
    }
}
