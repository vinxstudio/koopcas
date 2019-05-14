<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CisaSlTypeResource extends JsonResource
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
            'cisaSlTypeId' => $this->CISA_SLTypeID,
            'cisaSlTypeDesc' => $this->CISA_SLTypeDesc,
            'cisaSlTypeBrCode' => $this->CISA_SLTypeBRCODE
        ];
    }
}
