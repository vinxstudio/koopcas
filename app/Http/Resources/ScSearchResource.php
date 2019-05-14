<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class ScSearchResource extends JsonResource
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
            'chkDgt' => $this->ClientIDChkDgt,
            'lastName' => $this->LName,
            'firstName' => $this->FName,
            'middleName' => $this->MName,
            'clientTypeId' => $this->ClientTypeID,
            'clientTypeName' => $this->ClientTypeDesc,
            'accountStatusId' => $this->AcctStatID,
            'accountStatusName' => $this->AcctStatDesc,
            'alertLevel' => $this->AlertLevel,
            'referenceId' => $this->OldClientID,
            'scTrDate' => Carbon::parse($this->SCTR_DATE)->format('Y-m-d'),
            'scMinBal' => $this->SCMIN_BAL,
            'slTypeMDesc' => $this->SLTypeM_DESC,
            'scStatus' => $this->SCSTATUS,
        ];
    }
}
