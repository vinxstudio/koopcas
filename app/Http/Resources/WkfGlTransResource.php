<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WkfGlTransResource extends JsonResource
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
            'glTransBrCode' => $this->GLTransBR_CODE,
            'glTransAcctCode' => $this->GLTransACCT_CODE,
            'glTransTrDate' => $this->GLTransTR_DATE,
            'glTransTrCode' => $this->GLTransTR_CODE,
            'glTransDept' => $this->GLTransDEPT,
            'glTransDrAmt' => $this->GLTransDR_AMT,
            'glTransCrAmt' => $this->GLTransCR_AMT,
            'glTransDrBalB4' => $this->GLTransDR_BALB4,
            'glTransCrBalB4' => $this->GLTransCR_BALB4,
            'glTransSumBalB4' => $this->GLTransSUM_BALB4
        ];
    }
}
