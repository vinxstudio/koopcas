<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoanSearchResource extends JsonResource
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
            'brCode' => $this->ClientIDBrCode,
            'clientId' => $this->ClientID,
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
        ];
    }
}
