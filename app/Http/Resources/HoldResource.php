<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HoldResource extends JsonResource
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
            'hBrCode' => $this->HBR_CODE,
            'hSlcCode' => $this->HSLC_CODE,
            'hSltCode' => $this->HSLT_CODE,
            'hRefNo' => $this->HREF_NO,
            'clientIdH' => $this->ClientIDH,
            'hHeldAmt' => $this->HHELD_AMT,
            'hHoldCode' => $this->HHOLD_CODE
        ];
    }
}
