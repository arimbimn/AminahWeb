<?php

namespace App\Controllers;

class LoginAdmin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login Admin',
        ];
        return view('pages/admin/loginAdmin', $data);
    }
}
