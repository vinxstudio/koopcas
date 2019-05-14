<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CoaLoanResource extends JsonResource
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
        return[
            // 'coaLvl'=>$this->Lvl,
            'coaId'=>$this->COAID,
            'coaDesc'=>$this->COADesc,
            'coaAcctTag'=>$this->COAacct_tag,
            'coaAcctlvl'=>$this->COAacct_lvl,
            'coaAcctSum'=>$this->COAacct_sum
        ];
    }
}
