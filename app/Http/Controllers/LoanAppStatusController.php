<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoanAppStatus;
use App\Http\Resources\LoanAppStatusResource;

class LoanAppStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loanappstatuses = LoanAppStatus::getAllLoanAppStatus();
        return LoanAppStatusResource::collection($loanappstatuses);
    }

    
}
