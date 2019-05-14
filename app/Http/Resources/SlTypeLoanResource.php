<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SlTypeLoanResource extends JsonResource
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
            'sltCode'=>$this->SLT_CODE,
            'slDesc'=>$this->SLDESCR,
            'acctCode'=>$this->ACCT_CODE,
            'coaDesc'=>$this->COADESCR
        ];
    }
}
