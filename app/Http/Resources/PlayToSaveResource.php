<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlayToSaveResource extends JsonResource
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
            'ptsDnId' => $this->PTSDNID,
            'ptsDnBrCode' => $this->PTSDNBR_CODE,
            'ptsDnDocNo' => $this->PTSDNDOC_NO,
            'sixDigitNumber' => $this->SixDigitNumber,
            'threeDigitNumber' => $this->ThreeDigitNumber,
            'sixDigitWinPrize' => $this->SixDigitWinPrize,
            'threeDigitWinPrize' => $this->ThreeDigitWinPrize,
            'dateOfDraw' => $this->DateOfDraw,
            'totalCollectionForSixDigit' => $this->TotalCollectionForSixDigit,
            'totalCollectionForThreeDigit' => $this->TotalCollectionForThreeDigit,
            'totalCollection' => $this->TotalCollection,
            'dateTimeOfTrans' => $this->DateTimeOfTrans,
        ];
    }
}
