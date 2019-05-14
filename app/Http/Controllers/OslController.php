<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Osl;
use App\Http\Resources\OslResource;

class OslController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($oslBrCode, $oslSlcCode, $oslSltCode, $oslRefNo, $clientIdOsl)
    {
        $osl = Osl::getOslById($oslBrCode, $oslSlcCode, $oslSltCode, $oslRefNo, $clientIdOsl);
        return OslResource::collection($osl);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $osl = new Osl;

        $osl->OSLBR_CODE = 18;
        $osl->OSLSLC_CODE = 14;
        $osl->OSLSLT_CODE = $request->input('oslSltCode');
        $osl->OSLREF_NO = $request->input('oslRefNo');
        $osl->ClientIDOSL = $request->input('clientIdOsl');
        $osl->OSLTR_DATE = $request->input('oslTrDate');
        $osl->OSLPAMT = $request->input('oslPamt');
        $osl->OSLSTATUS = 15;
        $osl->OSLTERMS = $request->input('oslTerms');
        $osl->OSLUPDDATETIME = $request->input('oslUpdDateTime');
        $osl->OSLREMARKS = $request->input('oslRemarks');
        $osl->OSLUpdUser = $request->input('oslUpdUser');

        Osl::insertOsl($osl->OSLBR_CODE, $osl->OSLSLC_CODE, $osl->OSLSLT_CODE, $osl->OSLREF_NO, $osl->ClientIDOSL, $osl->OSLTR_DATE,
        $osl->OSLPAMT, $osl->OSLSTATUS, $osl->OSLTERMS, $osl->OSLUPDDATETIME, $osl->OSLREMARKS, $osl->OSLUpdUser);
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
        $osl = new Osl;

        $osl->OSLBR_CODE = $request->input('oslBrCode');
        $osl->OSLSLC_CODE = $request->input('oslSlcCode');
        $osl->OSLSLT_CODE = $request->input('oslSltCode');
        $osl->OSLREF_NO = $request->input('oslRefNo');
        $osl->ClientIDOSL = $request->input('clientIdOsl');
        $osl->OSLTR_DATE = $request->input('oslTrDate');
        $osl->OSLPAMT = $request->input('oslPamt');
        $osl->OSLSTATUS = $request->input('oslStatus');
        $osl->OSLTERMS = $request->input('oslTerms');
        $osl->OSLUPDDATETIME = $request->input('oslUpdDateTime');
        $osl->OSLREMARKS = $request->input('oslRemarks');
        $osl->OSLUpdUser = $request->input('oslUpdUser');

        Osl::updateOsl($osl->OSLBR_CODE, $osl->OSLSLC_CODE, $osl->OSLSLT_CODE, $osl->OSLREF_NO, $osl->ClientIDOSL, $osl->OSLTR_DATE,
        $osl->OSLPAMT, $osl->OSLSTATUS, $osl->OSLTERMS, $osl->OSLUPDDATETIME, $osl->OSLREMARKS, $osl->OSLUpdUser);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($oslBrCode, $oslSlcCode, $oslSltCode, $oslRefNo, $clientIdOsl)
    {
        Osl::deleteOslById($oslBrCode, $oslSlcCode, $oslSltCode, $oslRefNo, $clientIdOsl);
    }


}
