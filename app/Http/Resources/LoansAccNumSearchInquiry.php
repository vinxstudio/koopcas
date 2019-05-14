<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoansAccNumSearchInquiry extends JsonResource
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
        return[
            'clientId'=>$this->ClientIDLoan,
            'brCode'=>$this->LoanBR_CODE,
            'loanType'=>$this->DESCR,
            'refNo'=>$this->LoanREF_NO,
            'trDate'=>$this->TR_DATE,
            'prinAmt'=>$this->LoanPAMT,
            'slcCode'=>$this->SLC_CODE,
            'sltCode'=>$this->SLT_CODE
        ];
    }
}
