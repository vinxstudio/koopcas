<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvCommonNameResource extends JsonResource
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
            'id' => $this->COMMONNAMEID,
            'desc1' => $this->COMMONNAMEDESC1,
            'desc2' => $this->COMMONNAMEDESC2,
            'brCode' => $this->BR_CODE
        ];
    }
}
