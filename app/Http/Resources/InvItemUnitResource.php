<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvItemUnitResource extends JsonResource
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
            'id' => $this->ITEMUNITID,
            'desc1' => $this->ITEMUNITDESC1,
            'desc2' => $this->ITEMUNITDESC2,
            'brCode' => $this->BR_CODE
        ];
    }
}
