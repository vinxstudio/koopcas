<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class ApResource extends JsonResource
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
            'apBrCode' => $this->APBR_CODE,
            'apSlcCode' => $this->APSLC_CODE,
            'apSltCode' => $this->APSLT_CODE,
            'apRefNo' => $this->APREF_NO,
            'clientIdAp' => $this->ClientIDAP,
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
            'apPamt' => $this->APPAMT,
            'apStatus' => $this->APSTATUS,
            'apTrDate' => Carbon::parse($this->APTR_DATE)->format('Y-m-d'),
            'apTerms' => $this->APTERMS,
            'apTermPerd' => $this->APTERM_PERD,
            'apPppmtMode' => $this->APPPMT_MODE,
            'apPppmtMfac' => $this->APPPMT_MFAC,
            'apPppmtMod2' => $this->APPPMT_MOD2,
            'apDdFlag' => $this->APDD_FLAG,
            'apFpdDate' => Carbon::parse($this->APFPD_DATE)->format('Y-m-d'),
            'apMatDate' => Carbon::parse($this->APMAT_DATE)->format('Y-m-d'),
            'apAmortzn' => $this->APAMORTZN,
            'apRemarks' => $this->APRemarks,
            'apUpdDateTime' => $this->APUPDDATETIME,
            'apUpdUser' => $this->APUpdUser,
            'aplSlcCode' => $this->APLSLC_CODE,
            'aplSltCode' => $this->APLSLT_CODE,
            'aplRef_No' => $this->APLREF_NO
        ];
    }
}
