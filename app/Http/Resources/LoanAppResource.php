<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoanAppResource extends JsonResource
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
            'id' => $this->ID,
            'slcCode' => $this->SLC_CODE,
            'sltCode' => $this->SLT_CODE,
            'refNo' => $this->REF_NO,
            'clientId' => $this->CLIENTID,
            'statusId' => $this->STATUSID,
            'trDate' => $this->TR_DATE,
            'trTime' => $this->TR_TIME,
            'rTrDate' => $this->RTR_DATE,
            'encdBy' => $this->ENCDBY,
            'apprvDate' => $this->APPRV_DATE,
            'apprvBy' => $this->APPRVBY,
            'trCode' => $this->TR_CODE,
            'trCtlNo' => $this->TR_CTLNO,
            'npSlcCode' => $this->NPSLC_CODE,
            'npSltCode' => $this->NPSLT_CODE,
            'npRefNo' => $this->NPREF_NO,
            'npAcctCode' => $this->NPACCT_CODE,
            'deducGroup' => $this->DEDUCGROUP,
            'docNo' => $this->DOC_NO,
            'proposal' => $this->PROPOSAL,
            'ciReport' => $this->CIREPORT,
            'basisRecomm' => $this->BASISRECOMM,
            'remarks' => $this->REMARKS,
            'repayment' => $this->REPAYMENT,
        ];
    }
}
