<?php

namespace App\Controllers;

class Pengajuan extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('topbar');
        echo view('sidebar');
        echo view('dashboard');
        echo view('footer');
    }

    public function pemeliharaan()
    {
        $data['activeMenu'] = 'pengajuan-pemeliharaan';
        echo view('header');
        echo view('topbar');
        echo view('sidebar', $data);
        echo view('pengajuan_pemeliharaan');
        echo view('footer');
    }
}
