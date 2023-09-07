<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index_login()
    {
        return view('web.auth.login');
    }
    public function index_register()
    {
        return view('web.auth.register');
    }
}
