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
        $data = [
            'activeMenu'    => 'masterdata-unitkerja',
            'unitkerja'     => $this->unitkerjaModel->getAllUnitKerja()
        ];

        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar', $data);
        echo view('masterdata/unitkerja/index', $data);
        echo view('base/footer');
    }

    public function add()
    {
        $data['activeMenu'] = 'masterdata-unitkerja';
        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar', $data);
        echo view('masterdata/unitkerja/add');
        echo view('base/footer');
    }

    public function edit($id)
    {
        $dataUnitkerja = $this->unitkerjaModel->find($id);

        if (empty($dataUnitkerja)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Unit Kerja Tidak ditemukan !');
        }
        $data['unitkerja'] = $dataUnitkerja;

        $data['activeMenu'] = 'masterdata-unitkerja';
        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar', $data);
        echo view('masterdata/unitkerja/edit');
        echo view('base/footer');
    }

    public function delete($id)
    {
        $dataUnitkerja = $this->unitkerjaModel->find($id);
        if (empty($dataUnitkerja)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Unit Kerja Tidak ditemukan !');
        }
        $this->unitkerjaModel->delete($id);
        session()->setFlashdata('message', 'Data Unit Kerja Berhasil dihapus');
        return redirect()->to('/unitkerja');
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
                    'required' => 'Nama Unit harus diisi.'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to(base_url('/unitkerja/add'));
        } else {
            $inputKode = $this->request->getVar('inputKode');
            $this->unitkerjaModel->insert([
                'kode_unit' => $inputKode,
                'nama_unit' => $this->request->getVar('inputNama')
            ]);
            session()->setFlashdata('message', 'Unit Kerja ' . $inputKode . ' Berhasil ditambah');
            return redirect()->to('/unitkerja');
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
                    'required' => 'Nama Unit harus diisi.'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to(base_url('/unitkerja/edit'));
        } else {
            $inputKode = $this->request->getVar('inputKode');
            $this->unitkerjaModel->update($id, [
                'kode_unit' => $inputKode,
                'nama_unit' => $this->request->getVar('inputNama')
            ]);
            session()->setFlashdata('message', 'Unit Kerja ' . $inputKode .  ' Berhasil diubah');
            return redirect()->to('/unitkerja');
        }
    }
}
