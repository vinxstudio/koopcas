<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class ScResource extends JsonResource
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
            'scBrCode' => $this->SCBR_CODE,
            'scSlcCode' => $this->SCSLC_CODE,
            'scSltCode' => $this->SCSLT_CODE,
            'scRefNo' => $this->SCREF_NO,
            'clientIdSc' => $this->ClientIDSC,
            'lastName' => $this->LName,
            'firstName' => $this->FName,
            'middleName' => $this->MName,
            'suffix' => $this->SName,
            'chkDgt' => $this->ClientIDChkDgt,
            'acctType' => $this->AccountType,
            'jointType' => $this->JointType,
            'accountStatus' => $this->AccountStatus,
            'clientType' => $this->ClientType,
            'accountName' => $this->AccountName,
            'dateOpened' => Carbon::parse($this->DateOpened)->format('Y-m-d'),
            'scTrDate' => Carbon::parse($this->SCTR_DATE)->format('Y-m-d'),
            'scStatus' => $this->SCSTATUS,
            'scMinBal' => $this->SCMIN_BAL,
            'scUpdDateTime' => $this->SCUPDDATETIME,
            'scRemarks' => $this->SCREMARKS,
            'scUpdUser' => $this->SCUpdUser
        ];
    }
}
