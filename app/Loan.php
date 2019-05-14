<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Loan extends Model
{

    public static function getLoanById($loanBrCode, $loanSlcCode, $loanSltCode, $loanRefNo, $clientIdLoan)
    {
        return DB::table('loan as l')
                    ->join('client as c', function($join){
                        $join->on('l.ClientIDLoan', '=', 'c.ClientID');
                    })
                    ->join('clienttype as ct', function($join){
                        $join->on('c.ClientType', '=', 'ct.ClientTypeID');
                    })
                    ->join('acctstat as as', function($join){
                        $join->on('c.AccountStatus', '=', 'as.AcctStatID');
                    })
                    ->join('loanpurpose as lp', function($join){
                        $join->on('l.LoanPURPOSE', '=', 'lp.LoanPurposeID');
                    })
                    ->where('l.LoanBR_CODE', '=', $loanBrCode)
                    ->where('l.LoanSLC_CODE', '=', $loanSlcCode)
                    ->where('l.LoanSLT_CODE', '=', $loanSltCode)
                    ->where('l.LoanREF_NO', '=', $loanRefNo)
                    ->where('l.ClientIDLoan', '=', $clientIdLoan)
                    ->get();
    }

    public static function getAllLoanById($clientIdLoan)
    {
        return DB::table('loan as l')
                    ->join('client as c', function($join){
                        $join->on('l.ClientIDLoan', '=', 'c.ClientID');
                    })
                    ->join('clienttype as ct', function($join){
                        $join->on('c.ClientType', '=', 'ct.ClientTypeID');
                    })
                    ->join('acctstat as as', function($join){
                        $join->on('c.AccountStatus', '=', 'as.AcctStatID');
                    })
                    ->join('loanpurpose as lp', function($join){
                        $join->on('l.LoanPURPOSE', '=', 'lp.LoanPurposeID');
                    })
                    ->join('slclass as slc',function($join){
                        $join->on('slc.SLClassID','=','l.LoanSLC_CODE');
                    })
                    ->where('l.ClientIDLoan', '=', $clientIdLoan)
                    ->get();
    }

    public static function insertLoan($loanBrCode, $loanSlcCode, $loanSltCode, $loanRefNo, $clientIdLoan, $loanLoanClass,
    $loanPurpose, $loanPamt, $loanStatus, $loanEncumb, $loanTrDate, $loanTerms, $loanTermPerd, $loanPpmtMode, $loanPpmtMfac,
    $loanPpmtMod2, $loanIntRate, $loanAmorType, $loanDimbFreq, $loanIpmtMode, $loanIpmtMfac, $loanIpmtMod2, $loanPenRate,
    $loanPenMode, $loanPenMfac, $loanPenMod2, $loanDdFlag, $loanIntGp, $loanPrinGp, $loanFidDate, $loanFpdDate, $loanMatDate,
    $loanNdFlag, $loanMClass, $loanAcctOff, $loanRestRuct, $loanXSltCode, $loanXRefNo, $loanCollType, $loanCollAmt, $loanCollDesc,
    $loanRemarks, $loanUpdDateTime, $loanUpdUser, $loanCbuAmt, $loanSavAmt, $loanCi, $loanXxRefno, $loanCrLimit, $loanPenGp, $loanPrepaidPymnts,
    $loanIsDistributeUnpaidInt, $loanCollector, $loanSubTypeId, $loanIsExcludeSundays, $loanIsExcludeHolidays, $loanPamt2, $loanCollectType, $loanCollfee,
    $loanIndustry, $loanMemberRating, $loanSecurity, $loanBank)
    {
        return DB::table('loan')->insert(
            [
            'LoanBR_CODE' => $loanBrCode,
            'LoanSLC_CODE' => $loanSlcCode,
            'LoanSLT_CODE' => $loanSltCode,
            'LoanREF_NO' => $loanRefNo,
            'ClientIDLoan' => $clientIdLoan,
            'LoanLOANCLASS' => $loanLoanClass,
            'LoanPURPOSE' => $loanPurpose,
            'LoanPAMT' => $loanPamt,
            'LoanSTATUS' => $loanStatus,
            'LoanENCUMB' => $loanEncumb,
            'LoanTR_DATE' => $loanTrDate,
            'LoanTERMS' => $loanTerms,
            'LoanTERM_PERD' => $loanTermPerd,
            'LoanPPMT_MODE' => $loanPpmtMode,
            'LoanPPMT_MFAC' => $loanPpmtMfac,
            'LoanPPMT_MOD2' => $loanPpmtMod2,
            'LoanINT_RATE' => $loanIntRate,
            'LoanAMORTYPE' => $loanAmorType,
            'LoanDIMB_FREQ' => $loanDimbFreq,
            'LoanIPMT_MODE' => $loanIpmtMode,
            'LoanIPMT_MFAC' => $loanIpmtMfac,
            'LoanIPMT_MOD2' => $loanIpmtMod2,
            'LoanPEN_RATE' => $loanPenRate,
            'LoanPEN_MODE' => $loanPenMode,
            'LoanPEN_MFAC' => $loanPenMfac,
            'LoanPEN_MOD2' => $loanPenMod2,
            'LoanDD_FLAG' => $loanDdFlag,
            'LoanINT_GP' => $loanIntGp,
            'LoanPRIN_GP' => $loanPrinGp,
            'LoanFID_DATE' => $loanFidDate,
            'LoanFPD_DATE' => $loanFpdDate,
            'LoanMAT_DATE' => $loanMatDate,
            'LoanND_FLAG' => $loanNdFlag,
            'LoanMCLASS' => $loanMClass,
            'LoanACCTOFF' => $loanAcctOff,
            'LoanRESTRUCT' => $loanRestRuct,
            'LoanXSLT_CODE' => $loanXSltCode,
            'LoanXREF_NO' => $loanXRefNo,
            'LoanCOLLTYPE' => $loanCollType,
            'LoanCOLLAMT' => $loanCollAmt,
            'LoanCOLLDESC' => $loanCollDesc,
            'LoanRemarks' => $loanRemarks,
            'LoanUPDDATETIME' => $loanUpdDateTime,
            'LoanUpdUser' => $loanUpdUser,
            'LoanCBUAMT' => $loanCbuAmt,
            'LoanSAVAMT' => $loanSavAmt,
            'LoanCI' => $loanCi,
            'LoanXXREF_NO' => $loanXxRefno,
            'LoanCRLIMIT' => $loanCrLimit,
            'LoanPENGP' => $loanPenGp,
            'LoanPREPAIDPYMTS' => $loanPrepaidPymnts,
            'LoanISDISTRIBUTEUNPAIDINT' => $loanIsDistributeUnpaidInt,
            'LoanCOLLECTOR' => $loanCollector,
            'LoanSUBTYPEID' => $loanSubTypeId,
            'LoanIsExcludeSundays' => $loanIsExcludeSundays,
            'LoanIsExcludeHolidays' => $loanIsExcludeHolidays,
            'LoanPAMT2' => $loanPamt2,
            'LoanCOLLECTTYPE' => $loanCollectType,
            'LoanCOLLFEE' => $loanCollfee,
            'LoanINDUSTRY' => $loanIndustry,
            'LoanMemberRating' => $loanMemberRating,
            'LoanSecurity' => $loanSecurity,
            'LoanBank' => $loanBank
            ]
        );
    }

    public static function updateLoan($loanBrCode, $loanSlcCode, $loanSltCode, $loanRefNo, $clientIdLoan, $loanLoanClass,
    $loanPurpose, $loanPamt, $loanStatus, $loanEncumb, $loanTrDate, $loanTerms, $loanTermPerd, $loanPpmtMode, $loanPpmtMfac,
    $loanPpmtMod2, $loanIntRate, $loanAmorType, $loanDimbFreq, $loanIpmtMode, $loanIpmtMfac, $loanIpmtMod2, $loanPenRate,
    $loanPenMode, $loanPenMfac, $loanPenMod2, $loanDdFlag, $loanIntGp, $loanPrinGp, $loanFidDate, $loanFpdDate, $loanMatDate,
    $loanNdFlag, $loanMClass, $loanAcctOff, $loanRestRuct, $loanXSltCode, $loanXRefNo, $loanCollType, $loanCollAmt, $loanCollDesc,
    $loanRemarks, $loanUpdDateTime, $loanUpdUser, $loanCbuAmt, $loanSavAmt, $loanCi, $loanXxRefno, $loanCrLimit, $loanPenGp, $loanPrepaidPymnts,
    $loanIsDistributeUnpaidInt, $loanCollector, $loanSubTypeId, $loanIsExcludeSundays, $loanIsExcludeHolidays, $loanPamt2, $loanCollectType, $loanCollfee,
    $loanIndustry, $loanMemberRating, $loanSecurity, $loanBank)
    {
        return DB::table('loan')->where('LoanBR_CODE', $loanBrCode)->where('LoanSLC_CODE', $loanSlcCode)
                    ->where('LoanSLT_CODE', $loanSltCode)->where('LoanREF_NO', $loanRefNo)
                    ->where('ClientIDLoan', $clientIdLoan)->update(
                    [
                        'LoanLOANCLASS' => $loanLoanClass,
                        'LoanPURPOSE' => $loanPurpose,
                        'LoanPAMT' => $loanPamt,
                        'LoanSTATUS' => $loanStatus,
                        'LoanENCUMB' => $loanEncumb,
                        'LoanTR_DATE' => $loanTrDate,
                        'LoanTERMS' => $loanTerms,
                        'LoanTERM_PERD' => $loanTermPerd,
                        'LoanPPMT_MODE' => $loanPpmtMode,
                        'LoanPPMT_MFAC' => $loanPpmtMfac,
                        'LoanPPMT_MOD2' => $loanPpmtMod2,
                        'LoanINT_RATE' => $loanIntRate,
                        'LoanAMORTYPE' => $loanAmorType,
                        'LoanDIMB_FREQ' => $loanDimbFreq,
                        'LoanIPMT_MODE' => $loanIpmtMode,
                        'LoanIPMT_MFAC' => $loanIpmtMfac,
                        'LoanIPMT_MOD2' => $loanIpmtMod2,
                        'LoanPEN_RATE' => $loanPenRate,
                        'LoanPEN_MODE' => $loanPenMode,
                        'LoanPEN_MFAC' => $loanPenMfac,
                        'LoanPEN_MOD2' => $loanPenMod2,
                        'LoanDD_FLAG' => $loanDdFlag,
                        'LoanINT_GP' => $loanIntGp,
                        'LoanPRIN_GP' => $loanPrinGp,
                        'LoanFID_DATE' => $loanFidDate,
                        'LoanFPD_DATE' => $loanFpdDate,
                        'LoanMAT_DATE' => $loanMatDate,
                        'LoanND_FLAG' => $loanNdFlag,
                        'LoanMCLASS' => $loanMClass,
                        'LoanACCTOFF' => $loanAcctOff,
                        'LoanRESTRUCT' => $loanRestRuct,
                        'LoanXSLT_CODE' => $loanXSltCode,
                        'LoanXREF_NO' => $loanXRefNo,
                        'LoanCOLLTYPE' => $loanCollType,
                        'LoanCOLLAMT' => $loanCollAmt,
                        'LoanCOLLDESC' => $loanCollDesc,
                        'LoanRemarks' => $loanRemarks,
                        'LoanUPDDATETIME' => $loanUpdDateTime,
                        'LoanUpdUser' => $loanUpdUser,
                        'LoanCBUAMT' => $loanCbuAmt,
                        'LoanSAVAMT' => $loanSavAmt,
                        'LoanCI' => $loanCi,
                        'LoanXXREF_NO' => $loanXxRefno,
                        'LoanCRLIMIT' => $loanCrLimit,
                        'LoanPENGP' => $loanPenGp,
                        'LoanPREPAIDPYMTS' => $loanPrepaidPymnts,
                        'LoanISDISTRIBUTEUNPAIDINT' => $loanIsDistributeUnpaidInt,
                        'LoanCOLLECTOR' => $loanCollector,
                        'LoanSUBTYPEID' => $loanSubTypeId,
                        'LoanIsExcludeSundays' => $loanIsExcludeSundays,
                        'LoanIsExcludeHolidays' => $loanIsExcludeHolidays,
                        'LoanPAMT2' => $loanPamt2,
                        'LoanCOLLECTTYPE' => $loanCollectType,
                        'LoanCOLLFEE' => $loanCollfee,
                        'LoanINDUSTRY' => $loanIndustry,
                        'LoanMemberRating' => $loanMemberRating,
                        'LoanSecurity' => $loanSecurity,
                        'LoanBank' => $loanBank
                    ]
        );
    }

    public static function deleteLoanById($loanBrCode, $loanSlcCode, $loanSltCode, $loanRefNo, $clientIdLoan)
    {
        return DB::table('loan')->where('LoanBR_CODE', '=', $loanBrCode)->where('LoanSLC_CODE', '=', $loanSlcCode)
                                ->where('LoanSLT_CODE', '=', $loanSltCode)->where('LoanREF_NO', '=', $loanRefNo)
                                ->where('ClientIDLoan', '=', $clientIdLoan)->delete();
    }
}
