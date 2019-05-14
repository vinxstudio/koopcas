<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoanSecurity;
use App\Http\Resources\LoanSecurityResource;

class LoanSecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loansecurities = LoanSecurity::getAllLoanSecurity();
        return LoanSecurityResource::collection($loansecurities);
    }

    
}
