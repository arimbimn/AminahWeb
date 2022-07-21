<?php

namespace App\Models;

use CodeIgniter\Model;

class LenderModel extends Model
{
    protected $table = 'lender';
    protected $primaryKey = 'id_lender';
    protected $useTimestamps = true;
}
