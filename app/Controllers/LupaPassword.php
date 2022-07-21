<?php

namespace App\Controllers;

class LupaPassword extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Lupa Kata Sandi/Password',
        ];
        return view('pages/lupaPassword', $data);
    }
}
