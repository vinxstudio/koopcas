<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TermResource extends JsonResource
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
            'termId' => $this->TermID,
            'termDesc' => $this->TermDesc,
            'termOldId' => $this->TermOLDID
        ];
    }
}
