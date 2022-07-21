<?php

namespace App\Controllers;

use App\Models\LenderModel;

class DashboardLender extends BaseController
{

    protected $lenderModel;

    public function __construct()
    {
        $this->lenderModel = new LenderModel();
    }

    public function index()
    {
        $lender = $this->lenderModel->findAll();
        $data = [
            'title' => 'Dashboard Lender',
            'active' => 'dashboardLender',
            'lender' => $lender,
        ];
        return view('pages/lender/dashboardLender', $data);
    }
}
