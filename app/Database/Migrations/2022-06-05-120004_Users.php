<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'username' => [
                'type' => 'varchar',
                'constraint' => '20'
            ],
            'password' => [
                'type' => 'varchar',
                'constraint' => '100'
            ],
            'role' => [
                'type' => 'varchar',
                'constraint' => '20'
            ],
            'id_pegawai' => [
                'type' => 'int',
                'unsigned' => true
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_pegawai', 'pegawai', 'id_pegawai');

        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
