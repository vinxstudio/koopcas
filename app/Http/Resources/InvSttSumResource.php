<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvSttSumResource extends JsonResource
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
            'trTime' => $this->TR_TIME,
            'fromLoc' => $this->FROM_LOC,
            'toLoc' => $this->TO_LOC,
            'explanation' =>$this->EXPLANATION,
            'statusId' =>$this->StatusID,
            'encdBy' =>$this->ENCDBY,
            'dateTimeAdded' =>$this->DATETIMEADDED
        ];
    }
}
