<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoanDeducGroup;
use App\Http\Resources\LoanDeducGroupResource;

class LoanDeducGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loandeducgroups = LoanDeducGroup::getAllLoanDeducGroup();
        return LoanDeducGroupResource::collection($loandeducgroups);
    }

  
}
