<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class PersonalRefResource extends JsonResource
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
            'pRefId' => $this->PRefID,
            'pRefBrCode' => $this->PRefBR_CODE,
            'clientIdPRef' => $this->ClientIDPRef,
            'pRefName' => $this->PRefName,
            'pRefAddress' => $this->PRefAddress,
            'pRefTelNum' => $this->PRefTelNum,
            'pRefRelation' => $this->PRefRelation,
            'pRefRemarks' => $this->PRefRemarks,
            'pRefDateTimeAdded' => Carbon::parse($this->PRefDateTimeAdded)->format('Y-m-d')
        ];
    }
}
