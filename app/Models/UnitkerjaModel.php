<?php

namespace App\Models;

use CodeIgniter\Model;

class UnitkerjaModel extends Model
{
    protected $table = "unit_kerja";
    protected $primaryKey = 'id_unit';

    public function getAllUnitKerja()
    {
        $query = $this->db->query("SELECT
            u1.id_unit AS id, u1.nama_unit AS nama, u2.nama_unit AS parent
        FROM
            unit_kerja u1 
        LEFT JOIN
            (
                SELECT
                    id_unit, nama_unit
                FROM
                    unit_kerja
            ) u2 ON u1.parent_id = u2.id_unit");
        return $query->getResult();
    }
}
