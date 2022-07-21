<?php

namespace App\Models;

use CodeIgniter\Model;

class BorrowerModel extends Model
{
    protected $table = 'borrower';
    protected $primaryKey = 'id_borrower';
    protected $useTimestamps = true;
}
