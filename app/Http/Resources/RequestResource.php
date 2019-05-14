<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RequestResource extends JsonResource
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
            'id' => $this->ID,
            'reqStatus' => $this->REQ_STATUS,
            'reqCode' => $this->REQ_CODE,
            'brCode' => $this->BR_CODE,
            'clientId' => $this->CLIENTID,
            'slcCode' => $this->SLC_CODE,
            'sltCode' => $this->SLT_CODE,
            'refNo' => $this->REF_NO,
            'sleCode' => $this->SLE_CODE,
            'trDate' => $this->TR_DATE,
            'balance' => $this->BALANCE,
            'availBal' => $this->AVAIL_BAL,
            'principal' => $this->PRINCIPAL,
            'interest' => $this->INTEREST,
            'penalty' => $this->PENALTY,
            'amt' => $this->AMT,
            'errMsg' => $this->ERRMSG,
            'terminalId' => $this->TERMINALID,
            'trandTime' => $this->TRANDTIME,
            'cash' => $this->CASH,
            'coci' => $this->COCI,
            'trCtlNo' => $this->TR_CTLNO
        ];
    }
}
