<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlayToSaveThreeDigitResource extends JsonResource
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
            'ptsTdId' => $this->PTSTDID,
            'ptsTdNumBrCode' => $this->PTSTDNumBR_CODE,
            'ptsTdNumDocNo' => $this->PTSTDNumDOC_NO,
            'threeDigitNum' => $this->ThreeDigitNum,
            'threeDigitWinPrizeSolo' => $this->ThreeDigitWinPrizeSolo,
            'threeDigitWinPrizeRumble' => $this->ThreeDigitWinPrizeRumble,
            'tdDateOfDraw' => $this->TDDateOfDraw,
            'tdTotalCollection' => $this->TDTotalCollection,
            'tdDateTimeTrans' => $this->TDDateTimeTrans
        ];
    }
}
