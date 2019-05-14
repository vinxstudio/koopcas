<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class LoansSearchLoanResource extends JsonResource
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
            'loanTrDate' => $this->LoanTR_DATE,
            'loanPamt' => $this->LoanPAMT,
        ];
    }
}
