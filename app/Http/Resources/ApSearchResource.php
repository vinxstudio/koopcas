<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class ApSearchResource extends JsonResource
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
            'apBrCode' => $this->APBR_CODE,
            'apSlcCode' => $this->APSLC_CODE,
            'apSltCode' => $this->APSLT_CODE,
            'apRefNo' => $this->APREF_NO,
            'clientIdAp' => $this->ClientIDAP,
            // 'apPamt' => $this->APPAMT,
            'apTrDate' => $this->APTR_DATE,
        ];
    }
}
