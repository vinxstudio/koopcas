<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sd;
use App\Http\Resources\SdResource;

class SdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($sdBrCode, $sdSlcCode, $sdSltCode, $sdRefNo ,$clientIdSd)
    {
        $sds = Sd::getSdById($sdBrCode, $sdSlcCode, $sdSltCode, $sdRefNo, $clientIdSd);
        return SdResource::collection($sds);
    }

    public function indexId($id){
        $sd = Sd::getSdByClientId($id);
        return SdResource::collection($sd);
    }

    // public function show($sdBrCode, $sdSlcCode, $sdSltCode, $sdRefNo, $clientIdSd)
    // {
    //     $sds = Sd::getSdById($sdBrCode, $sdSlcCode, $sdSltCode, $sdRefNo, $clientIdSd);
    //     return SdResource::collection($sds);
    // }


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
        
        
        $sd = new Sd;
        
        $id = Sd::getRefNoLastId();
        foreach($id as $row) {
            $refno = $row->SDREF_NO + 1;
        }

        $sd->SDBR_CODE = 18;
        $sd->SDSLC_CODE = 22;
        $sd->SDSLT_CODE = $request->input('sdSltCode');
        $sd->SDREF_NO = $refno;
        $sd->ClientIDSD = $request->input('clientIdSd');
        $sd->SDTR_DATE = $request->input('sdTrDate');
        $sd->SDSTATUS = 15;
        $sd->SDMIN_BAL = $request->input('sdMinBal');
        $sd->SDINT_RATE = $request->input('sdIntRate');
        $sd->SDUPDDATETIME = $request->input('sdUpdDateTime');
        $sd->SDREMARKS = $request->input('sdRemarks');
        $sd->SDUpdUser = $request->input('sdUpdUser');
        $sd->SDSAVCLASS = $request->input('sdSavClass');

        Sd::insertSd( $sd->SDBR_CODE, $sd->SDSLC_CODE, $sd->SDSLT_CODE, $sd->SDREF_NO, $sd->ClientIDSD, $sd->SDTR_DATE,
        $sd->SDSTATUS, $sd->SDMIN_BAL, $sd->SDINT_RATE, $sd->SDUPDDATETIME, $sd->SDREMARKS, $sd->SDUpdUser, $sd->SDSAVCLASS);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id)
    public function update(Request $request)
    {
        $sd = new Sd;

        $sd->SDBR_CODE = $request->input('sdBrCode');
        $sd->SDSLC_CODE = $request->input('sdSlcCode');
        $sd->SDSLT_CODE = $request->input('sdSltCode');
        $sd->SDREF_NO = $request->input('sdRefNo');
        $sd->ClientIDSD = $request->input('clientIdSd');
        $sd->SDTR_DATE = $request->input('sdTrDate');
        $sd->SDSTATUS = $request->input('sdStatus');
        $sd->SDMIN_BAL = $request->input('sdMinBal');
        $sd->SDINT_RATE = $request->input('sdIntRate');
        $sd->SDUPDDATETIME = $request->input('sdUpdDateTime');
        $sd->SDREMARKS = $request->input('sdRemarks');
        $sd->SDUpdUser = $request->input('sdUpdUser');
        $sd->SDSAVCLASS = $request->input('sdSavClass');

        Sd::updateSdById( $sd->SDBR_CODE, $sd->SDSLC_CODE, $sd->SDSLT_CODE, $sd->SDREF_NO, $sd->ClientIDSD, $sd->SDTR_DATE,
        $sd->SDSTATUS, $sd->SDMIN_BAL, $sd->SDINT_RATE, $sd->SDUPDDATETIME, $sd->SDREMARKS, $sd->SDUpdUser, $sd->SDSAVCLASS);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($sdBrCode, $sdSlcCode, $sdSltCode, $sdRefNo, $clientIdSd)
    {
        Sd::deleteSdById($sdBrCode, $sdSlcCode, $sdSltCode, $sdRefNo, $clientIdSd);
    }
}
