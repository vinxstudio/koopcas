<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransAtmsResource extends JsonResource
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
            'id'=> $this->ID,
            'brCode'=> $this->BR_CODE,
            'cardNo' => $this->CARDNO,
            'seqNo' => $this->SEQNO,
            'atmTrCode' => $this->ATMTR_CODE,
            'acctNo' => $this->ACCTNO,
            'trAmt' => $this->TR_AMT,
            'termnlId' => $this->TERMNLID,
            'acctNo2' => $this->ACCTNO2,
            'destBank' => $this->DESTBANK,
            'traceNo' => $this->TRACENO,
            'processCode' => $this->PROCESSCODE,
            'srvCharge' => $this->SRVCHARGE,
            'currBal' => $this->CURRBAL,
            'availBal' => $this->AVAILBAL,
            'status' => $this->STATUS,
            'timelapsed' => $this->TIMELAPSED
        ];
    }
}
