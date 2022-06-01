<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['activeMenu'] = 'dashboard';
        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar', $data);
        echo view('dashboard');
        echo view('base/footer');
    }
}
