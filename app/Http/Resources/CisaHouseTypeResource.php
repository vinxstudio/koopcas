<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CisaHouseTypeResource extends JsonResource
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
            'houseTypeId' => $this->HouseTypeID,
            'houseTypeDesc' => $this->HouseTypeDesc
        ];
    }
}
