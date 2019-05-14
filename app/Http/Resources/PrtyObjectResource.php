<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PrtyObjectResource extends JsonResource
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
            'id' => $this->ID,
            'descr' => $this->DESCR,
            'clientNumber' => $this->CLIENTNUMBER,
            'userLabel' => $this->USERLABEL,
            'terminalDescr' => $this->TERMINALDESCR

        ];
    }
}
