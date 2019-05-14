<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoanDeducResource extends JsonResource
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
            'loanAppId' => $this->LOANAPPID,
            'seqNo' => $this->SEQNO,
            'deducDesc' => $this->DEDUCDESC,
            'slcCode' => $this->SLC_CODE,
            'sltCode' => $this->SLT_CODE,
            'sleCode' => $this->SLE_CODE,
            'refNo' => $this->REF_NO,
            'clientId' => $this->CLIENTID,
            'acctCode' => $this->ACCT_CODE,
            'amt' => $this->AMT,
            'slBehavior' => $this->SLBEHAVIOR,
        ];
    }
}
