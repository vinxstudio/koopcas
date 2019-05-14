<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ActivityListResource extends JsonResource
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
            'Id' => $this->ID,
            'mDesc' => $this->M_DESC,
            'mDesc2' => $this->M_DESC2
       ];

    }
}
