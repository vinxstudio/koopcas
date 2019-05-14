<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class cisaAddPrimaryIdResource extends JsonResource
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
            'clientId' => $this->ClientID,
            'clientBrCode' => $this->ClientBR_Code,
            'identificationType' => $this->IdentificationType,
            'idNumber' => $this->ID_Number
        ];
    }
}
