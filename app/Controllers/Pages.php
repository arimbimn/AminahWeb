<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Aminah',
            'active' => 'home',
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
