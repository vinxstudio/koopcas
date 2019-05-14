<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IndDivisionResource extends JsonResource
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
            'indDivisionId' => $this->Ind_DivisionID,
            'indDivisionDesc' => $this->Ind_DivisionDesc,
            'indDivisionBrCode' => $this->Ind_DivisionBR_CODE,
            'indSectionId' => $this->Ind_SectionID
        ];
    }
}
