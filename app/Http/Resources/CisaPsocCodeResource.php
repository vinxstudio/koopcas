<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CisaPsocCodeResource extends JsonResource
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
            'psocCode' => $this->PSOC_Code,
            'psocDesc' => $this->PSOC_Desc,
            'psocBrCode' => $this->PSOC_BR_CODE,
            'psocDivisionCode' => $this->PSOC_DivisionCode

        ];
    }
}
