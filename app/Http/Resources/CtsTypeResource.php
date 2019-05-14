<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CtsTypeResource extends JsonResource
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
            'ctsTypeCode' => $this->CTS_TypeCode,
            'ctsTypeDesc' => $this->CTS_TypeDesc,
            'ctsTypeActive' => $this->CTS_TypeActive,
            'ctsTypeOldId' => $this->CTS_TypeOLDID
        ];
    }
}
