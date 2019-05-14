<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoanAppSLRefNoResource extends JsonResource
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
            'id'=>$this->ID,
            'desc'=>$this->DESCR,
            'tr_date'=>$this->TR_DATE,
            'slcCode'=>$this->SLC_CODE,
            'sltCode'=>$this->SLT_CODE,
            'status'=>$this->STATUS
        ];
    }
}
