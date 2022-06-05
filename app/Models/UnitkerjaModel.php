<?php

namespace App\Models;

use CodeIgniter\Model;

class UnitkerjaModel extends Model
{
    protected $table = "unit_kerja";
    protected $allowedFields = ['kode_unit', 'nama_unit'];
}
