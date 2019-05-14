<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BorrowerClassResource extends JsonResource
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
            'borrowerClassId' => $this->BorrowerClassID,
            'borrowerClassDesc' => $this->BorrowerClassDesc,
            'borrowerClassOldId' => $this->BorrowerClassOLDID
        ];
    }
}
