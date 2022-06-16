<?php

namespace App\Controllers;

use App\Models\UnitKerjaModel;

class UnitKerja extends BaseController
{
    protected $unitKerjaModel;

    function __construct()
    {
        $this->unitKerjaModel = new UnitKerjaModel();
    }

    public function index()
    {
        $data = [
            'activeMenu'    => 'masterdata-unitkerja',
            'unitkerja'     => $this->unitKerjaModel->getAllParentName()
        ];

        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar', $data);
        echo view('masterdata/unitkerja/index', $data);
        echo view('base/footer');
    }

    public function add()
    {
        $data = [
            'listUnitKerja' => $this->unitKerjaModel->findAll(),
            'activeMenu'    => 'masterdata-unitkerja'
        ];
        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar', $data);
        echo view('masterdata/unitkerja/add', $data);
        echo view('base/footer');
    }

    public function edit($id)
    {
        $dataUnitkerja = $this->unitKerjaModel->find($id);

        if (empty($dataUnitkerja)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Unit Kerja Tidak ditemukan !');
        }
        $data = [
            'unitkerja'     => $dataUnitkerja,
            'listUnitKerja' => $this->unitKerjaModel->findAll(),
            'activeMenu'    => 'masterdata-unitkerja'
        ];

        echo view('base/header');
        echo view('base/topbar');
        echo view('base/sidebar', $data);
        echo view('masterdata/unitkerja/edit', $data);
        echo view('base/footer');
    }

    public function delete($id)
    {
        $dataUnitkerja = $this->unitKerjaModel->find($id);
        if (empty($dataUnitkerja)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Unit Kerja Tidak ditemukan !');
        }
        $this->unitKerjaModel->delete($id);
        session()->setFlashdata('message', 'Data Unit Kerja Berhasil dihapus');
        return redirect()->to('/unitkerja');
    }

    public function save()
    {
        if (!$this->validate([

            'inputId' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'ID Unit harus diisi.'
                ]
            ],
            'inputNama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Unit harus diisi.'
                ]
            ],
            'selectParent' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Parent Unit harus diisi.'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to(base_url('/unitkerja/add'));
        } else {
            $inputId = $this->request->getVar('inputId');
            $this->unitKerjaModel->insert([
                'id_unit' => $inputId,
                'nama_unit' => $this->request->getVar('inputNama'),
                'parent_id' => $this->request->getVar('selectParent')
            ]);
            session()->setFlashdata('message', 'Unit Kerja ' . $inputId . ' Berhasil ditambah');
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
            $this->unitKerjaModel->update($id, [
                'kode_unit' => $inputKode,
                'nama_unit' => $this->request->getVar('inputNama')
            ]);
            session()->setFlashdata('message', 'Unit Kerja ' . $inputKode .  ' Berhasil diubah');
            return redirect()->to('/unitkerja');
        }
    }
}
