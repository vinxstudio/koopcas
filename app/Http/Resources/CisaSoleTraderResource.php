<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CisaSoleTraderResource extends JsonResource
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
            'soleTraderId' => $this->soletraderid,
            'soleTraderClientID' => $this->SoleTraderClientID,
            'soleTraderBrCode' => $this->SoleTraderBR_CODE,
            'soleTraderName' => $this->SoleTraderName,
            'soleTraderMStreetNo' => $this->SoleTraderMStreetNo,
            'soleTraderMPostalCode' => $this->SoleTraderMPostalCode,
            'soleTraderMSubd' => $this->SoleTraderMSubd,
            'soleTraderMBrgy' => $this->SoleTraderMBRGY,
            'soleTraderMCity' => $this->SoleTraderMCity,
            'soleTraderMProv' => $this->SoleTraderMProv,
            'soleTraderMHouseType' => $this->SoleTraderMHouseType,
            'soleTraderMOccupiedSince' => $this->SoleTraderMOccupiedSince,
            'soleTraderMIdType' => $this->SoleTraderMIDtype,
            'soleTraderMIdNum' => $this->SoleTraderMIDnum,
            'soleTraderMContactType' => $this->SoleTraderMCntctType,
            'soleTraderMContactValue' => $this->SoleTraderMCntctValue,
            'soleTraderAStreetNo' => $this->SoleTraderAStreetNo,
            'soleTraderAPostalCode' => $this->SoleTraderAPostalCode,
            'soleTraderASubd' => $this->SoleTraderASubd,
            'soleTraderABrgy' => $this->SoleTraderABRGY,
            'soleTraderACity' => $this->SoleTraderACity,
            'soleTraderAProv' => $this->SoleTraderAProv,
            'soleTraderAHouseType' => $this->SoleTraderAHouseType,
            'soleTraderAOccupiedSince' => $this->SoleTraderAOccupiedSince,
            'soleTraderAIdType' => $this->SoleTraderAIDtype,
            'soleTraderAIdNum' => $this->SoleTraderAIDnum,
            'soleTraderAContactType' => $this->SoleTraderACntctType,
            'soleTraderAContactValue' => $this->SoleTraderACntctValue
        ];
    }
}
