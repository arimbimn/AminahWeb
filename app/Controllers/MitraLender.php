<?php

namespace App\Controllers;

use App\Models\MitraModel;

class MitraLender extends BaseController
{
    protected $mitraModel;

    public function __construct()
    {
        $this->mitraModel = new MitraModel();
    }

    public function index()
    {
        $mitra = $this->mitraModel->findAll();
        $data = [
            'title' => 'Mitra Lender',
            'active' => 'mitraLender',
            'mitra' => $mitra,
        ];

        return view('pages/lender/mitraLender', $data);
    }
}
