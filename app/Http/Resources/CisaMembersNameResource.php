<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CisaMembersNameResource extends JsonResource
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
            'membersId' => $this->MembersID,
            'memberBrCode' => $this->MemberBR_CODE,
            'memberClientId' => $this->MemberClientID,
            'fName' => $this->Fname,
            'mName' => $this->Mname,
            'lName' => $this->Lname,
            'nameExtnt' => $this->NameExtnt
        ];
    }
}
