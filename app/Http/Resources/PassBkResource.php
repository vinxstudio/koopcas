<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PassBkResource extends JsonResource
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
            'passBkBrCode' => $this->PassbkBR_CODE,
            'passBkClientId' => $this->PassbkCLIENTID,
            'passBkSlcCode' => $this->PassbkSLC_CODE,
            'passBkSltCode' => $this->PassbkSLT_CODE,
            'passBkRefNo' => $this->PassbkREF_NO,
            'lastName' => $this->LName,
            'firstName' => $this->FName,
            'middleName' => $this->MName,
            'suffix' => $this->SName,
            'slTypeMDesc' => $this->SLTypeM_DESC,
            'passBkTypeDesc' => $this->PassBkTypeDesc,
            'passBkPbType' => $this->PassbkPBTYPE,
            'passBkSerNum' => $this->PassbkSERNUM,
            'passBkLineNum' => $this->PassbkLINENUM,
            'passBkLtrDate' => $this->PassbkLTR_DATE,
            'passBkBal' => $this->PassbkBAL,
            'passBkSeqNo' => $this->PassbkSEQNO,
        ];
    }
}
