<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WkfCaidResource extends JsonResource
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
            'brCode' => $this->BR_CODE,
            'clientId' => $this->CLIENTID,
            'clientName' => $this->CLIENTNAME,
            'slcCode' => $this->SLC_CODE,
            'sltCode' => $this->SLT_CODE,
            'refNo' => $this->REF_NO,
            'sleCode' => $this->SLE_CODE,
            'ctsNum' => $this->CTS_NUM,
            'interestRate' => $this->INTERESTRATE,
            'wtaxRate' => $this->WTAXRATE,
            'minAdb' => $this->MINADB,
            'maxAdb' => $this->MAXADB,
            'intExpGlAcct' => $this->INTEXPGLACCT,
            'wTaxPayGlAcct' => $this->WTAXPAYGLACCT,
            'accountType' => $this->ACCOUNTTYPE,
            'acctCode' => $this->ACCT_CODE,
            'balance' => $this->BALANCE,
            'adb' => $this->ADB,
            'includeTag' => $this->INCLUDETAG,
            'interestAmt' => $this->INTERESTAMT,
            'wtaxAmt' => $this->WTAXAMT,
            'dept' => $this->DEPT
        ];
    }
}
