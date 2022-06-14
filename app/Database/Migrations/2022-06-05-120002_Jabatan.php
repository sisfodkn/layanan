<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jabatan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jabatan' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama_jabatan' => [
                'type' => 'varchar',
                'constraint' => '100'
            ],
            'id_unit' => [
                'type' => 'int',
                'unsigned' => true,
                'null' => true
            ],
            'id_kelas' => [
                'type' => 'int',
                'unsigned' => true,
                'null' => true
            ]
        ]);

        $this->forge->addPrimaryKey('id_jabatan');
        $this->forge->addForeignKey('id_unit', 'unit_kerja', 'id_unit');
        $this->forge->addForeignKey('id_kelas', 'kelas', 'id_kelas');

        $this->forge->createTable('jabatan');
    }

    public function down()
    {
        $this->forge->dropTable('jabatan');
    }
}
