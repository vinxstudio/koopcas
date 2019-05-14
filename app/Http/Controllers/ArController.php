<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ar;
use App\Http\Resources\ArResource;
use App\Http\Resources\ArSearchResource;

class ArController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($clientIdAr)
    {
        $ars = Ar::getAllArById($clientIdAr);
        return ArSearchResource::collection($ars);
    }

    /**
     * Display a resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($arBrCode, $arSlcCode, $arSltCode, $arRefNo, $clientIdAr)
    {
        $ar = Ar::getArById($arBrCode, $arSlcCode, $arSltCode, $arRefNo, $clientIdAr);
        return ArResource::collection($ar);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ar = new Ar;

        $ar->ARBR_CODE = 18;
        $ar->ARSLC_CODE = 13;
        $ar->ARSLT_CODE = $request->input('arSltCode');
        $ar->ARREF_NO = $request->input('arRefNo');
        $ar->ClientIDAR = $request->input('clientIdAr'); 
        $ar->ARCLASS = $request->input('arClass');
        $ar->ARPURPOSE = $request->input('arPurpose');
        $ar->ARPAMT = $request->input('arPamt');
        $ar->ARSTATUS = $request->input('arStatus');
        $ar->ARENCUMB = $request->input('arEncumb');
        $ar->ARTR_DATE = $request->input('arTrDate');
        $ar->ARTERMS = $request->input('arTerms');
        $ar->ARTERM_PERD = $request->input('arTermPerd');
        $ar->ARPPMT_MODE = $request->input('arPpmtMode');
        $ar->ARPPMT_MFAC = $request->input('arPpmtMfac');
        $ar->ARPPMT_MOD2 = $request->input('arPpmtMod2');
        $ar->ARINT_RATE = $request->input('arIntRate');
        $ar->ARAMORTYPE = $request->input('arAmorType');
        $ar->ARDIMB_FREQ = $request->input('arDimbFreq');
        $ar->ARIPMT_MODE = $request->input('arIpmtMode');
        $ar->ARIPMT_MFAC = $request->input('arIpmtMfac');
        $ar->ARIPMT_MOD2 = $request->input('arIpmtMod2');
        $ar->ARPEN_RATE = $request->input('arPenRate');
        $ar->ARPEN_MODE = $request->input('arPenMode');
        $ar->ARPEN_MFAC = $request->input('arPenMfac');
        $ar->ARPEN_MOD2 = $request->input('arPenMod2');
        $ar->ARDD_FLAG = $request->input('arDdFlag');
        $ar->ARINT_GP = $request->input('arIntGp');
        $ar->ARPRIN_GP = $request->input('arPrinGp');
        $ar->ARFID_DATE = $request->input('arFidDate');
        $ar->ARFPD_DATE = $request->input('arFpdDate');
        $ar->ARMAT_DATE = $request->input('arMatDate');
        $ar->ARND_FLAG = $request->input('arNdFlag');
        $ar->ARXXREF_NO = $request->input('arXxrefNo');
        $ar->ARDISSUED = $request->input('ardIssued');
        $ar->ARCRLIMIT = $request->input('arCrLimit');
        $ar->ARMCLASS = $request->input('arMClass');
        $ar->ARACCTOFF = $request->input('arAcctOff');
        $ar->ARRESTRUCT = $request->input('arRestRuct');
        $ar->ARXSLT_CODE = $request->input('arXSltCode');
        $ar->ARXREF_NO = $request->input('arXRefNo');
        $ar->ARCOLLTYPE = $request->input('arCollType');
        $ar->ARCOLLAMT = $request->input('arCollAmt');
        $ar->ARCOLLDESC = $request->input('arCollDesc');
        $ar->ARRemarks = $request->input('arRemarks');
        $ar->ARUPDDATETIME = $request->input('arUpdDateTime');
        $ar->ARUpdUser = $request->input('arUpdUser');
        $ar->ARCBUAMT = $request->input('arCbuAmt');
        $ar->ARSAVAMT = $request->input('arSavAmt');
        $ar->ARCI = $request->input('arCi');
        $ar->ARPENGP = $request->input('arPenGp');
        $ar->ARPREPAIDPYMTS = $request->input('arPrepaidPymts');
        $ar->ARISDISTRIBUTEUNPAIDINT = $request->input('arIsDistributeUnpaidInt');
        $ar->ARCOLLECTOR = $request->input('arCollector');
        $ar->ARPAMT2 = $request->input('arpAmt2');
        $ar->ARCOLLECTTYPE = $request->input('arCollectType');
        $ar->ARCOLLFEE = $request->input('arCollFee');

        Ar::insertAr($ar->ARBR_CODE, $ar->ARSLC_CODE, $ar->ARSLT_CODE, $ar->ARREF_NO, $ar->ClientIDAR, $ar->ARCLASS, $ar->ARPURPOSE, $ar->ARPAMT, $ar->ARSTATUS,
        $ar->ARENCUMB, $ar->ARTR_DATE, $ar->ARTERMS, $ar->ARTERM_PERD, $ar->ARPPMT_MODE, $ar->ARPPMT_MFAC, $ar->ARPPMT_MOD2, $ar->ARINT_RATE, $ar->ARAMORTYPE,
        $ar->ARDIMB_FREQ, $ar->ARIPMT_MODE, $ar->ARIPMT_MFAC, $ar->ARIPMT_MOD2, $ar->ARPEN_RATE, $ar->ARPEN_MODE, $ar->ARPEN_MFAC, $ar->ARPEN_MOD2, $ar->ARDD_FLAG,
        $ar->ARINT_GP, $ar->ARPRIN_GP, $ar->ARFID_DATE, $ar->ARFPD_DATE, $ar->ARMAT_DATE, $ar->ARND_FLAG, $ar->ARXXREF_NO, $ar->ARDISSUED, $ar->ARCRLIMIT, $ar->ARMCLASS,
        $ar->ARACCTOFF, $ar->ARRESTRUCT, $ar->ARXSLT_CODE, $ar->ARXREF_NO, $ar->ARCOLLTYPE, $ar->ARCOLLAMT, $ar->ARCOLLDESC, $ar->ARRemarks, $ar->ARUPDDATETIME, $ar->ARUpdUser,
        $ar->ARCBUAMT, $ar->ARSAVAMT, $ar->ARCI, $ar->ARPENGP, $ar->ARPREPAIDPYMTS, $ar->ARISDISTRIBUTEUNPAIDINT, $ar->ARCOLLECTOR, $ar->ARPAMT2, $ar->ARCOLLECTTYPE, $ar->ARCOLLFEE);
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
        $ar = new Ar;

        $ar->ARBR_CODE = $request->input('arBrCode');
        $ar->ARSLC_CODE = $request->input('arSlcCode');
        $ar->ARSLT_CODE = $request->input('arSltCode');
        $ar->ARREF_NO = $request->input('arRefNo');
        $ar->ClientIDAR = $request->input('clientIdAr'); 
        $ar->ARCLASS = $request->input('arClass');
        $ar->ARPURPOSE = $request->input('arPurpose');
        $ar->ARPAMT = $request->input('arPamt');
        $ar->ARSTATUS = $request->input('arStatus');
        $ar->ARENCUMB = $request->input('arEncumb');
        $ar->ARTR_DATE = $request->input('arTrDate');
        $ar->ARTERMS = $request->input('arTerms');
        $ar->ARTERM_PERD = $request->input('arTermPerd');
        $ar->ARPPMT_MODE = $request->input('arPpmtMode');
        $ar->ARPPMT_MFAC = $request->input('arPpmtMfac');
        $ar->ARPPMT_MOD2 = $request->input('arPpmtMod2');
        $ar->ARINT_RATE = $request->input('arIntRate');
        $ar->ARAMORTYPE = $request->input('arAmorType');
        $ar->ARDIMB_FREQ = $request->input('arDimbFreq');
        $ar->ARIPMT_MODE = $request->input('arIpmtMode');
        $ar->ARIPMT_MFAC = $request->input('arIpmtMfac');
        $ar->ARIPMT_MOD2 = $request->input('arIpmtMod2');
        $ar->ARPEN_RATE = $request->input('arPenRate');
        $ar->ARPEN_MODE = $request->input('arPenMode');
        $ar->ARPEN_MFAC = $request->input('arPenMfac');
        $ar->ARPEN_MOD2 = $request->input('arPenMod2');
        $ar->ARDD_FLAG = $request->input('arDdFlag');
        $ar->ARINT_GP = $request->input('arIntGp');
        $ar->ARPRIN_GP = $request->input('arPrinGp');
        $ar->ARFID_DATE = $request->input('arFidDate');
        $ar->ARFPD_DATE = $request->input('arFpdDate');
        $ar->ARMAT_DATE = $request->input('arMatDate');
        $ar->ARND_FLAG = $request->input('arNdFlag');
        $ar->ARXXREF_NO = $request->input('arXxrefNo');
        $ar->ARDISSUED = $request->input('ardIssued');
        $ar->ARCRLIMIT = $request->input('arCrLimit');
        $ar->ARMCLASS = $request->input('arMClass');
        $ar->ARACCTOFF = $request->input('arAcctOff');
        $ar->ARRESTRUCT = $request->input('arRestRuct');
        $ar->ARXSLT_CODE = $request->input('arXSltCode');
        $ar->ARXREF_NO = $request->input('arXRefNo');
        $ar->ARCOLLTYPE = $request->input('arCollType');
        $ar->ARCOLLAMT = $request->input('arCollAmt');
        $ar->ARCOLLDESC = $request->input('arCollDesc');
        $ar->ARRemarks = $request->input('arRemarks');
        $ar->ARUPDDATETIME = $request->input('arUpdDateTime');
        $ar->ARUpdUser = $request->input('arUpdUser');
        $ar->ARCBUAMT = $request->input('arCbuAmt');
        $ar->ARSAVAMT = $request->input('arSavAmt');
        $ar->ARCI = $request->input('arCi');
        $ar->ARPENGP = $request->input('arPenGp');
        $ar->ARPREPAIDPYMTS = $request->input('arPrepaidPymts');
        $ar->ARISDISTRIBUTEUNPAIDINT = $request->input('arIsDistributeUnpaidInt');
        $ar->ARCOLLECTOR = $request->input('arCollector');
        $ar->ARPAMT2 = $request->input('arpAmt2');
        $ar->ARCOLLECTTYPE = $request->input('arCollectType');
        $ar->ARCOLLFEE = $request->input('arCollFee');

        Ar::updateArById($ar->ARBR_CODE, $ar->ARSLC_CODE, $ar->ARSLT_CODE, $ar->ARREF_NO, $ar->ClientIDAR, $ar->ARCLASS, $ar->ARPURPOSE, $ar->ARPAMT, $ar->ARSTATUS,
        $ar->ARENCUMB, $ar->ARTR_DATE, $ar->ARTERMS, $ar->ARTERM_PERD, $ar->ARPPMT_MODE, $ar->ARPPMT_MFAC, $ar->ARPPMT_MOD2, $ar->ARINT_RATE, $ar->ARAMORTYPE,
        $ar->ARDIMB_FREQ, $ar->ARIPMT_MODE, $ar->ARIPMT_MFAC, $ar->ARIPMT_MOD2, $ar->ARPEN_RATE, $ar->ARPEN_MODE, $ar->ARPEN_MFAC, $ar->ARPEN_MOD2, $ar->ARDD_FLAG,
        $ar->ARINT_GP, $ar->ARPRIN_GP, $ar->ARFID_DATE, $ar->ARFPD_DATE, $ar->ARMAT_DATE, $ar->ARND_FLAG, $ar->ARXXREF_NO, $ar->ARDISSUED, $ar->ARCRLIMIT, $ar->ARMCLASS,
        $ar->ARACCTOFF, $ar->ARRESTRUCT, $ar->ARXSLT_CODE, $ar->ARXREF_NO, $ar->ARCOLLTYPE, $ar->ARCOLLAMT, $ar->ARCOLLDESC, $ar->ARRemarks, $ar->ARUPDDATETIME, $ar->ARUpdUser,
        $ar->ARCBUAMT, $ar->ARSAVAMT, $ar->ARCI, $ar->ARPENGP, $ar->ARPREPAIDPYMTS, $ar->ARISDISTRIBUTEUNPAIDINT, $ar->ARCOLLECTOR, $ar->ARPAMT2, $ar->ARCOLLECTTYPE, $ar->ARCOLLFEE);

    }

    /**
     * Remove a resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($arBrCode, $arSlcCode, $arSltCode, $arRefNo, $clientIdAr)
    {
        Ar::deleteArById($arBrCode, $arSlcCode, $arSltCode, $arRefNo, $clientIdAr);
    }
   
}
