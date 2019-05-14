<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class ArResource extends JsonResource
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
            'arBrCode' => $this->ARBR_CODE,
            'arSlcCode' => $this->ARSLC_CODE,
            'arSltCode' => $this->ARSLT_CODE,
            'arRefNo' => $this->ARREF_NO,
            'clientIdAr' => $this->ClientIDAR,
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
            'arClass' => $this->ARCLASS,
            'arPurpose' => $this->ARPURPOSE,
            'arPamt' => $this->ARPAMT,
            'arStatus' => $this->ARSTATUS,
            'arEncumb' => $this->ARENCUMB,
            'arTrDate' => $this->ARTR_DATE,
            'arTerms' => $this->ARTERMS,
            'arTermPerd' => $this->ARTERM_PERD,
            'arPpmtMode' => $this->ARPPMT_MODE,
            'arPpmtMfac' => $this->ARPPMT_MFAC,
            'arPpmtMod2' => $this->ARPPMT_MOD2,
            'arIntRate' => $this->ARINT_RATE,
            'arAmorType' => $this->ARAMORTYPE,
            'arDimbFreq' => $this->ARDIMB_FREQ,
            'arIpmtMode' => $this->ARIPMT_MODE,
            'arIpmtMfac' => $this->ARIPMT_MFAC,
            'arIpmtMod2' => $this->ARIPMT_MOD2,
            'arPenRate' => $this->ARPEN_RATE,
            'arPenMode' => $this->ARPEN_MODE,
            'arPenMfac' => $this->ARPEN_MFAC,
            'arPenMod2' => $this->ARPEN_MOD2,
            'arDdFlag' => $this->ARDD_FLAG,
            'arIntGp' => $this->ARINT_GP,
            'arPrinGp' => $this->ARPRIN_GP,
            'arFidDate' => $this->ARFID_DATE,
            'arFpdDate' => $this->ARFPD_DATE,
            'arMatDate' => $this->ARMAT_DATE,
            'arNdFlag' => $this->ARND_FLAG,
            'arXxrefNo' => $this->ARXXREF_NO,
            'ardIssued' => $this->ARDISSUED,
            'arCrLimit' => $this->ARCRLIMIT,
            'arMClass' => $this->ARMCLASS,
            'arAcctOff' => $this->ARACCTOFF,
            'arRestRuct' => $this->ARRESTRUCT,
            'arXSltCode' => $this->ARXSLT_CODE,
            'arXRefNo' => $this->ARXREF_NO,
            'arCollType' => $this->ARCOLLTYPE,
            'arCollAmt' => $this->ARCOLLAMT,
            'arCollDesc' => $this->ARCOLLDESC,
            'arRemarks' => $this->ARRemarks,
            'arUpdDateTime' => $this->ARUPDDATETIME,
            'arUpdUser' => $this->ARUpdUser,
            'arCbuAmt' => $this->ARCBUAMT,
            'arSavAmt' => $this->ARSAVAMT,
            'arCi' => $this->ARCI,
            'arPenGp' => $this->ARPENGP,
            'arPrepaidPymts' => $this->ARPREPAIDPYMTS,
            'arIsDistributeUnpaidInt' => $this->ARISDISTRIBUTEUNPAIDINT,
            'arCollector' => $this->ARCOLLECTOR,
            'arpAmt2' => $this->ARPAMT2,
            'arCollectType' => $this->ARCOLLECTTYPE,
            'arCollFee' => $this->ARCOLLFEE,
        ];
    }
}
