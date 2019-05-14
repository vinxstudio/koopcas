<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class OslSearchResource extends JsonResource
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
            'oslBrCode' => $this->OSLBR_CODE,
            'oslSlcCode' => $this->OSLSLC_CODE,
            'oslSltCode' => $this->OSLSLT_CODE,
            'oslRefNo' => $this->OSLREF_NO,
            'clientIdOsl' => $this->ClientIDOSL,
            // 'oslPamt' => $this->OSLPAMT,
            'oslTrDate' => $this->OSLTR_DATE,
        ];
    }
}
