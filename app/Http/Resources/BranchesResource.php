<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BranchesResource extends JsonResource
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
            'branchesId' => $this->BranchesID,
            'branchesDesc' => $this->BranchesDesc,
            'address' => $this->Address,
            'manager' => $this->Manager,
            'poContactName' => $this->PO_ContactName,
            'contactNumbers' => $this->ContactNumbers,
            'tin' => $this->TIN,
            'posSerialNumber' => $this->POS_SerialNumber,
            'posMin' => $this->POS_MIN,
            'emailAddress' => $this->EmailAddress,
            'posPermitNumber' => $this->POS_PermitNumber,
            'isEnableRebates' => $this->IsEnableRebates,
            'rebSlcCode' => $this->REB_SLT_CODE,
            'rebSltCode' => $this->REB_SLT_CODE,
            'rebExpAcct' => $this->REB_EXPACCT,
            'isConsolidateRebateEntries' => $this->IsConsolidateRebateEntries,
            'cdARegNum' => $this->CDAREGNUM,
            'acronym' => $this->ACRONYM,
            'pnLocation' => $this->PN_LOCATION,
            'pnSsAt' => $this->PN_SS_AT,
            'lottoNumDigt'=> $this->LottoNumDigit,
            'lottoDepositLimit' => $this->LottoDepositLimit
        ];
    }
}
