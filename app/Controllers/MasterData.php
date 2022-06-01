<?php

namespace App\Controllers;

class MasterData extends BaseController
{
    public function index()
    {
        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar');
        echo view('dashboard');
        echo view('base/footer');
    }

    public function pegawai()
    {
        $data['activeMenu'] = 'masterdata-pegawai';
        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar', $data);
        echo view('masterdata/pegawai');
        echo view('base/footer');
    }
}
