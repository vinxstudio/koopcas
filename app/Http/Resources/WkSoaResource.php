<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WkSoaResource extends JsonResource
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
            'chkDgt' => $this->CHKDGT,
            'clientName' => $this->CLIENTNAME,
            'homeAddress' => $this->HOMEADDRESS,
            'msMr' => $this->MS_MR,
            'statementDate' => $this->STATEMENTDATE,
            'cutOffDate' => $this->CUTOFFDATE,
            'optionx' => $this->OPTIONx,
            'accountGroup' => $this->ACCOUNTGROUP,
            'slDescr' => $this->SLDESCR,
            'referenceNumber' => $this->REFERENCENUMBER,
            'prinAmt' => $this->PRINAMT,
            'prinBal' => $this->PRINBAL,
            'prinDueAvblBal' => $this->PRINDUE_AVBLBAL,
            'intDue' => $this->INTDUE,
            'penDue' => $this->PENDUE,
            'prinOvr' => $this->PRINOVR,
            'intOvr' => $this->INTOVR,
            'penOvr' => $this->PENOVR,
            'branchManager' => $this->BRANCHMANAGER,
            'cdaREgNum' => $this->CDAREGNUM,
            'orgAcronym' => $this->ORGACRONYM,
            'setUpDate' => $this->SETUPDATE,
            'maturityDate' => $this->MATURITYDATE
        ];
    }
}
