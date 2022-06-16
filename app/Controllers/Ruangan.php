<?php

namespace App\Controllers;

use App\Models\RuanganModel;

class Ruangan extends BaseController
{
    protected $ruanganModel;
    protected $lantaiEnum;

    function __construct()
    {
        $this->ruanganModel = new RuanganModel();
    }

    public function index()
    {
        $data = [
            'activeMenu'    => 'masterdata-ruangan',
            'ruangan'       => $this->ruanganModel->findAll()
        ];

        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar', $data);
        echo view('masterdata/ruangan/index', $data);
        echo view('base/footer');
    }

    public function add()
    {
        $data['activeMenu'] = 'masterdata-jabatan';
        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar', $data);
        echo view('masterdata/jabatan/add');
        echo view('base/footer');
    }

    public function edit($id)
    {
        $dataJabatan = $this->jabatanModel->find($id);

        if (empty($dataJabatan)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Jabatan Tidak ditemukan !');
        }
        $data = [
            'jabatan'     => $dataJabatan,
            'listUnitKerja' => $this->unitKerjaModel->findAll(),
            'activeMenu'    => 'masterdata-jabatan'
        ];

        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar', $data);
        echo view('masterdata/jabatan/edit', $data);
        echo view('base/footer');
    }

    public function delete($id)
    {
        $dataJabatan = $this->jabatanModel->find($id);
        if (empty($dataJabatan)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Jabatan Tidak ditemukan !');
        }
        $this->jabatanModel->delete($id);
        session()->setFlashdata('message', 'Data Jabatan Berhasil dihapus');
        return redirect()->to('/jabatan');
    }

    public function save()
    {
        if (!$this->validate([

            'inputKode' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kode Unit harus diisi.'
                ]
            ],
            'inputNama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Jabatan harus diisi.'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to(base_url('/jabatan/add'));
        } else {
            $inputKode = $this->request->getVar('inputKode');
            $this->jabatanModel->insert([
                'kode_unit' => $inputKode,
                'nama_unit' => $this->request->getVar('inputNama')
            ]);
            session()->setFlashdata('message', 'Jabatan ' . $inputKode . ' Berhasil ditambah');
            return redirect()->to('/jabatan');
        }
    }

    public function update($id)
    {
        if (!$this->validate([

            'inputKode' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kode Unit harus diisi.'
                ]
            ],
            'inputNama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Jabatan harus diisi.'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to(base_url('/jabatan/edit'));
        } else {
            $inputKode = $this->request->getVar('inputKode');
            $this->jabatanModel->update($id, [
                'kode_unit' => $inputKode,
                'nama_unit' => $this->request->getVar('inputNama')
            ]);
            session()->setFlashdata('message', 'Jabatan ' . $inputKode .  ' Berhasil diubah');
            return redirect()->to('/jabatan');
        }
    }
}
