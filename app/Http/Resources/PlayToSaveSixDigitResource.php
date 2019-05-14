<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlayToSaveSixDigitResource extends JsonResource
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
            'ptsSdId' => $this->PTSSDID,
            'ptsSdNumBrCode' => $this->PTSSDNumBR_CODE,
            'ptsSdNumDocNo' => $this->PTSSDNumDOC_NO,
            'sixDigitNumber' => $this->SixDigitNumber,
            'sixDigitNumber2' => $this->SixDigitNumber2,
            'sixDigitWinPrize' => $this->SixDigitWinPrize,
            'sdDateOfDraw' => $this->SDDateOfDraw,
            'sdTotalCollection' => $this->SDTotalCollection,
            'sdDateTimeTrans' => $this->SDDateTimeOfTrans
        ];
    }
}
