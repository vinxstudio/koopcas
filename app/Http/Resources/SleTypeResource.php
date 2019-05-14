<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SleTypeResource extends JsonResource
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
            'sleTypeCode' => $this->SLE_TypeCode,
            'sleTypeDesc' => $this->SLE_TypeDesc,
            'sleTypeDesc2' => $this->SLE_TypeDesc2,
            'sleTypeActive' => $this->SLE_TypeActive,
            'sleTypeWithCts' => $this->SLE_TypeWithCTS,
            'sleTypeOldId' => $this->SLE_TypeOLDID
        ];
    }
}
