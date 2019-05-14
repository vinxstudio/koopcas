<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanAppSearchPageController extends Controller
{
    public function index()
    {
        return view('loans.loanappsearch.loanappsearch');
    }
}
