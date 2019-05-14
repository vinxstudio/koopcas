<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvPiSumResource extends JsonResource
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
            'trCtlNo' => $this->TR_CTLNO,
            'trDocNo' => $this->TR_DOCNO,
            'trDate' => $this->TR_DATE,
            'beginDate' => $this->BEGIN_DATE,
            'trTime' => $this->TR_TIME,
            'explanation' => $this->EXPLANATION,
            'statusId' => $this->StatusID,
            'encdBy' => $this->ENCDBY,
            'dateTimeAdded' => $this->DATETIMEADDED,
            'locationId' => $this->LOCATIONID
        ];
    }
}
