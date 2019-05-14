<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentModeResource extends JsonResource
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
            'paymentModeId' => $this->PaymentModeID,
            'paymentModeDesc' => $this->PaymentModeDesc,
            'paymentModeOldId' => $this->PaymentModeOLDID
        ];
    }
}
