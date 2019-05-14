<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SemAttResource extends JsonResource
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
            'semAttId' => $this->SemAttID,
            'semAttBrCode' => $this->SemAttBR_CODE,
            'clientIdSa' => $this->ClientIDSA,
            'semCondIdSa' => $this->SemCondIDSA
        ];
    }
}
