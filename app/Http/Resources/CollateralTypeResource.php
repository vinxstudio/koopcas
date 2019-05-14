<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CollateralTypeResource extends JsonResource
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
            'collateralType' => $this->CollateralTypeID,
            'collateralTypeDesc' => $this->CollateralTypeDesc,
            'collateralTypeOldId' => $this->CollateralTypeOLDID
        ];
    }
}
