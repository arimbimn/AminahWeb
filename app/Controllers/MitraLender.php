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
        foreach ($mitra as $key => $m) {
            $persen = $m['danaTerkumpul'] / $m['danaDibutuhkan'] * 100;
            $mitra[$key]['persen'] = $persen;
        }

        $data = [
            'title' => 'Mitra Lender',
            'active' => 'mitraLender',
            'mitra' => $mitra,

        ];

        return view('pages/lender/mitraLender', $data);
    }
}
