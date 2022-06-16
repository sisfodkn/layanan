<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanModel extends Model
{
    protected $table = "jabatan";
    protected $primaryKey = 'id_jabatan';

    public function getAllParentName()
    {
        $query = $this->db->query("SELECT
            j.id_jabatan AS id, j.nama_jabatan AS nama, u.nama_unit AS parent
        FROM
            jabatan j 
        LEFT JOIN
            (
                SELECT
                    id_unit, nama_unit
                FROM
                    unit_kerja
            ) u ON j.id_unit = u.id_unit");
        return $query->getResult();
    }
}
