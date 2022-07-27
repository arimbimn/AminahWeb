<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\LenderModel;
use App\Models\BorrowerModel;
use App\Models\MitraModel;


class DashboardAdmin extends BaseController
{
    protected $adminModel, $lenderModel, $borrowerModel, $mitraModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->lenderModel = new LenderModel();
        $this->borrowerModel = new BorrowerModel();
        $this->mitraModel = new MitraModel();
    }

    public function index()
    {
        $admin = $this->adminModel->findAll();
        $lender = $this->lenderModel->findAll();
        $borrower = $this->borrowerModel->findAll();
        $mitra = $this->mitraModel->findAll();

        // foreach ($lender as $key => $len) {
        //     $query = "SELECT SUM (id_lender) FROM lender ";
        //     $jumlah = $len['SUM(id_lender)'];
        //     $len[$key]['jumlah'] = $jumlah;
        //     dd($key);
        // }

        $data = [
            'title' => 'Dashboard Admin',
            'active' => 'dashboardAdmin',
            'admin' => $admin,
            'lender' => $lender,
            'borrower' => $borrower,
            'mitra' => $mitra,

        ];
        return view('pages/admin/dashboardAdmin', $data);
    }
}
