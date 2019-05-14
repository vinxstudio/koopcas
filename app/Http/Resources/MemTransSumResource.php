<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MemTransSumResource extends JsonResource
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
            'trDate' => $this->TR_DATE,
            'trTime' => $this->TR_TIME,
            'trClientId' => $this->TR_CLIENTID,
            'batchNo' => $this->BATCH_NO
        ];
    }
}
