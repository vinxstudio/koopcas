<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArSearchResource extends JsonResource
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
            'arBrCode' => $this->ARBR_CODE,
            'arSlcCode' => $this->ARSLC_CODE,
            'arSltCode' => $this->ARSLT_CODE,
            'arRefNo' => $this->ARREF_NO,
            'clientIdAr' => $this->ClientIDAR, 
            'arTrDate' => $this->ARTR_DATE,
            'arPamt' => $this->ARPAMT,
            'arSlcDescr' => $this->SLClassDesc,
            'arStatus' => $this->ARSTATUS
        ];
    }
}
