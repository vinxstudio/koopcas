<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvItemTypeResource extends JsonResource
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
            'id' => $this->ITEMTYPEID,
            'desc1' => $this->ITEMTYPEDESC1,
            'desc2' => $this->ITEMTYPEDESC2,
            'brCode' => $this->BR_CODE,
            'pSlcCode' => $this->PSLC_CODE,
            'pSltCode' => $this->PSLT_CODE,
            'pCoaId' => $this->PCOAID,
            'prSlcCode' => $this->PRSLC_CODE,
            'prSltCode' => $this->PRSLT_CODE,
            'prCoaId' => $this->PRCOAID,
            'sSlcCode' => $this->SSLC_CODE,
            'sSltCode' => $this->SSLT_CODE,
            'sCoaId' => $this->SCOAID,
            'srSlcCode' => $this->SRSLC_CODE,
            'srSltCode' => $this->SRSLT_CODE,
            'srCoaId' => $this->SRCOAID,
            'sdSlcCode' => $this->SDSLC_CODE,
            'sdSltCode' => $this->SDSLT_CODE,
            'sdCoaId' => $this->SDCOAID,
            'cogsSlcCode' => $this->COGSSLC_CODE,
            'cogsSltCode' => $this->COGSSLT_CODE,
            'cogsCoaId' => $this->COGSCOAID,
            'csSlcCode' => $this->CSSLC_CODE,
            'csSltCode' => $this->CSSLT_CODE,
            'csCoaId' => $this->CSCOAID,
            'csrSlcCode' => $this->CSRSLC_CODE,
            'csrSltCode' => $this->CSRSLT_CODE,
            'csrCoaId' => $this->CSRCOAID,
            'isNewSlOnly' => $this->IsNEWSLOnly,
            'isMustHaveSl' => $this->IsMUSTHaveSL,
            'department' => $this->DEPT


        ];
    }
}
