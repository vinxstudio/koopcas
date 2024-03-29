<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlayToSaveTicketsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'ptsSsAId' => $this->PTSSSID,
            'branchAllocation' => $this->BranchAllocation,
            'branchesDesc' => $this->BranchesDesc,
            'serialNumber' => $this->SerialNumber,
            'serialNumberStart' => $this->SerialNumberStart,
            'serialNumberEnd' => $this->SerialNumberEnd,
            'quantity' => $this->Quantity,
            'dateAdded' => $this->DateAdded,
            'dateTimeAdded' => $this->DateTimeAdded,
        ];
    }
}
