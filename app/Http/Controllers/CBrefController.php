<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CBref;
use App\Http\Resources\CBrefResource;

class CBrefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $cbrefs = CBref::getAllCBrefsById($id);
        return CBrefResource::collection($cbrefs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cbref = new CBref;
        $cbref->CBRefBR_CODE = 18;
        $cbref->ClientIDCBRef = $request->input('clientIdCbRef');
        $cbref->CBRefType = $request->input('cbRefType');
        $cbref->CBRefName = $request->input('cbRefName');
        $cbref->CBRefDateAcctOpened = $request->input('cbRefDateAcctOpened');
        $cbref->CBRefPrincipalAmount = $request->input('cbRefPrincipalAmount');
        $cbref->CBRefLoanBalance = $request->input('cbRefLoanBalance');
        $cbref->CBRefAddress = $request->input('cbRefAddress');
        $cbref->CBRefTelNum = $request->input('cbRefTelNum');
        $cbref->CBRefDateTimeAdded = $request->input('cbRefDateTimeAdded');

        CBref::insertCbrefById($cbref->CBRefBR_CODE, $cbref->ClientIDCBRef, $cbref->CBRefType, $cbref->CBRefName,
        $cbref->CBRefDateAcctOpened, $cbref->CBRefPrincipalAmount, $cbref->CBRefLoanBalance, $cbref->CBRefAddress,
        $cbref->CBRefTelNum, $cbref->CBRefDateTimeAdded);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CBref::deleteCbrefById($id);
    }
}
