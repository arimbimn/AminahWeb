<?php

namespace App\Controllers;

use App\Models\MitraModel;

class BerandaLender extends BaseController
{
    protected $mitraModel;

    public function __construct()
    {
        $this->mitraModel = new MitraModel();
    }

    public function index()
    {
        $mitra = $this->mitraModel->get_sample_mitra(3);
        $data = [
            'title' => 'Beranda Lender',
            'active' => 'berandaLender',
            'mitra' => $mitra,
        ];
        return view('pages/lender/berandaLender', $data);
    }
}
