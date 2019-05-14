<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Td;
use App\Http\Resources\TdResource;

class TdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($tdBrCode, $tdSlcCode, $tdSltCode, $tdRefNo, $clientIdTd)
    {
        $td = Td::getTdById($tdBrCode, $tdSlcCode, $tdSltCode, $tdRefNo, $clientIdTd);
        return TdResource::collection($td);
    }

    public function show($clientIdTd)
    {
        $td = Td::getTdByClientId($clientIdTd);
        return TdResource::collection($td);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $td = new Td;

        $td->TDBR_CODE = 18;
        $td->TDSLC_CODE = 24;
        $td->TDSLT_CODE = $request->input('tdSltCode');
        $td->TDREF_NO = $request->input('tdRefNo');
        $td->ClientIDTD = $request->input('clientIdTd');
        $td->TDTR_DATE = $request->input('tdTrDate');
        $td->TDSTATUS = $request->input('tdStatus');
        $td->TDINT_RATE = $request->input('tdIntRate');
        $td->TDTERMS = $request->input('tdTerms');
        $td->TDTERM_PERD = $request->input('tdTermPerd');
        $td->TDMAT_DATE = $request->input('tdMatDate');
        $td->TDCERT_NUM = $request->input('tdCertNum');
        $td->TDUPDDATETIME = $request->input('tdUpdDateTime');
        $td->TDREMARKS = $request->input('tdRemarks');
        $td->TDUpdUser = $request->input('tdUpdUser');
        $td->TDRO_SLC_CODE = $request->input('tdRoSlcCode');
        $td->TDRO_SLT_CODE = $request->input('tdRoSltCode');
        $td->TDRO_ACCTCODE = $request->input('tdRoAcctCode');

        Td::insertTd($td->TDBR_CODE, $td->TDSLC_CODE, $td->TDSLT_CODE, $td->TDREF_NO, $td->ClientIDTD, $td->TDTR_DATE, $td->TDSTATUS,
        $td->TDINT_RATE, $td->TDTERMS, $td->TDTERM_PERD, $td->TDMAT_DATE, $td->TDCERT_NUM, $td->TDUPDDATETIME, $td->TDREMARKS,
        $td->TDUpdUser, $td->TDRO_SLC_CODE, $td->TDRO_SLT_CODE, $td->TDRO_ACCTCODE);
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
        $td = new Td;

        $td->TDBR_CODE = $request->input('trBrCode');
        $td->TDSLC_CODE = $request->input('tdSlcCode');
        $td->TDSLT_CODE = $request->input('tdSltCode');
        $td->TDREF_NO = $request->input('tdRefNo');
        $td->ClientIDTD = $request->input('clientIdTd');
        $td->TDTR_DATE = $request->input('tdTrDate');
        $td->TDSTATUS = $request->input('tdStatus');
        $td->TDINT_RATE = $request->input('tdIntRate');
        $td->TDTERMS = $request->input('tdTerms');
        $td->TDTERM_PERD = $request->input('tdTermPerd');
        $td->TDMAT_DATE = $request->input('tdMatDate');
        $td->TDCERT_NUM = $request->input('tdCertNum');
        $td->TDUPDDATETIME = $request->input('tdUpdDateTime');
        $td->TDREMARKS = $request->input('tdRemarks');
        $td->TDUpdUser = $request->input('tdUpdUser');
        $td->TDRO_SLC_CODE = $request->input('tdRoSlcCode');
        $td->TDRO_SLT_CODE = $request->input('tdRoSltCode');
        $td->TDRO_ACCTCODE = $request->input('tdRoAcctCode');

        Td::updateTdById($td->TDBR_CODE, $td->TDSLC_CODE, $td->TDSLT_CODE, $td->TDREF_NO, $td->ClientIDTD, $td->TDTR_DATE, $td->TDSTATUS,
        $td->TDINT_RATE, $td->TDTERMS, $td->TDTERM_PERD, $td->TDMAT_DATE, $td->TDCERT_NUM, $td->TDUPDDATETIME, $td->TDREMARKS,
        $td->TDUpdUser, $td->TDRO_SLC_CODE, $td->TDRO_SLT_CODE, $td->TDRO_ACCTCODE);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($tdBrCode, $tdSlcCode, $tdSltCode, $tdRefNo, $clientIdTd)
    {
        Td::deleteTdById($tdBrCode, $tdSlcCode, $tdSltCode, $tdRefNo, $clientIdTd);
    }
}
