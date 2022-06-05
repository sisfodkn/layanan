<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UnitKerja extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'kode_unit' => [
                'type' => 'varchar',
                'constraint' => '20'
            ],
            'nama_unit' => [
                'type' => 'varchar',
                'constraint' => '100'
            ]
        ]);
        $this->forge->addKey('id');
        $this->forge->createTable('unit_kerja');
    }

    public function down()
    {
        $this->forge->dropTable('unit_kerja');
    }
}
