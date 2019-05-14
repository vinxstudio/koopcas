<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransSumResource extends JsonResource
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
            'trBrCode' => $this->TR_BRCODE,
            'trYear' => $this->TR_YEAR,
            'trModule' => $this->TR_MODULE,
            'trCode' => $this->TR_CODE,
            'trCtlNo' => $this->TR_CTLNO,
            'trDocNo' => $this->TR_DOCNO,
            'invTrCtlNo' => $this->INVTR_CTLNO,
            'trDate' => $this->TR_DATE,
            'trTime' => $this->TR_TIME,
            'trClientId' => $this->TR_CLIENTID,
            'lastName' => $this->LName,
            'firstName' => $this->FName,
            'middleName' => $this->MName,
            'suffix' => $this->SName,
            'batchNo' => $this->BATCH_NO,
            'explanation' => $this->EXPLANATION,
            'clientName' => $this->CLIENTNAME,
            'andorName' => $this->ANDOR_NAME,
            'isFo' => $this->IS_FO,
            'DateTimeAdded' => $this->DATETIMEADDED,
            'cashPayment' => $this->CASHPAYMENT,
            'creditPayment' => $this->CREDITPAYMENT,
            'pointsPayment' => $this->POINTSPAYMENT,
            'transTypeDesc' => $this->TransTypeDesc,
            'transTypeModule' => $this->TransTypeModule,
            'department' => $this->ClientDEPT,
        ];
    }
}
