<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WkfPifResource extends JsonResource
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
            'slcCode' => $this->SLC_CODE,
            'sltCode' => $this->SLT_CODE,
            'refNo' => $this->REF_NO,
            'tdDate' => $this->TD_DATE,
            'trCode' => $this->TR_CODE,
            'trCtlNo' => $this->TR_CTLNO,
            'trAmt' => $this->TR_AMT,
            'sleCode' => $this->SLE_CODE,
            'adjFlag' => $this->ADJ_FLAG,
            'prinBal' => $this->PRIN_BAL,
            'aiNDays' => $this->AI_NDAYS,
            'intEarned' => $this->INTEARNED,
            'accumIe' => $this->ACCUM_IE,
            'accumAir' => $this->ACCUM_AIR,
            'accumAip' => $this->ACCUM_AIP,
            'intPaid' => $this->INT_PAID,
            'accumUid' => $this->ACCUM_UID,
            'accumUia' => $this->ACCUM_UIA,
            'prinDue' => $this->PRIN_DUE,
            'intDue' => $this->INT_DUE,
            'sbBal' => $this->SB_BAL,
            'delqPrin' => $this->DELQ_PRIN,
            'penFlag' => $this->PEN_FLAG,
            'dbFlag' => $this->DB_FLAG,
            'penDue' => $this->PEN_DUE,
            'accumPen' => $this->ACCUM_PEN,
            'penPaid' => $this->PEN_PAID,
            'balBase' => $this->BalBase,
            'servFee' => $this->Serv_Fee,
            'seqNo' => $this->SEQNO,
            'nDaysPastDue' => $this->NDAYS_PASTDUE,
            'nDelAmort' => $this->NDEL_AMORT
            
        ];
    }
}
