<?php

namespace App\Controllers;

use App\Models\BorrowerModel;

class DashboardBorrower extends BaseController
{

    protected $borrowerModel;

    public function __construct()
    {
        $this->borrowerModel = new BorrowerModel();
    }

    public function index()
    {
        $borrower = $this->borrowerModel->findAll();
        $data = [
            'title' => 'Dashboard Borrower',
            'borrower' => $borrower,

        ];
        return view('pages/borrower/dashboardBorrower', $data);
    }
}
