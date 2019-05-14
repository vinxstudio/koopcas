<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class CBrefResource extends JsonResource
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
            'cBrefId' => $this->CBRefID,
            'cbRefBrCode' => $this->CBRefBR_CODE,
            'clientIdCbRef' => $this->ClientIDCBRef,
            'cbRefType' => $this->CBRefType,
            'cbRefName' => $this->CBRefName,
            'cbRefDateAcctOpened' => $this->CBRefDateAcctOpened,
            'cbRefPrincipalAmount' => $this->CBRefPrincipalAmount,
            'cbRefLoanBalance' => $this->CBRefLoanBalance,
            'cbRefAddress' => $this->CBRefAddress,
            'cbRefTelNum' => $this->CBRefTelNum,
            'cbRefDateTimeAdded' => Carbon::parse($this->CBRefDateTimeAdded)->format('Y-m-d'),
        ];
    }
}
