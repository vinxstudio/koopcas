<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvItemStatusResource extends JsonResource
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
            'id' => $this->ITEMSTATUSID,
            'desc1' =>$this->ITEMSTATUSDESC1,
            'desc2' =>$this->ITEMSTATUSDESC2,
            'brCode' =>$this->BR_CODE
        ];
    }
}
