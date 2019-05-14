<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GlAcctTypeResource extends JsonResource
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
            'glAcctTypeId' => $this->GLAcctTypeID,
            'glAcctTypeDesc' => $this->GLAcctTypeDesc,
            'remarks' => $this->Remarks
        ];
    }
}
