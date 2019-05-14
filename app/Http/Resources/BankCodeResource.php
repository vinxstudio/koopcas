<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BankCodeResource extends JsonResource
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
            'bcBrCode' => $this->BCBR_CODE,
            'bcId' => $this->BCID,
            'bcDesc' => $this->BCDesc,
            'bcDesc2' => $this->BCDesc2,
            'bcAcctNo' => $this->BCACCTNO,
            'bcCoaId' => $this->BCCOAID,
            'bcUpdBy' => $this->BCUPDBY,
            'bcUpdDateTime' => $this->BCUPDDATETIME
        ];
    }
}
