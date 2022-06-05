<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UnitKerja extends Seeder
{
    public function run()
    {
        $unitkerja_data = [
            [
                'kode_unit' => 'SISNAS',
                'nama_unit' => 'Kedeputian Sistem Nasional'
            ],
            [
                'kode_unit' => 'POLSTRA',
                'nama_unit' => 'Kedeputian Politik dan Strategi'
            ],
            [
                'kode_unit' => 'BANG',
                'nama_unit' => 'Kedeputian Pengembangan'
            ],
            [
                'kode_unit' => 'JIANDRA',
                'nama_unit' => 'Kedeputian Pengkajian dan Penginderaan'
            ],
            [
                'kode_unit' => 'UMUM',
                'nama_unit' => 'Biro Umum'
            ],
            [
                'kode_unit' => 'POK',
                'nama_unit' => 'Biro Perencanaan, Organisasi, dan Keuangan'
            ],
            [
                'kode_unit' => 'PSP',
                'nama_unit' => 'Biro Persidangan, Sistem Informasi, dan Pengawasan Internal'
            ]
        ];

        foreach ($unitkerja_data as $data) {
            $this->db->table('unit_kerja')->insert($data);
        }
    }
}
