<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoanPurpose;
use App\Http\Resources\LoanPurposeResource;

class LoanPurposeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loanpurposes = LoanPurpose::getAllLoanPurpose();
        return LoanPurposeResource::collection($loanpurposes);
    }

   
}
