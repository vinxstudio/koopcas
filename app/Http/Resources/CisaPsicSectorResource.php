<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CisaPsicSectorResource extends JsonResource
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
            'psicSecId' => $this->PSIC_SecID,
            'psicSecCode' => $this->PSIC_SecCode,
            'psicSecDesc' => $this->PSIC_SecDesc,
            'psicSecBrCode' => $this->PSIC_SecBR_CODE
        ];
    }
}
