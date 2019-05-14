<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvPidtlResource extends JsonResource
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
            'seqNo' => $this->SEQNO,
            'itemId' => $this->ITEMID,
            'qty' => $this->QTY,
            'piCount' => $this->PICOUNT
        ];
    }
}
