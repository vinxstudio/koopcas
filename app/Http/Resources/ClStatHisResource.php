<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClStatHisResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request)
        return [
            'id' => $this->ID,
            'brCode' => $this->BR_CODE,
            'clientId' => $this->CLIENTID,
            'clStatId' => $this->CLSTATID,
            'trDate' => $this->TR_DATE,
            'encdBy' => $this->ENCDBY,
            'remarks' => $this->REMARKS,
            'isPrompt' => $this->ISPROMPT
        ];
    }
}
