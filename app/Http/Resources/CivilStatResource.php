<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CivilStatResource extends JsonResource
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
            'civilStatId' => $this->CivilStatID,
            'civilStatDesc' => $this->CivilStatDesc,
            'cisaCivilStatCode' => $this->CISAcivilStatCode
        ];
    }
}
