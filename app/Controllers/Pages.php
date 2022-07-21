<?php

namespace App\Controllers;

use App\Models\MitraModel;

class Pages extends BaseController
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
            'title' => 'Home | Aminah',
            'active' => 'home',
            'mitra' => $mitra,
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us',
            'active' => 'about',
        ];
        return view('pages/about', $data);
    }

    public function caraKerja()
    {
        $data = [
            'title' => 'Cara Kerja',
            'active' => 'caraKerja',
        ];
        return view('pages/caraKerja', $data);
    }
}
