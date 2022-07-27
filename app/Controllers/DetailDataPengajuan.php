<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BorrowerModel;

class DetailDataPengajuan extends BaseController
{
    protected $adminModel;

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
            'title' => 'Detail Data Pengajuan Pendanaan',
            'admin' => $admin,
            'borrower' => $borrower,
        ];
        return view('pages/admin/detailDataPengajuan', $data);
    }
}
