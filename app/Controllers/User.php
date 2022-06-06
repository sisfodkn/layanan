<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        echo view('base/header');
        echo view('login');
        echo view('base/footer');
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
                    'id' => $dataUsers['id'],
                    'username' => $dataUsers['username'],
                    'password' => $dataUsers['password'],
                    'logged_in' => TRUE
                ];
                session()->set($dataSession);
                return redirect()->to(base_url('/'));
            } else {
                session()->setFlashdata('username', $username);
                session()->setFlashdata('error', 'Username dan Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('username', $username);
            session()->setFlashdata('error', 'Username dan Password Salah');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/login'));
    }
}
