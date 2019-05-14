<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CisaCmSecndryIdResource extends JsonResource
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
            'cmSecIdClientId' => $this->cmsecIDClientID,
            'cmSecIdBrCode' => $this->cmsecIDBR_CODE,
            'cmSecId1Type' => $this->cmsecID1Type,
            'cmSecId1Num' => $this->cmsecID1Num,
            'cmSecId1IssueDate' => $this->cmsecID1IssueDate,
            'cmSecId1Country' => $this->cmsecID1Country,
            'cmSecId1ExpiryDate' => $this->cmsecID1ExpiryDate,
            'cmSecId1IssuedBy' => $this->cmsecID1IssuedBy,
            'cmSecId2Type' => $this->cmsecID2Type,
            'cmSecId2Num' => $this->cmsecID2Num,
            'cmSecId2IssueDate' => $this->cmsecID2IssueDate,
            'cmSecId2Country' => $this->cmsecID2Country,
            'cmSecId2ExpiryDate' => $this->cmsecID2ExpiryDate,
            'cmSecId2IssuedBy' => $this->cmsecID2IssuedBy,
            'cmSecId3Type' => $this->cmsecID3Type,
            'cmSecId3Num' => $this->cmsecID3Num,
            'cmSecId3IssueDate' => $this->cmsecID3IssueDate,
            'cmSecId3Country' => $this->cmsecID3Country,
            'cmSecId3ExpiryDate' => $this->cmsecID3ExpiryDate,
            'cmSecId3IssuedBy' => $this->cmsecID3IssuedBy,
            
        ];
    }
}
