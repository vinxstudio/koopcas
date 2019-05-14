<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoanSubType;
use App\Http\Resources\LoanSubTypeResource;

class LoanSubTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loansubtypes = LoanSubType::getAllLoanSubType();
        return LoanSubTypeResource::collection($loansubtypes);
    }

  
}
