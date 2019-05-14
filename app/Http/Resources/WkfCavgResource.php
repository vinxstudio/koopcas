<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WkfCavgResource extends JsonResource
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
            'clientIdx' => $this->CLIENTIDx,
            'clientName' => $this->CLIENTNAME,
            'fromDate' => $this->FROMDATE,
            'toDate' => $this->TODATE,
            'shareCapital' => $this->SHARECAPITAL,
            'avgShareCapital' => $this->AVGSHARECAPITAL,
            'intPaid' => $this->INTPAID,
            'lessRebDiscIntPaid' => $this->LESS_REB_DISC_INTPAID,
            'dividend' => $this->DIVIDEND,
            'patronage' => $this->PATRONAGE,
            'grossDpr' => $this->GrossDPR,
            'explanation' => $this->Explanation,
            'agingLoans' => $this->AGINGLOANS 
        ];
    }
}
