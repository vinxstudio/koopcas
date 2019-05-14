<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlayToSaveThreeDigitEntries extends JsonResource
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
            'ptsTdeId' => $this->PTSTDEID,
            'ptsTdeBrCode' => $this->PTSTDEBR_CODE,
            'ptsTdClientId' => $this->PTSTDClientID,
            'ptsSerialId' => $this->PTSSerialID,
            'ptsStabsNumber' => $this->PTSStabsNumber,
            'lastName' => $this->LName,
            'firstName' => $this->FName,
            'middleName' => $this->MName,
            'ptsTdTrDocNo' => $this->PTSTDTRDOC_NO,
            'ptsTdNumOfEntries' => $this->PTSTDNumOfEntries,
            'ptsTdDateOfTrans' => $this->PTSTDDateOfTrans,
            'ptsThreeDigitNum' => $this->PTSThreeDigitNum,
            'ptsTdRumbleSolo' => $this->PTSTDRumbleSolo,
            'ptsTdDateTrans' => $this->PTSTDDateTrans,
            'ptsTdAdvance' => $this->PTSTDAdvance,
            'ptsTdDatetime' => $this->PTSTDDateTime
        ];
    }
}
