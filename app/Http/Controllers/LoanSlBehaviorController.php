<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoanSlBehavior;
use App\Http\Resources\LoanSlBehaviorResource;

class LoanSlBehaviorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loanslbehaviors = LoanSlBehavior::getAllLoanSlBehavior();
        return LoanSlBehaviorResource::collection($loanslbehaviors);
    }

   
}
