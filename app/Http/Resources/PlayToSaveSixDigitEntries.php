<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlayToSaveSixDigitEntries extends JsonResource
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
            'ptsSdeId' => $this->PTSSDEID,
            'ptsSdeBrCode' => $this->PTSSDEBR_CODE,
            'ptsSerialId' => $this->PTSSerialID,
            'ptsStabsNumber' => $this->PTSStabsNumber,
            'ptsSdClientId' => $this->PTSSDClientID,
            'lastName' => $this->LName,
            'firstName' => $this->FName,
            'middleName' => $this->MName,
            'ptsSdTrDocNo' => $this->PTSSDTRDOC_NO,
            'ptsSdNumOfEntries' => $this->PTSSDNumOfEntries,
            'ptsSsdDateOfTrans' => $this->PTSSDDateOfTrans,
            'ptsSixDigitNum' => $this->PTSSixDigitNum,
            'ptsSixDigitNum2' => $this->PTSSixDigitNum2,
            'ptsSdDateTrans' => $this->PTSSDDateTrans,
            'ptsSdAdvance' => $this->PTSSDAdvance,
            'ptsSdDateTime' => $this->PTSSDDateTime,
        ];
    }
}
