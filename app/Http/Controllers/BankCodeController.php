<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BankCode;
use App\Http\Resources\BankCodeResource;

class BankCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bankcode = BankCode::getAllBankCode();
        return BankCodeResource::collection($bankcode);
    }

   
}
