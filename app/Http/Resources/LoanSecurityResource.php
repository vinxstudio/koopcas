<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoanSecurityResource extends JsonResource
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
            'loanSecurityId' => $this->LoanSecurityID,
            'loanSecurityDesc' => $this->LoanSecurityDesc
        ];
    }
}
