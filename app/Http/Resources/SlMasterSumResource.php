<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SlMasterSumResource extends JsonResource
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
            'mBrCode' => $this->MBR_CODE,
            'mSlcCode' => $this->MSLC_CODE,
            'mSltCode' => $this->MSLT_CODE,
            'mRefNo' => $this->MREF_NO,
            'mClientId' => $this->MCLIENTID
        ];
    }
}
