<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class TdResource extends JsonResource
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
            'trBrCode' => $this->TDBR_CODE,
            'tdSlcCode' => $this->TDSLC_CODE,
            'tdSltCode' => $this->TDSLT_CODE,
            'tdRefNo' => $this->TDREF_NO,
            'clientIdTd' => $this->ClientIDTD,
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
            'tdTrDate' => Carbon::parse($this->TDTR_DATE)->format('Y-m-d'),
            'tdStatus' => $this->TDSTATUS,
            'tdIntRate' => $this->TDINT_RATE,
            'tdTerms' => $this->TDTERMS,
            'tdTermPerd' => $this->TDTERM_PERD,
            'tdMatDate' => Carbon::parse($this->TDMAT_DATE)->format('Y-m-d'),
            'tdCertNum' => $this->TDCERT_NUM,
            'tdUpdDateTime' => $this->TDUPDDATETIME,
            'tdRemarks' => $this->TDREMARKS,
            'tdUpdUser' => $this->TDUpdUser,
            'tdRoSlcCode' => $this->TDRO_SLC_CODE,
            'tdRoSltCode' => $this->TDRO_SLT_CODE,
            'tdRoAcctCode' => $this->TDRO_ACCTCODE
        ];
    }
}
