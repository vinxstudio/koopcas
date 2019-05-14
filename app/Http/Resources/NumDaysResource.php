<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NumDaysResource extends JsonResource
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
            'numDaysId' => $this->NumDaysID,
            'numDaysDesc' => $this->NumDaysDesc,
            'numDaysOldId' => $this->NumDaysOLDID
        ];
    }
}
