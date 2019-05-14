<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SlgClassResource extends JsonResource
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
            'slgClassId' => $this->SLG_ClassID,
            'slgClassDesc' => $this->SLG_ClassDesc,
            'slgClassActive' => $this->SLG_ClassActive
        ];
    }
}
