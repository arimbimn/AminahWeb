<?php

namespace App\Controllers;

class DashboardAdmin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin',
            'active' => 'dashboardLender',
        ];
        return view('pages/admin/dashboardAdmin', $data);
    }
}
