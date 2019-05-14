<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChkTypeResource extends JsonResource
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
            'chkTypeId' => $this->ChkTypeID,
            'chkTypeDesc' => $this->ChkTypeDesc,
            'chkTypeDesc2' => $this->ChkTypeDesc2,
            'shortCutKey' => $this->ShortCutKey
        ];
    }
}
