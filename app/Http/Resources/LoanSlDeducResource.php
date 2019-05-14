<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoanSlDeducResource extends JsonResource
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
            'id' => $this->ID,
            'brCode' => $this->BR_CODE,
            'slcCode' => $this->SLC_CODE,
            'sltCode' => $this->SLT_CODE,
            'descr' => $this->DESCR,
            'formula' => $this->FORMULA,
            'codeId' => $this->CODEID,
            'dSlcCode' => $this->DSLC_CODE,
            'dSltCode' => $this->DSLT_CODE,
            'dSleCode' => $this->DSLE_CODE,
            'dAcctCode' => $this->DACCT_CODE,
            'slBehavior' => $this->SLBEHAVIOR,
            'isAutoLoad' => $this->ISAUTOLOAD,
            'deducGroup' => $this->DEDUCGROUP,
            'deducOrder' => $this->DEDUCORDER,
            'dClientId' => $this->DCLIENTID,
        ];
    }
}
