<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoanAppsDisplayResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->ID,
            'clientId' => $this->CLIENTID,
            'slcCode' => $this->SLC_CODE,
            'sltCode' => $this->SLT_CODE,
            'brCode' => $this->BR_CODE,
            'refNo' => $this->REF_NO,
            'firstName' => $this->FName,
            'lastName' => $this->LName,
            'middleName' => $this->MName,
            'status' => $this->M_DESC2,
            'docNo' => $this->DOC_NO,
            'trDate' => $this->TR_DATE,
            'loanType' => $this->SLTypeM_DESC2,
            'prinAmt' => $this->LoanPAMT,
            'apprvBy' => $this->APPRVBY,
            'ctrlNo' => $this->TR_CTLNO,
            'apprvDate' => $this->APPRV_DATE,
            'statusId' => $this->STATUSID,
            'trCode' => $this->TR_CODE,
            'trCtlNo' => $this->TR_CTLNO,
            'rtrDate' => $this->RTR_DATE,
            'deducGroup' => $this->DEDUCGROUP,
            'ciReport' => $this->CIREPORT,
            'basisRecomm' => $this->BASISRECOMM,
            'remarks' => $this->REMARKS,
            'repayment' => $this->REPAYMENT,
            'proposal' => $this->PROPOSAL,
            'npAcctCode' => $this->NPACCT_CODE,
            'npRefNo' => $this->NPREF_NO,
            'npSltCode' => $this->NPSLT_CODE,
            'npSlcCode' => $this->NPSLC_CODE,
            'matDate' => $this->LoanMAT_DATE,
            'loanTerms' => $this->LoanTERMS,
            'termDesc' => $this->TERMDESC,
            'prinPayMode' => $this->PRINPAYMODE,
            'loanIntRate' => $this->LoanINT_RATE,
            'amorType' => $this->AMORTIZATIONTYPE,
            'intPayMode' => $this->INTPAYMODE,
            'loanPenRate' => $this->LoanPEN_RATE,
            'penPayMode' => $this->PENPAYMODE
        ];
    }
}
