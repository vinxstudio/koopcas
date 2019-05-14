<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AttEventsResource extends JsonResource
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
            'id' => $this->ID,
            'brCode'=> $this->BR_CODE,
            'desc1' => $this->DESC1,
            'trDate' => $this->TR_DATE,
            'location' => $this->LOCATION,
            'requireFp' => $this->REQUIREFP,
            'isClosed' => $this->ISCLOSED,
            'remarks' => $this->Remarks,
            'paidAmt' => $this->PAIDAMT
        ];
    }
}
