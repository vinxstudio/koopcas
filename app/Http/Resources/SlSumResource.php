<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SlSumResource extends JsonResource
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
            'slBrCode' => $this->SL_BRCODE,
            'slClientId' => $this->SL_CLIENTID,
            'slcCode' => $this->SLC_CODE,
            'sltCode' => $this->SLT_CODE,
            'refNo' => $this->REF_NO,
            'sleCode' => $this->SLE_CODE,
            'trDate' => $this->TR_DATE,
            'transferDate' => $this->TRANSFERDATE
        ];
    }
}
