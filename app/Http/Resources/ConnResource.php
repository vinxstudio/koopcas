<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConnResource extends JsonResource
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
            'connBrCode' => $this->ConnBR_CODE,
            'connId' => $this->ConnID,
            'connDesc' => $this->ConnDesc,
            'connFlag' => $this->ConnFlag,
            'connIPAdd' => $this->ConnIPAdd,
            'connUserId' => $this->ConnUserID,
            'connDateAdded' => $this->ConnDateAdded,
            'connTimeAdded' => $this->ConnTimeAdded
        ];
    }
}
