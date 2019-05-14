<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvPricesResource extends JsonResource
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
            'id'=> $this->ID,
            'brCode'=> $this->BR_CODE,
            'itemId'=> $this->ITEMID,
            'desc1'=> $this->DESC1,
            'qty' => $this->QTY,
            'retail' => $this->RETAIL,
            'wholeSale' => $this->WHOLESALE,
            'isSelling' => $this->ISSELLING,
            'isPurchasing' => $this->ISPURCHASING
        ];
    }
}
