<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BorrowerModel;

class DataPengajuanAdmin extends BaseController
{
    protected $adminModel, $borrowerModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->borrowerModel = new BorrowerModel();
    }

    public function index()
    {
        $admin = $this->adminModel->findAll();
        $borrower = $this->borrowerModel->findAll();

        $data = [
            'title' => 'Data Pengajuan Pendanaan',
            'active' => 'dataPengajuan',
            'admin' => $admin,
            'borrower' => $borrower,
        ];
        return view('pages/admin/dataPengajuan', $data);
    }
}
