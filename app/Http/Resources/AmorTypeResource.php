<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AmorTypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'amorTypeId' => $this->AmorTypeID,
            'amorTypeDesc' => $this->AmorTypeDesc,
            'amorTypeOLDID' => $this->AmorTypeOLDID
        ];
    }
}
