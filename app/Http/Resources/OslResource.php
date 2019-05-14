<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class OslResource extends JsonResource
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
            'oslTrDate' => Carbon::parse($this->OSLTR_DATE)->format('Y-m-d'),
            'oslStatus' => $this->OSLSTATUS,
            'oslPamt' => $this->OSLPAMT,
            'oslUpdDateTime' => $this->OSLUPDDATETIME,
            'oslRemarks' => $this->OSLREMARKS,
            'oslUpdUser' => $this->OSLUpdUser
        ];
    }
}
