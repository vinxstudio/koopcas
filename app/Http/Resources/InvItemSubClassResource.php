<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvItemSubClassResource extends JsonResource
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
            'id' => $this->ITEMSUBCLASSID,
            'desc1' => $this->ITEMSUBCLASSDESC1,
            'desc2' => $this->ITEMSUBCLASSDESC2,
            'brCode' => $this->BR_CODE
        ];
    }
}
