<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AttendanceResource extends JsonResource
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
            'brCode' => $this->BR_CODE,
            'clientId' => $this->CLIENTID,
            'eventId' => $this->EVENTID,
            'status' => $this->STATUS,
            'remarks' => $this->REMARKS,
            'encdBy' => $this->ENCDBY,
            'paidFlag' => $this->PAIDFLAG,
            'paidAmt' => $this->PAIDAMT,
            'updDateTime' => $this->UPDDATETIME
        ];
    }
}
