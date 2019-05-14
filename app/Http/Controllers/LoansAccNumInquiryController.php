<?php

namespace App\Http\Controllers;

use App\LoansAccNumInquiry;
use App\Http\Resources\LoansAccNumSearchInquiry;
use App\Http\Resources\LoansAccount;
use Illuminate\Http\Request;
use DB;

class LoansAccNumInquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($clientId,$branchCode)
    {
        $loansAccNum = LoansAccNumInquiry::getLoansAccount($clientId,$branchCode);
        return LoansAccNumSearchInquiry::collection($loansAccNum);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($clientId,$branchCode,$refNo,$slcCode,$sltCode)
    {
        $loanAcc = LoansAccNumInquiry::getLoanAccount($clientId,$branchCode,$refNo,$slcCode,$sltCode);
        return LoansAccount::collection($loanAcc);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
