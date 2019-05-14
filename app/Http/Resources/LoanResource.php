<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class LoanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'loanBrCode' => $this->LoanBR_CODE,
            'loanSlcCode' => $this->LoanSLC_CODE,
            'loanSltCode' => $this->LoanSLT_CODE,
            'loanRefNo' => $this->LoanREF_NO,
            'clientIdLoan' => $this->ClientIDLoan,
            'lastName' => $this->LName,
            'firstName' => $this->FName,
            'middleName' => $this->MName,
            'suffix' => $this->SName,
            'acctType' => $this->AccountType,
            'jointType' => $this->JointType,
            'accountStatus' => $this->AccountStatus,
            'clientType' => $this->ClientType,
            'accountName' => $this->AccountName,
            'dateOpened' => Carbon::parse($this->DateOpened)->format('Y-m-d'),
            'loanClass' => $this->LoanLOANCLASS,
            'loanPurpose' => $this->LoanPURPOSE,
            'loanPurposeDesc' => $this->LoanPurposeDesc,
            'loanPamt' => $this->LoanPAMT,
            'loanStatus' => $this->LoanSTATUS,
            'loanEncumb' => $this->LoanENCUMB,
            'loanTrDate' => $this->LoanTR_DATE,
            'loanTerms' => $this->LoanTERMS,
            'loanTermPerd' => $this->LoanTERM_PERD,
            'loanPpmtMode' => $this->LoanPPMT_MODE,
            'loanPpmtMfac' => $this->LoanPPMT_MFAC,
            'loanPpmtMod2' => $this->LoanPPMT_MOD2,
            'loanIntRate' => $this->LoanINT_RATE,
            'loanAmorType' => $this->LoanAMORTYPE,
            'loanDimbFreq' => $this->LoanDIMB_FREQ,
            'loanIpmtMode' => $this->LoanIPMT_MODE,
            'loanIpmtMfac' => $this->LoanIPMT_MFAC,
            'loanIpmtMod2' => $this->LoanIPMT_MOD2,
            'loanPenRate' => $this->LoanPEN_RATE,
            'loanPenMode' => $this->LoanPEN_MODE,
            'loanPenMfac' => $this->LoanPEN_MFAC,
            'loanPenMod2' => $this->LoanPEN_MOD2,
            'loanDdFlag' => $this->LoanDD_FLAG,
            'loanIntGp' => $this->LoanINT_GP,
            'loanPrinGp' => $this->LoanPRIN_GP,
            'loanFidDate' => $this->LoanFID_DATE,
            'loanFpdDate' => $this->LoanFPD_DATE,
            'loanMatDate' => $this->LoanMAT_DATE,
            'loanNdFlag' => $this->LoanND_FLAG,
            'loanMClass' => $this->LoanMCLASS,
            'loanAcctOff' => $this->LoanACCTOFF,
            'loanRestRuct' => $this->LoanRESTRUCT,
            'loanXSltCode' => $this->LoanXSLT_CODE,
            'loanXRefNo' => $this->LoanXREF_NO,
            'loanCollType' => $this->LoanCOLLTYPE,
            'loanCollAmt' => $this->LoanCOLLAMT,
            'loanCollDesc' => $this->LoanCOLLDESC,
            'loanRemarks' => $this->LoanRemarks,
            'loanUpdDateTime' => $this->LoanUPDDATETIME,
            'loanUpdUser' => $this->LoanUpdUser,
            'loanCbuAmt' => $this->LoanCBUAMT,
            'loanSavAmt' => $this->LoanSAVAMT,
            'loanCi' => $this->LoanCI,
            'loanXxRefno' => $this->LoanXXREF_NO,
            'loanCrLimit' => $this->LoanCRLIMIT,
            'loanPenGp' => $this->LoanPENGP,
            'loanPrepaidPymnts' => $this->LoanPREPAIDPYMTS,
            'loanIsDistributeUnpaidInt' => $this->LoanISDISTRIBUTEUNPAIDINT,
            'loanCollector' => $this->LoanCOLLECTOR,
            'loanSubTypeId' => $this->LoanSUBTYPEID,
            'loanIsExcludeSundays' => $this->LoanIsExcludeSundays,
            'loanIsExcludeHolidays' => $this->LoanIsExcludeHolidays,
            'loanPamt2' => $this->LoanPAMT2,
            'loanCollectType' => $this->LoanCOLLECTTYPE,
            'loanCollfee' => $this->LoanCOLLFEE,
            'loanIndustry' => $this->LoanINDUSTRY,
            'loanMemberRating' => $this->LoanMemberRating,
            'loanSecurity' => $this->LoanSecurity,
            'loanBank' => $this->LoanBank,
            'loanSlcDescr' => $this->SLClassDesc
        ];
    }
}
