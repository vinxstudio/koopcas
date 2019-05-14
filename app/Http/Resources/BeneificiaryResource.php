<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class BeneificiaryResource extends JsonResource
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
            'benefID' => $this->BenefID,
            'benefBrCode' => $this->BenefBR_CODE,
            'clientIdBenef' => $this->ClientIDBenef,
            'benefName' => $this->BenefName,
            'benefRelation' => $this->BenefRelation,
            'benefRelationDesc' => $this->RelationDesc,
            'benefDateofBirth' => $this->BenefDateofBirth,
            'benefOccu' => $this->BenefOccu,
            'benefOccuDesc' => $this->OccuDesc,
            'benefDateTimeAdded' => Carbon::parse($this->BenefDateTimeAdded)->format('Y-m-d')
        ];
    }
}
