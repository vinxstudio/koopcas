<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ap;
use App\Http\Resources\ApResource;

class ApController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($apBrCode, $apSlcCode, $apSltCode, $apRefNo, $clientIdAp)
    {
        $ap = Ap::getApById($apBrCode, $apSlcCode, $apSltCode, $apRefNo, $clientIdAp);
        return ApResource::collection($ap);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ap = new Ap;

        $ap->APBR_CODE = 18;
        $ap->APSLC_CODE = 26;
        $ap->APSLT_CODE = $request->input('apSltCode');
        $ap->APREF_NO = $request->input('apRefNo');
        $ap->ClientIDAP = $request->input('clientIdAp');
        $ap->APTR_DATE = $request->input('apTrDate');
        $ap->APPAMT = $request->input('apPamt');
        $ap->APSTATUS = 11;
        $ap->APTERMS = $request->input('apTerms');
        $ap->APTERM_PERD = $request->input('apTermPerd');
        $ap->APPPMT_MODE = $request->input('apPpmtMode');
        $ap->APPPMT_MFAC = $request->input('apPpmtMfac');
        $ap->APPPMT_MOD2 = $request->input('apPpmtMod2');
        $ap->APDD_FLAG = $request->input('apDdFlag');
        $ap->APFPD_DATE = $request->input('apFpdDate');
        $ap->APMAT_DATE = $request->input('apMatDate');
        $ap->APUPDDATETIME = $request->input('apUpdDateTime');
        $ap->APAMORTZN = $request->input('apAmortzn');
        $ap->APRemarks = $request->input('apRemarks');
        $ap->APUpdUser = $request->input('apUpdUser');
        $ap->APLSLC_CODE = $request->input('aplSlcCode');
        $ap->APLSLT_CODE = $request->input('aplSltCode');
        $ap->APLREF_NO = $request->input('aplRefNo');

        Ap::insertAp($ap->APBR_CODE, $ap->APSLC_CODE, $ap->APSLT_CODE, $ap->APREF_NO, $ap->ClientIDAP, $ap->APTR_DATE,
        $ap->APPAMT, $ap->APSTATUS, $ap->APTERMS, $ap->APTERM_PERD, $ap->APPPMT_MODE, $ap->APPPMT_MFAC, $ap->APPPMT_MOD2,
        $ap->APDD_FLAG, $ap->APFPD_DATE, $ap->APMAT_DATE, $ap->APAMORTZN, $ap->APUPDDATETIME, $ap->APRemarks, $ap->APUpdUser,
        $ap->APLSLC_CODE, $ap->APLSLT_CODE, $ap->APLREF_NO);
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
        $ap = new Ap;

        $ap->APBR_CODE = $request->input('apBrCode');
        $ap->APSLC_CODE = $request->input('apSlcCode');
        $ap->APSLT_CODE = $request->input('apSltCode');
        $ap->APREF_NO = $request->input('apRefNo');
        $ap->ClientIDAP = $request->input('clientIdAp');
        $ap->APTR_DATE = $request->input('apTrDate');
        $ap->APPAMT = $request->input('apPamt');
        $ap->APSTATUS = $request->input('apStatus');
        $ap->APTERMS = $request->input('apTerms');
        $ap->APTERM_PERD = $request->input('apTermPerd');
        $ap->APPPMT_MODE = $request->input('apPpmtMode');
        $ap->APPPMT_MFAC = $request->input('apPpmtMfac');
        $ap->APPPMT_MOD2 = $request->input('apPpmtMod2');
        $ap->APDD_FLAG = $request->input('apDdFlag');
        $ap->APFPD_DATE = $request->input('apFpdDate');
        $ap->APMAT_DATE = $request->input('apMatDate');
        $ap->APUPDDATETIME = $request->input('apUpdDateTime');
        $ap->APAMORTZN = $request->input('apAmortzn');
        $ap->APRemarks = $request->input('apRemarks');
        $ap->APUpdUser = $request->input('apUpdUser');
        $ap->APLSLC_CODE = $request->input('aplSlcCode');
        $ap->APLSLT_CODE = $request->input('aplSltCode');
        $ap->APLREF_NO = $request->input('aplRefNo');

        Ap::updateAp($ap->APBR_CODE, $ap->APSLC_CODE, $ap->APSLT_CODE, $ap->APREF_NO, $ap->ClientIDAP, $ap->APTR_DATE,
        $ap->APPAMT, $ap->APSTATUS, $ap->APTERMS, $ap->APTERM_PERD, $ap->APPPMT_MODE, $ap->APPPMT_MFAC, $ap->APPPMT_MOD2,
        $ap->APDD_FLAG, $ap->APFPD_DATE, $ap->APMAT_DATE, $ap->APAMORTZN, $ap->APUPDDATETIME, $ap->APRemarks, $ap->APUpdUser,
        $ap->APLSLC_CODE, $ap->APLSLT_CODE, $ap->APLREF_NO);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($apBrCode, $apSlcCode, $apSltCode, $apRefNo, $clientIdAp)
    {
        Ap::deleteApById($apBrCode, $apSlcCode, $apSltCode, $apRefNo, $clientIdAp);
    }
}
