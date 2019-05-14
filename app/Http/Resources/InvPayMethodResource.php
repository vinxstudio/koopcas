<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvPayMethodResource extends JsonResource
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
            'desc1' => $this->DESC1,
            'desc2' => $this->DESC2,
            'brCode' => $this->BR_CODE,
            'trCode' => $this->TR_CODE,
            'slcCode' => $this->SLC_CODE,
            'sltCode' => $this->SLT_CODE,
            'coaId' => $this->COAID,
            'isLocked' => $this->IsLocked,
            'isNewSlOnly' => $this->IsNEWSLOnly,
            'isMustHaveSl' => $this->IsMUSTHaveSL,
            'requestClientId' => $this->RequestCLIENTID
        ];
    }
}
