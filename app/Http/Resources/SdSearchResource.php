<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class SdSearchResource extends JsonResource
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
            'sdBrCode' => $this->SDBR_CODE,
            'sdSlcCode' => $this->SDSLC_CODE,
            'sdSltCode' => $this->SDSLT_CODE,
            'sdRefNo' => $this->SDREF_NO,
            'clientIdSd' => $this->ClientIDSD,
            'sdTrDate' => $this->SDTR_DATE,
            'sdMinBal' => $this->SDMIN_BAL,
        ];
    }
}
