<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SemaphorResource extends JsonResource
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
            'semaphorId' => $this->SemaphorID,
            'semTransactionDate' => $this->semTransactionDate,
            'semPostSlGl' => $this->semPOSTSLGL,
            'semBrCode' => $this->semBR_CODE,
            'semStartDay' => $this->semSTARTDAY,
            'semCtlNo' => $this->semCTLNO,
            'semDbVersion' => $this->semDBVersion,
            'semNetSurplus' => $this->semNETSURPLUS,
            'semUndNetSur' => $this->semUNDNETSUR,
            'semNetLoss' => $this->semNETLOSS
        ];
    }
}
