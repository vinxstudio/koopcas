<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlayToSaveSixDigitNumWinResource extends JsonResource
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
            'ptsSdWinId' => $this->PTSSDWinID,
            'ptsSdWinBrCode' => $this->PTSDWinBR_CODE,
            'ptsSdId' => $this->PTSSDID,
            'sixDigitNum' => $this->SixDigitNumer,
            'sixDigitWinPrize' => $this->SixDigitWinPrize,
            'clientAcctNum' => $this->ClientAcctNum,
            'clientName' => $this->ClientName,
            'winningNumber' => $this->WinningNumber,
            'prizeWon' => $this->PrizeWon,
            'dateOfWinning' => $this->DateOfWinning,
            'dateTimeOfTrans' => $this->DateTimeOfTrans
        ];
    }
}
