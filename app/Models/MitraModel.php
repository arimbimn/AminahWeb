<?php

namespace App\Models;

use CodeIgniter\Model;

class MitraModel extends Model
{
    protected $table = 'mitra';
    protected $primaryKey = 'id_mitra';
    protected $useTimestamps = true;

    public function get_sample_mitra($jumlah = 1)
    {
        $query = $this->db->query('select * from ' . $this->table . ' limit ' . $jumlah);
        return $query->getResultArray();
    }
}
