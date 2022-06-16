<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RuanganSeeder extends Seeder
{
    public function run()
    {
        $listData = [
            [
                'nama_ruangan' => 'Server',
                'lantai' => '5b',
                'lokasi' => 'Merdeka Barat 15'
            ],
            [
                'nama_ruangan' => 'Sitroom',
                'lantai' => '5b',
                'lokasi' => 'Merdeka Barat 15'
            ],
            [
                'nama_ruangan' => 'NKRI',
                'lantai' => '5a',
                'lokasi' => 'Merdeka Barat 15'
            ],
            [
                'nama_ruangan' => 'Wawasan Nusantara',
                'lantai' => '5a',
                'lokasi' => 'Merdeka Barat 15'
            ]
        ];

        foreach ($listData as $data) {
            $this->db->table('ruangan')->insert($data);
        }
    }
}
