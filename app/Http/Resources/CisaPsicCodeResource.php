<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CisaPsicCodeResource extends JsonResource
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
            'psicCode' => $this->PSIC_CODE,
            'psicDesc' => $this->PSIC_Desc,
            'psicBrCode' => $this->PSIC_BR_CODE,
            'psicSectorCode' => $this->PSIC_SectorCode
        ];
    }
}
