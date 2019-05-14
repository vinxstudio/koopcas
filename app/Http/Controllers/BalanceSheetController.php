<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BalanceSheet;
use App\Http\Resources\BalanceSheetResource;

class BalanceSheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $balancesheets = BalanceSheet::getAllBalanceSheet();
        return  BalanceSheetResource::collection($balancesheets);
    }

}
