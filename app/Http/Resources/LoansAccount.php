<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoansAccount extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return[
            'brCode'=>$this->LoanBR_CODE,
	        'slcCode'=>$this->LoanSLC_CODE,
	        'sltCode'=>$this->LoanSLT_CODE,
	        'refNo'=>$this->LoanREF_NO,
            'clientId'=>$this->ClientIDLoan,
            'trDate'=>$this->LoanTR_DATE,
            'loanType'=>$this->LOANTYPE,
            'prinAmt'=>$this->LoanPAMT,
            'matDate'=>$this->LoanMAT_DATE,
            'loanTerms'=>$this->LoanTERMS,
            'termDesc'=>$this->TERMDESC,
            'prinPayMode'=>$this->PRINPAYMODE,
            'loanIntRate'=>$this->LoanINT_RATE,
            'amorType'=>$this->AMORTIZATIONTYPE,
            'intPayMode'=>$this->INTPAYMODE,
            'loanPenRate'=>$this->LoanPEN_RATE,
            'penPayMode'=>$this->PENPAYMODE
        ];
    }
}
