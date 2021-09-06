<?php

namespace App\Http\Controllers\backend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SiteSetting;

class CredintialController extends Controller
{
    public function Registration()
    {
$data = SiteSetting::find(1);
        return view('frontend/pages/userRegistration',\compact('data'));
    }

    public function Login()
    {
        return view('frontend/pages/userLogin');
    }
}
