<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GlControlResource extends JsonResource
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
            'glControlBrCode' => $this->GLControlBR_CODE,
            'glControlSlcCode' => $this->GLControlSLC_CODE,
            'glControlSltCode' => $this->GLControlSLT_CODE,
            'glControlSleCode' => $this->GLControlSLE_CODE,
            'glControlCtsNum' => $this->GLControlCTS_NUM,
            'glControlAcctCode' => $this->GLControlACCT_CODE,
            'remarks' => $this->Remarks,
            'balType' => $this->BAL_TYPE
        ];
    }
}
