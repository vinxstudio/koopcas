<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class SdResource extends JsonResource
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
            'lastName' => $this->LName,
            'firstName' => $this->FName,
            'middleName' => $this->MName,
            'suffix' => $this->SName,
            'acctType' => $this->AccountType,
            'jointType' => $this->JointType,
            'accountStatus' => $this->AccountStatus,
            'clientType' => $this->ClientType,
            'accountName' => $this->AccountName,
            'dateOpened' => Carbon::parse($this->DateOpened)->format('Y-m-d'),
            'sdTrDate' => Carbon::parse($this->SDTR_DATE)->format('Y-m-d'),
            'sdStatus' => $this->SDSTATUS,
            'sdMinBal' => $this->SDMIN_BAL,
            'sdIntRate' => $this->SDINT_RATE,
            'sdUpdDateTime' => $this->SDUPDDATETIME,
            'sdRemarks' => $this->SDREMARKS,
            'sdUpdUser' => $this->SDUpdUser,
            'sdSavClass' => $this->SDSAVCLASS,
            'sdSlcDescr' => $this->SLClassDesc,
        ];
    }
}
