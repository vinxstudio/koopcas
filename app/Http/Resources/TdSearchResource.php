<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class TdSearchResource extends JsonResource
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
            'tdBrCode' => $this->TDBR_CODE,
            'tdSlcCode' => $this->TDSLC_CODE,
            'tdSltCode' => $this->TDSLT_CODE,
            'tdRefNo' => $this->TDREF_NO,
            'clientIdTd' => $this->ClientIDTD,
            'tdTrDate' => $this->TDTR_DATE,
            // 'tdIntRate' => $this->TDINT_RATE,
        ];
    }
}
