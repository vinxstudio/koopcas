<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WkfLiRemitResource extends JsonResource
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
            'brCode' => $this->BR_CODE,
            'clientId' => $this->CLIENTID,
            'slcCode' => $this->SLC_CODE,
            'sltCode' => $this->SLT_CODE,
            'refNox' => $this->REF_NOx,
            'sleCode' => $this->SLE_CODE,
            'slDescr' => $this->SLDESCR,
            'clientIdx' => $this->CLIENTIDx,
            'lastName' => $this->LASTNAME,
            'firstName' => $this->FIRSTNAME,
            'middleName' => $this->MIDDLENAME,
            'suffixName' => $this->SUFFIXNAME,
            'chapter' => $this->CHAPTER,
            'genderx' => $this->GENDERx,
            'civilStatus' => $this->CIVILSTATUS,
            'dateOfBirth' => $this->DATEOFBIRTH,
            'agex' => $this->AGEx,
            'loanDescr' => $this->LOANDESCR,
            'loanAmt' => $this->LOANAMT,
            'dateReleased' => $this->DATERELEASED,
            'loanTerm' => $this->LOANTERM,
            'loanMaturity' => $this->LOANMATURITY,
            'premium' => $this->PREMIUM,
            'beneficiary' => $this->BENEFICIARY,
            'relationship' => $this->RELATIONSHIP
           
        ];
    }
}
