<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvTaxResource extends JsonResource
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
            'taxClassName' => $this->TaxClassName,
            'brCode'=> $this->BR_CODE,
            'taxName1' => $this->TaxName1,
            'taxRate1' => $this->TaxRate1,
            'taxName2' => $this->TaxName2,
            'taxRate2' => $this->TaxRate2,
            'taxIsCompounded' => $this->TaxIsCompounded,
            'addOnChargeName' => $this->AddOnChargeName,
            'addOnChargeRate' => $this->AddOnChargeRate,
            'isTaxInclusive' => $this->IsTaxInclusive,
            'taxRegNumber' => $this->TaxRegNumber
            
        ];
    }
}
