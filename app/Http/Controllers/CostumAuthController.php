<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostumAuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.registration');
    }
}