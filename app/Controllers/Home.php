<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['activeMenu'] = 'dashboard';
        echo view('header');
        echo view('topbar');
        echo view('sidebar', $data);
        echo view('dashboard');
        echo view('footer');
    }
}
