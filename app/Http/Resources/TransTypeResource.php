<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransTypeResource extends JsonResource
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
            'transTypeId' => $this->TransTypeID,
            'transTypeDesc' => $this->TransTypeDesc,
            'transTypeDesc2' => $this->TransTypeDesc2,
            'transTypeModule' => $this->TransTypeModule
        ];
    }
}
