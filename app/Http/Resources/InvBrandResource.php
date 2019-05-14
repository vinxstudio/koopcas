<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvBrandResource extends JsonResource
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
            'id' => $this->BRANDID,
            'desc1' => $this->BRANDDESC1,
            'desc2' => $this->BRANDDESC2,
            'brCode' => $this->BR_CODE
        ];
    }
}
