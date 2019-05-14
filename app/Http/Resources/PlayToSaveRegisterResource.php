<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlayToSaveRegisterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'trId' => $this->TR_ID,
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
            'trdocNo' => $this->TR_DOCNO,
            'trdate' => $this->TR_DATE,
        ];
    }
}
