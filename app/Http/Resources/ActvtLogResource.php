<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class ActvtLogResource extends JsonResource
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
            'Id' => $this->ID,
            'userId' => $this->UserID,
            'ovrdId' => $this->OvrdID,
            'actvtListId' => $this->ActvtListID,
            'dateTimeAdded' => $this->DateTimeAdded,
            'clientId' => $this->ClientID,
            'itemId' => $this->ItemID,
            'vendorId' => $this->VendorID,
            'poId' => $this->POID,
            'actvtFieldId' => $this->ActvtFieldID,
            'actvtInfo' => $this->ActvtInfo,
            'fromData' => $this->FromData,
            'toData' => $this->ToData,
            'fromImage' => $this->FromImage,
            'toImage' => $this->ToImage,
            'brCode' => $this->BR_CODE,
            'slcCode' => $this->SLC_CODE,
            'sltCode' => $this->SLT_CODE,
            'refNo' => $this->REF_NO,
            'trCode' => $this->TR_CODE,
            'trCtlno' => $this->TR_CTLNO,
            'trDate' => $this->TR_DATE,
            'trTime' => $this->TR_TIME,
            'trAmt' => $this->TR_AMT,
            'LoanAppId' => $this->LOANAPPID,
            'soId' => $this->SOID
        ];
    }
}
