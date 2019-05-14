<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SemCondResource extends JsonResource
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
            'semCondId' => $this->SemCondID,
            'semCondBrCode' => $this->SemCondBR_CODE,
            'semCondTopic' => $this->SemCondTopic,
            'semCondDate' => $this->SemCondDate,
            'semCondHours' => $this->SemCondHours,
            'semCondFacilitator' => $this->SemCondFacilitator,
            'semCondRemarks' => $this->SemCondRemarks
        ];
    }
}
