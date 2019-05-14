<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BalTypeResource extends JsonResource
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
            'balTypeId' => $this->BalTypeID,
            'balTypeDesc' => $this->BalTypeDesc,
            'balTypeRemarks' => $this->BalTypeRemarks,
            'balTypeIsDebit' => $this->BalTypeIsDebit,
            'balTypeCutDate' => $this->BalTypeCutDate
        ];
    }
}
