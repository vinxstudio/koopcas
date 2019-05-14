<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IndCodeResource extends JsonResource
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
            'indCodeId' => $this->Ind_CodeID,
            'indCodeDesc' => $this->Ind_CodeDesc,
            'indCode' => $this->Ind_Code,
            'indCodeBrCode' => $this->Ind_CodeBR_CODE,
            'indDivisionID' => $this->Ind_DivisionID
        ];
    }
}
