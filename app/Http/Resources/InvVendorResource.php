<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvVendorResource extends JsonResource
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
            'id' => $this->VENDORID,
            'companyName' => $this->CompanyName,
            'brCode' => $this->BR_CODE,
            'trDate' => $this->TR_DATE,
            'clientId' => $this->ClientID,
            'title' => $this->Title,
            'firstName' => $this->FirstName,
            'lastName' => $this->LastName,
            'streetBarangay' => $this->StreetBarangay,
            'cityProvince' => $this->CityProvince,
            'zipCode' => $this->ZIPCode,
            'phone' => $this->Phone,
            'altPhone' => $this->AltPhone,
            'cellPhone' => $this->CellPhone,
            'emailAddress' => $this->EmailAddress,
            'otherContactInfo' => $this->OtherContactInfo,
            'accountNumber' => $this->AccountNumber,
            'termsText' => $this->TERMS_TEXT,
            'terms' => $this->TERMS,
            'termPerd' => $this->TERM_PERD,
            'isActive' => $this->IsActive,
            'remarks' => $this->Remarks,
        ];
    }
}
