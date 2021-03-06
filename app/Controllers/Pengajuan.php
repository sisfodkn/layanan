<?php

namespace App\Controllers;

class Pengajuan extends BaseController
{
    public function index()
    {
        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar');
        echo view('dashboard');
        echo view('base/footer');
    }

    public function pemeliharaan()
    {
        $data['activeMenu'] = 'pengajuan-pemeliharaan';
        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar', $data);
        echo view('pengajuan/pemeliharaan');
        echo view('base/footer');
    }
}
