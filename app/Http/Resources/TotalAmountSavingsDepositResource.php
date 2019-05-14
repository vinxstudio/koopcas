<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TotalAmountSavingsDepositResource extends JsonResource
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
            'totalAmountSavingsDeposit' => $this->totalAmountSavingsDeposit,
        ];
    }
}
