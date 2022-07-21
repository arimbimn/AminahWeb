<?php

namespace App\Controllers;

class RecovPass extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Buat Kata Sandi/Password Baru',
        ];
        return view('pages/recovPass', $data);
    }
}
