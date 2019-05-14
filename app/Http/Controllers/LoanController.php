<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use App\Http\Resources\LoanResource;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($loanBrCode, $loanSlcCode, $loanSltCode, $loanRefNo, $clientIdLoan)
    {
        $loan = Loan::getLoanById($loanBrCode, $loanSlcCode, $loanSltCode, $loanRefNo, $clientIdLoan);
        return LoanResource::collection($loan);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($clientIdLoan)
    {
        $loans = Loan::getAllLoanById($clientIdLoan);
        return LoanResource::collection($loans);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loan = new Loan;

        $loan->LoanBR_CODE = 18;
        $loan->LoanSLC_CODE = 12;
        $loan->LoanSLT_CODE = $request->input('loanSltCode');
        $loan->LoanREF_NO = $request->input('loanRefNo');
        $loan->ClientIDLoan = $request->input('clientIdLoan');
        $loan->LoanLOANCLASS = $request->input('loanLoanClass');
        $loan->LoanPURPOSE = $request->input('loanPurpose');
        $loan->LoanPAMT = $request->input('loanPamt');
        $loan->LoanSTATUS = $request->input('loanStatus');
        $loan->LoanENCUMB = $request->input('loanEncumb');
        $loan->LoanTR_DATE = $request->input('loanTrDate');
        $loan->LoanTERMS = $request->input('loanTerms');
        $loan->LoanTERM_PERD = $request->input('loanTermPerd');
        $loan->LoanPPMT_MODE = $request->input('loanPpmtMode');
        $loan->LoanPPMT_MFAC = $request->input('loanPpmtMfac');
        $loan->LoanPPMT_MOD2 = $request->input('loanPpmtMod2');
        $loan->LoanINT_RATE = $request->input('loanIntRate');
        $loan->LoanAMORTYPE = $request->input('loanAmorType');
        $loan->LoanDIMB_FREQ = $request->input('loanDimbFreq');
        $loan->LoanIPMT_MODE = $request->input('loanIpmtMode');
        $loan->LoanIPMT_MFAC = $request->input('loanIpmtMfac');
        $loan->LoanIPMT_MOD2 = $request->input('loanIpmtMod2');
        $loan->LoanPEN_RATE = $request->input('loanPenRate');
        $loan->LoanPEN_MODE = $request->input('loanPenMode');
        $loan->LoanPEN_MFAC = $request->input('loanPenMfac');
        $loan->LoanPEN_MOD2 = $request->input('loanPenMod2');
        $loan->LoanDD_FLAG = $request->input('loanDdFlag');
        $loan->LoanINT_GP = $request->input('loanIntGp');
        $loan->LoanPRIN_GP = $request->input('loanPrinGp');
        $loan->LoanFID_DATE = $request->input('loanFidDate');
        $loan->LoanFPD_DATE = $request->input('loanFpdDate');
        $loan->LoanMAT_DATE = $request->input('loanMatDate');
        $loan->LoanND_FLAG = $request->input('loanNdFlag');
        $loan->LoanMCLASS = $request->input('loanMClass');
        $loan->LoanACCTOFF = $request->input('loanAcctOff');
        $loan->LoanRESTRUCT = $request->input('loanRestRuct');
        $loan->LoanXSLT_CODE = $request->input('loanXSltCode');
        $loan->LoanXREF_NO = $request->input('loanXRefNo');
        $loan->LoanCOLLTYPE = $request->input('loanCollType');
        $loan->LoanCOLLAMT = $request->input('loanCollAmt');
        $loan->LoanCOLLDESC = $request->input('loanCollDesc');
        $loan->LoanRemarks = $request->input('loanRemarks');
        $loan->LoanUPDDATETIME = $request->input('loanUpdDateTime');
        $loan->LoanUpdUser = $request->input('loanUpdUser');
        $loan->LoanCBUAMT = $request->input('loanCbuAmt');
        $loan->LoanSAVAMT = $request->input('loanSavAmt');
        $loan->LoanCI = $request->input('loanCi');
        $loan->LoanXXREF_NO = $request->input('loanXxRefno');
        $loan->LoanCRLIMIT = $request->input('loanCrLimit');
        $loan->LoanPENGP = $request->input('loanPenGp');
        $loan->LoanPREPAIDPYMTS = $request->input('loanPrepaidPymnts');
        $loan->LoanISDISTRIBUTEUNPAIDINT = $request->input('loanIsDistributeUnpaidInt');
        $loan->LoanCOLLECTOR = $request->input('loanCollector');
        $loan->LoanSUBTYPEID = $request->input('loanSubTypeId');
        $loan->LoanIsExcludeSundays = $request->input('loanIsExcludeSundays');
        $loan->LoanIsExcludeHolidays = $request->input('loanIsExcludeHolidays');
        $loan->LoanPAMT2 = $request->input('loanPamt2');
        $loan->LoanCOLLECTTYPE = $request->input('loanCollectType');
        $loan->LoanCOLLFEE = $request->input('loanCollfee');
        $loan->LoanINDUSTRY = $request->input('loanIndustry');
        $loan->LoanMemberRating = $request->input('loanMemberRating');
        $loan->LoanSecurity = $request->input('loanSecurity');
        $loan->LoanBank = $request->input('loanBank');

        Loan::insertLoan($loan->LoanBR_CODE, $loan->LoanSLC_CODE, $loan->LoanSLT_CODE, $loan->LoanREF_NO,
        $loan->ClientIDLoan, $loan->LoanLOANCLASS, $loan->LoanPURPOSE, $loan->LoanPAMT, $loan->LoanSTATUS,
        $loan->LoanENCUMB, $loan->LoanTR_DATE, $loan->LoanTERMS, $loan->LoanTERM_PERD, $loan->LoanPPMT_MODE,
        $loan->LoanPPMT_MFAC, $loan->LoanPPMT_MOD2, $loan->LoanINT_RATE, $loan->LoanAMORTYPE, $loan->LoanDIMB_FREQ,
        $loan->LoanIPMT_MODE, $loan->LoanIPMT_MFAC, $loan->LoanIPMT_MOD2, $loan->LoanPEN_RATE, $loan->LoanPEN_MODE,
        $loan->LoanPEN_MFAC, $loan->LoanPEN_MOD2, $loan->LoanDD_FLAG, $loan->LoanINT_GP, $loan->LoanPRIN_GP,
        $loan->LoanFID_DATE, $loan->LoanFPD_DATE, $loan->LoanMAT_DATE, $loan->LoanND_FLAG, $loan->LoanMCLASS,
        $loan->LoanACCTOFF, $loan->LoanRESTRUCT, $loan->LoanXSLT_CODE, $loan->LoanXREF_NO, $loan->LoanCOLLTYPE,
        $loan->LoanCOLLAMT, $loan->LoanCOLLDESC, $loan->LoanRemarks, $loan->LoanUPDDATETIME, $loan->LoanUpdUser,
        $loan->LoanCBUAMT, $loan->LoanSAVAMT, $loan->LoanCI, $loan->LoanXXREF_NO, $loan->LoanCRLIMIT, $loan->LoanPENGP,
        $loan->LoanPREPAIDPYMTS, $loan->LoanISDISTRIBUTEUNPAIDINT, $loan->LoanCOLLECTOR, $loan->LoanSUBTYPEID,
        $loan->LoanIsExcludeSundays, $loan->LoanIsExcludeHolidays, $loan->LoanPAMT2, $loan->LoanCOLLECTTYPE, $loan->LoanCOLLFEE,
        $loan->LoanINDUSTRY, $loan->LoanMemberRating, $loan->LoanSecurity, $loan->LoanBank);
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
        $loan = new Loan;

        $loan->LoanBR_CODE = $request->input('loanBrCode');
        $loan->LoanSLC_CODE = $request->input('loanSlcCode');
        $loan->LoanSLT_CODE = $request->input('loanSltCode');
        $loan->LoanREF_NO = $request->input('loanRefNo');
        $loan->ClientIDLoan = $request->input('clientIdLoan');
        $loan->LoanLOANCLASS = $request->input('loanLoanClass');
        $loan->LoanPURPOSE = $request->input('loanPurpose');
        $loan->LoanPAMT = $request->input('loanPamt');
        $loan->LoanSTATUS = $request->input('loanStatus');
        $loan->LoanENCUMB = $request->input('loanEncumb');
        $loan->LoanTR_DATE = $request->input('loanTrDate');
        $loan->LoanTERMS = $request->input('loanTerms');
        $loan->LoanTERM_PERD = $request->input('loanTermPerd');
        $loan->LoanPPMT_MODE = $request->input('loanPpmtMode');
        $loan->LoanPPMT_MFAC = $request->input('loanPpmtMfac');
        $loan->LoanPPMT_MOD2 = $request->input('loanPpmtMod2');
        $loan->LoanINT_RATE = $request->input('loanIntRate');
        $loan->LoanAMORTYPE = $request->input('loanAmorType');
        $loan->LoanDIMB_FREQ = $request->input('loanDimbFreq');
        $loan->LoanIPMT_MODE = $request->input('loanIpmtMode');
        $loan->LoanIPMT_MFAC = $request->input('loanIpmtMfac');
        $loan->LoanIPMT_MOD2 = $request->input('loanIpmtMod2');
        $loan->LoanPEN_RATE = $request->input('loanPenRate');
        $loan->LoanPEN_MODE = $request->input('loanPenMode');
        $loan->LoanPEN_MFAC = $request->input('loanPenMfac');
        $loan->LoanPEN_MOD2 = $request->input('loanPenMod2');
        $loan->LoanDD_FLAG = $request->input('loanDdFlag');
        $loan->LoanINT_GP = $request->input('loanIntGp');
        $loan->LoanPRIN_GP = $request->input('loanPrinGp');
        $loan->LoanFID_DATE = $request->input('loanFidDate');
        $loan->LoanFPD_DATE = $request->input('loanFpdDate');
        $loan->LoanMAT_DATE = $request->input('loanMatDate');
        $loan->LoanND_FLAG = $request->input('loanNdFlag');
        $loan->LoanMCLASS = $request->input('loanMClass');
        $loan->LoanACCTOFF = $request->input('loanAcctOff');
        $loan->LoanRESTRUCT = $request->input('loanRestRuct');
        $loan->LoanXSLT_CODE = $request->input('loanXSltCode');
        $loan->LoanXREF_NO = $request->input('loanXRefNo');
        $loan->LoanCOLLTYPE = $request->input('loanCollType');
        $loan->LoanCOLLAMT = $request->input('loanCollAmt');
        $loan->LoanCOLLDESC = $request->input('loanCollDesc');
        $loan->LoanRemarks = $request->input('loanRemarks');
        $loan->LoanUPDDATETIME = $request->input('loanUpdDateTime');
        $loan->LoanUpdUser = $request->input('loanUpdUser');
        $loan->LoanCBUAMT = $request->input('loanCbuAmt');
        $loan->LoanSAVAMT = $request->input('loanSavAmt');
        $loan->LoanCI = $request->input('loanCi');
        $loan->LoanXXREF_NO = $request->input('loanXxRefno');
        $loan->LoanCRLIMIT = $request->input('loanCrLimit');
        $loan->LoanPENGP = $request->input('loanPenGp');
        $loan->LoanPREPAIDPYMTS = $request->input('loanPrepaidPymnts');
        $loan->LoanISDISTRIBUTEUNPAIDINT = $request->input('loanIsDistributeUnpaidInt');
        $loan->LoanCOLLECTOR = $request->input('loanCollector');
        $loan->LoanSUBTYPEID = $request->input('loanSubTypeId');
        $loan->LoanIsExcludeSundays = $request->input('loanIsExcludeSundays');
        $loan->LoanIsExcludeHolidays = $request->input('loanIsExcludeHolidays');
        $loan->LoanPAMT2 = $request->input('loanPamt2');
        $loan->LoanCOLLECTTYPE = $request->input('loanCollectType');
        $loan->LoanCOLLFEE = $request->input('loanCollfee');
        $loan->LoanINDUSTRY = $request->input('loanIndustry');
        $loan->LoanMemberRating = $request->input('loanMemberRating');
        $loan->LoanSecurity = $request->input('loanSecurity');
        $loan->LoanBank = $request->input('loanBank');

        Loan::updateLoan($loan->LoanBR_CODE, $loan->LoanSLC_CODE, $loan->LoanSLT_CODE, $loan->LoanREF_NO,
        $loan->ClientIDLoan, $loan->LoanLOANCLASS, $loan->LoanPURPOSE, $loan->LoanPAMT, $loan->LoanSTATUS,
        $loan->LoanENCUMB, $loan->LoanTR_DATE, $loan->LoanTERMS, $loan->LoanTERM_PERD, $loan->LoanPPMT_MODE,
        $loan->LoanPPMT_MFAC, $loan->LoanPPMT_MOD2, $loan->LoanINT_RATE, $loan->LoanAMORTYPE, $loan->LoanDIMB_FREQ,
        $loan->LoanIPMT_MODE, $loan->LoanIPMT_MFAC, $loan->LoanIPMT_MOD2, $loan->LoanPEN_RATE, $loan->LoanPEN_MODE,
        $loan->LoanPEN_MFAC, $loan->LoanPEN_MOD2, $loan->LoanDD_FLAG, $loan->LoanINT_GP, $loan->LoanPRIN_GP,
        $loan->LoanFID_DATE, $loan->LoanFPD_DATE, $loan->LoanMAT_DATE, $loan->LoanND_FLAG, $loan->LoanMCLASS,
        $loan->LoanACCTOFF, $loan->LoanRESTRUCT, $loan->LoanXSLT_CODE, $loan->LoanXREF_NO, $loan->LoanCOLLTYPE,
        $loan->LoanCOLLAMT, $loan->LoanCOLLDESC, $loan->LoanRemarks, $loan->LoanUPDDATETIME, $loan->LoanUpdUser,
        $loan->LoanCBUAMT, $loan->LoanSAVAMT, $loan->LoanCI, $loan->LoanXXREF_NO, $loan->LoanCRLIMIT, $loan->LoanPENGP,
        $loan->LoanPREPAIDPYMTS, $loan->LoanISDISTRIBUTEUNPAIDINT, $loan->LoanCOLLECTOR, $loan->LoanSUBTYPEID,
        $loan->LoanIsExcludeSundays, $loan->LoanIsExcludeHolidays, $loan->LoanPAMT2, $loan->LoanCOLLECTTYPE, $loan->LoanCOLLFEE,
        $loan->LoanINDUSTRY, $loan->LoanMemberRating, $loan->LoanSecurity, $loan->LoanBank);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($loanBrCode, $loanSlcCode, $loanSltCode, $loanRefNo, $clientIdLoan)
    {
        Loan::deleteLoanById($loanBrCode, $loanSlcCode, $loanSltCode, $loanRefNo, $clientIdLoan);
    }
}
