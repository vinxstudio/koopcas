<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CisaPsocSectorResource extends JsonResource
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
            'psocSecCode' => $this->PSOC_SecCode,
            'psocSecDesc' => $this->PSOC_SecDesc,
            'psocSecBrCode' => $this->PSOC_SecBR_CODe
        ];
    }
}
