<?php

namespace App\Controllers;

use App\Models\UnitkerjaModel;

class MasterData extends BaseController
{
    protected $unitkerjaModel;

    function __construct()
    {
        $this->unitkerjaModel = new UnitkerjaModel();
    }

    public function index()
    {
        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar');
        echo view('dashboard');
        echo view('base/footer');
    }

    public function unitkerja()
    {
        // $data['activeMenu'] = 'masterdata-unitkerja';
        // $data['unitkerja'] = $this->unitkerjaModel->findAll();
        $listUnitkerja = $this->unitkerjaModel->findAll();
        $data = [
            'activeMenu' => 'masterdata-unitkerja',
            'unitkerja' => $listUnitkerja
        ];

        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar', $data);
        echo view('masterdata/unitkerja', $data);
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
