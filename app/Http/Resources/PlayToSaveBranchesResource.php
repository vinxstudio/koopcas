<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlayToSaveBranchesResource extends JsonResource
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
            'ptsBrCode' => $this->PTSBR_CODE,
            'ptsBranchName' => $this->PTSBranchName,
            'ptsBranchAddress' => $this->PTSBranchAddress,
            'ptsBranchManager' => $this->PTSBranchManager,
            'ptsBranchContact' => $this->PTSBranchContact,
            'ptsBranchEmail' => $this->PTSBranchEmail,
            'ptsBranchDateAdded' => $this->PTSBranchDateAdded
        ];
    }
}
