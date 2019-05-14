<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class CoMakerResource extends JsonResource
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
            'coMakerBrCode' => $this->CoMakerBR_CODE,
            'coMakerClientId' => $this->CoMakerClientID,
            'coMakerSlcCode' => $this->CoMakerSLC_CODE,
            'coMakerSltCode' => $this->CoMakerSLT_CODE,
            'coMakerRefNo' => $this->CoMakerREF_NO,
            'clientIdCoMaker' => $this->ClientIDCoMaker,
            'coMakerClientName' => $this->CoMakerClientName,
            'coMakerAddress1' => $this->CoMakerAddress1,
            'coMakerAddress2' => $this->CoMakerAddress2,
            'loanType' => $this->LoanPurposeDesc,
            'accountBalanceName' => $this->BalTypeDesc,
            'accountStatusName' => $this->AcctStatDesc,
            'id' => $this->ID
        ];
    }
}
