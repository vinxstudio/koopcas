<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DueDateTypeResource extends JsonResource
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
            'dueDateTypeID' => $this->DueDateTypeID,
            'dueDateTypeDesc' => $this->DueDateTypeDesc,
            'dueDateTypeOldId' => $this->DueDateTypeOLDID
        ];
    }
}
