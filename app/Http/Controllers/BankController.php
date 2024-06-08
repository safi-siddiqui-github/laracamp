<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankController extends Controller
{
    public function home_page()
    {
        return view('bank.home');
    }
    public function bank_dashboard_page()
    {
        return view('bank.dashboard');
    }
}
