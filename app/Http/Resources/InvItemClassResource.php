<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvItemClassResource extends JsonResource
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
            'id' => $this->ITEMCLASSID,
            'desc1' => $this->ITEMCLASSDESC1,
            'desc2' => $this->ITEMCLASSDESC2,
            'brCode' => $this->BR_CODE
        ];
    }
}
