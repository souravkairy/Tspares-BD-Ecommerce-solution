<?php

namespace App\Http\Controllers\backend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CredintialController extends Controller
{
    public function Registration()
    {
        return view('frontend/pages/userRegistration');
    }

    public function Login()
    {
        return view('frontend/pages/userLogin');
    }
}
