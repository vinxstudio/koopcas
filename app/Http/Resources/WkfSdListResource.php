<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WkfSdListResource extends JsonResource
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
            'brCode' => $this->BR_CODE,
            'clientId' => $this->CLIENTID,
            'slcCode' => $this->SLC_CODE,
            'sltCode' => $this->SLT_CODE,
            'refNox' => $this->REF_NOx,
            'slDescr' => $this->SLDESCR,
            'clientIdx' => $this->CLIENTIDx,
            'clientName' => $this->CLIENTNAME,
            'dateOfBirth' => $this->DATEOFBIRTH,
            'agex' => $this->AGEx,
            'genderx' => $this->GENDERx,
            'chapter' => $this->Chapter,
            'acctStatus' => $this->ACCTSTATUS,
            'civilStatus' => $this->CIVILSTATUS,
            'clientTypeDesc' => $this->CLIENTTYPEDESC,
            'setUpDate' => $this->SETUPDATE,
            'status' => $this->STATUS,
            'minBal' => $this->MINBAL,
            'intRate' => $this->INTRATE,
            'updateDateTime' => $this->UPDATEDATETIME,
            'remarks' => $this->REMARKS,
            'updBy' => $this->UPDBY,
            'balancex' => $this->BALANCEx,
            'lastTransDate' => $this->LASTTRANSDATE
        ];
    }
}
