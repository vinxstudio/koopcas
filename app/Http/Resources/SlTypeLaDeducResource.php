<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SlTypeLaDeducResource extends JsonResource
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
            'slcCode' => $this->SLC_CODE,
            'sltCode' => $this->SLT_CODE,
            'seqNo' => $this->SEQNO,
            'deducDesc' => $this->DEDUCDESC,
            'laSlcCode' => $this->LASLC_CODE,
            'laSltCode' => $this->LASLT_CODE,
            'laSleCode' => $this->LASLE_CODE,
            'laAcctCode' => $this->LAACCT_CODE,
            'laFormula' => $this->LAFORMULA
        ];
    }
}
