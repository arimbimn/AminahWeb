<?php

namespace App\Controllers;

class RegisterLender extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Register Lender',
        ];
        return view('pages/lender/registerLender', $data);
    }
}
