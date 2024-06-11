<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
    public function bank_statement_page()
    {
        $months = [];

        for ($i = 0; $i < 24; $i++) {
            $date = Carbon::now()->subMonths($i);
            $months[] = $date->format('F Y');
        }

        return view('bank.statement', [
            'months' => $months
        ]);
    }
}
