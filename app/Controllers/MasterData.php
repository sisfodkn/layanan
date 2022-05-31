<?php

namespace App\Controllers;

class MasterData extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('topbar');
        echo view('sidebar');
        echo view('dashboard');
        echo view('footer');
    }

    public function pegawai()
    {
        $data['activeMenu'] = 'masterdata-pegawai';
        echo view('header');
        echo view('topbar');
        echo view('sidebar', $data);
        echo view('masterdata_pegawai');
        echo view('footer');
    }
}
