<?php

namespace App\Controllers;

class Peminjaman extends BaseController
{
    public function index()
    {
        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar');
        echo view('dashboard');
        echo view('base/footer');
    }

    public function kendaraan()
    {
        $data['activeMenu'] = 'pinjam-kendaraan';
        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar', $data);
        echo view('peminjaman/kendaraan');
        echo view('base/footer');
    }
}
