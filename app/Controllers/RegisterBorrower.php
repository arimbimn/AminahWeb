<?php

namespace App\Controllers;

class RegisterBorrower extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Register Borrower',
        ];
        return view('pages/borrower/registerBorrower', $data);
    }
}
