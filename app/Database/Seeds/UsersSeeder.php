<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $listData = [
            [
                'username' => 'admin',
                'password' => md5('admin'),
                'role' => 'Administrator',
                'id_pegawai' => '1'
            ]
        ];

        foreach ($listData as $data) {
            $this->db->table('users')->insert($data);
        }
    }
}
