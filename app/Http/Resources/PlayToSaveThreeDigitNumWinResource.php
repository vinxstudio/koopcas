<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlayToSaveThreeDigitNumWinResource extends JsonResource
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
            'ptsTdWinId' => $this->PTSTDWinID,
            'ptsTdWinBrCode' => $this->PTSTDWinBR_CODE,
            'ptsTdId' => $this->PTSTDID,
            'threeDigitNum' => $this->ThreeDigitNum,
            'threeDigitWinPrize' => $this->ThreeDigitWinPrize,
            'clientAcctNum' => $this->ClientAcctNum,
            'clientName' => $this->ClientName,
            'winningNumber' => $this->WinningNumber,
            'prizeWon' => $this->PrizeWon,
            'dateOfWinning' => $this->DateOfWinning,
            'dateTimeOfTrans' => $this->DateTimeOfTrans,
        ];
    }
}
