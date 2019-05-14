<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SavClassResource extends JsonResource
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
            'savClassId'=> $this->SavClassID,
            'savClassDesc'=> $this->SavClassDesc,
            'savClassSlType' => $this->SavClassSLType,
            'savClassAmount' => $this->SavClassAmount
        ];
    }
}
