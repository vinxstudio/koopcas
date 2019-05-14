<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransSum;
use App\Http\Resources\TransSumResource;

class TransSumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($trClientId)
    {
        $transsums = TransSum::getAllTransSumById($trClientId);
        return TransSumResource::collection($transsums);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transsum = new TransSum;

        $ctlnum = 1;
        $ctl = TransSum::getLastCtlNo();
        foreach($ctl as $row){
            $ctlno = $row->TR_CTLNO + 1;
            $ctlnum = $ctlno;
        }

        $i = 1;
        $docnum = "00000000".$i;
        $docnum = substr($docnum, strlen($docnum)-8);
        $doc = TransSum::getLastTrDocNo();
        foreach($doc as $row){
            $x = $row->TR_DOCNO + 1;
            $docnum = "00000000".$x;
            $docnum = substr($docnum, strlen($docnum)-8);
        }

        $transsum->TR_BRCODE = $request->input('trBrCode');
        $transsum->TR_YEAR = date('Y');
        $transsum->TR_MODULE = $request->input('trModule');
        $transsum->TR_CODE = $request->input('trCode');
        $transsum->TR_CTLNO = $ctlnum;
        $transsum->TR_DOCNO = $docnum;
        $transsum->INVTR_CTLNO = $request->input('invTrCtlNo');
        $transsum->TR_DATE = $request->input('trDate');
        $transsum->TR_TIME = $request->input('trTime');
        $transsum->TR_CLIENTID = $request->input('trClientId');
        $transsum->BATCH_NO = $request->input('batchNo');
        $transsum->EXPLANATION = $request->input('explanation');
        $transsum->CLIENTNAME = $request->input('clientName');
        $transsum->ANDOR_NAME = $request->input('andorName');
        $transsum->IS_FO = $request->input('isFo');
        $transsum->DATETIMEADDED = $request->input('DateTimeAdded');
        $transsum->CASHPAYMENT = $request->input('cashPayment');
        $transsum->CREDITPAYMENT = $request->input('creditPayment');
        $transsum->POINTSPAYMENT = $request->input('pointsPayment');

        TransSum::insertTrunsSum($transsum->TR_BRCODE, $transsum->TR_YEAR, $transsum->TR_MODULE, $transsum->TR_CODE, $transsum->TR_CTLNO,
        $transsum->TR_DOCNO, $transsum->INVTR_CTLNO, $transsum->TR_DATE, $transsum->TR_TIME, $transsum->TR_CLIENTID, $transsum->BATCH_NO,
        $transsum->EXPLANATION, $transsum->CLIENTNAME, $transsum->ANDOR_NAME, $transsum->IS_FO, $transsum->DATETIMEADDED, $transsum->CASHPAYMENT,
        $transsum->CREDITPAYMENT, $transsum->POINTSPAYMENT);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($trCode, $trYear, $trCtlNo, $trDocNo)
    {
        $transsum = TransSum::getTransSumById($trCode, $trYear, $trCtlNo, $trDocNo);
        return TransSumResource::collection($transsum);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $transsum = new TransSum;

        $transsum->TR_BRCODE = $request->input('trBrCode');
        $transsum->TR_YEAR = $request->input('trYear');
        $transsum->TR_MODULE = $request->input('trModule');
        $transsum->TR_CODE = $request->input('trCode');
        $transsum->TR_CTLNO = $request->input('trCtlNo');
        $transsum->TR_DOCNO = $request->input('trDocNo');
        $transsum->INVTR_CTLNO = $request->input('invTrCtlNo');
        $transsum->TR_DATE = $request->input('trDate');
        $transsum->TR_TIME = $request->input('trTime');
        $transsum->TR_CLIENTID = $request->input('trClientId');
        $transsum->BATCH_NO = $request->input('batchNo');
        $transsum->EXPLANATION = $request->input('explanation');
        $transsum->CLIENTNAME = $request->input('clientName');
        $transsum->ANDOR_NAME = $request->input('andorName');
        $transsum->IS_FO = $request->input('isFo');
        $transsum->DATETIMEADDED = $request->input('DateTimeAdded');
        $transsum->CASHPAYMENT = $request->input('cashPayment');
        $transsum->CREDITPAYMENT = $request->input('creditPayment');
        $transsum->POINTSPAYMENT = $request->input('pointsPayment');

        TransSum::editTransSum($transsum->TR_BRCODE, $transsum->TR_YEAR, $transsum->TR_MODULE, $transsum->TR_CODE, $transsum->TR_CTLNO,
        $transsum->TR_DOCNO, $transsum->INVTR_CTLNO, $transsum->TR_DATE, $transsum->TR_TIME, $transsum->TR_CLIENTID, $transsum->BATCH_NO,
        $transsum->EXPLANATION, $transsum->CLIENTNAME, $transsum->ANDOR_NAME, $transsum->IS_FO, $transsum->DATETIMEADDED, $transsum->CASHPAYMENT,
        $transsum->CREDITPAYMENT, $transsum->POINTSPAYMENT);
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
