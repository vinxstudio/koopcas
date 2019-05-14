<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoanClass;
use App\Http\Resources\LoanClassResource;

class LoanClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loanclasses = LoanClass::getAllLoanClass();
        return LoanClassResource::collection($loanclasses);
    }

}
