<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoanPurposeResource extends JsonResource
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
            'loanPurposeId' => $this->LoanPurposeID,
            'loanPurposeDesc' => $this->LoanPurposeDesc,
            'loanPurposeType' => $this->LoanPurposeType
        ];
    }
}
