<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CisaPsocDivResource extends JsonResource
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
            'psocDivCode' => $this->PSOC_DivCode,
            'psocDivDesc' => $this->PSOC_DivDesc,
            'psocDivBrCode' => $this->PSOC_DivBRCODE,
            'psocSectorCode' => $this->PSOC_SectorCODE
        ];
    }
}
