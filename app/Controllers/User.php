<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('login');
        echo view('footer');
    }

    public function verifikasi()
    {
        $LoginModel = new \App\Models\LoginModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $dataUsers = $LoginModel->where("username", $username)->first();
        if ($dataUsers) {
            if ($dataUsers['password'] == md5($password)) {
                $dataSession = [
                    'userid' => $dataUsers['userid'],
                    'username' => $dataUsers['username'],
                    'password' => $dataUsers['password'],
                    'logged_in' => TRUE
                ];
                session()->set($dataSession);
                return redirect()->to(base_url('/'));
            }
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/login'));
    }
}
