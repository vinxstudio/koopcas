<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConnSumResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
    //     return parent::toArray($request);
    return [
        'connBrCode' => $this->ConnBR_CODE,
        'connId' => $this->ConnID,
        'connUserId' => $this->ConnUserID,
        'connHost' => $this->ConnHost,
        'connDate' => $this->ConnDate,
        'connTime' => $this->ConnTime,
        'connPcName' => $this->ConnPCName
    ];
    }

}
