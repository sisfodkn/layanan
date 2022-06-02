<?php

namespace App\Controllers;

use App\Models\UnitkerjaModel;

class Unitkerja extends BaseController
{
    protected $unitkerjaModel;

    function __construct()
    {
        $this->unitkerjaModel = new UnitkerjaModel();
    }

    public function index()
    {
        $page = $this->request->getVar('page_unitkerja');
        $currentPage = $page ? $page : 1;

        $data = [
            'activeMenu'    => 'masterdata-unitkerja',
            'unitkerja'     => $this->unitkerjaModel->paginate(10, 'unitkerja'),
            'pager'         => $this->unitkerjaModel->pager,
            'currentPage'   => $currentPage
        ];

        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar', $data);
        echo view('masterdata/unitkerja/index', $data);
        echo view('base/footer');
    }
}
