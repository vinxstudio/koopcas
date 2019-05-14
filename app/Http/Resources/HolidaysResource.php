<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HolidaysResource extends JsonResource
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
            'brCode' => $this->BR_CODE,
            'trDate' => $this->TR_DATE,
            'desc1' => $this->DESC1,
            'remarks' => $this->REMARKS
        ];
    }
}
