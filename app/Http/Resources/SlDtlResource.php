<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SlDtlResource extends JsonResource
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
            'slBrCode' => $this->SL_BRCODE,
            'slClientId' => $this->SL_CLIENTID,
            'slcCode' => $this->SLC_CODE,
            'sltCode' => $this->SLT_CODE,
            'refNo' => $this->REF_NO,
            'sleCode' => $this->SLE_CODE,
            'trDate' => $this->TR_DATE,
            'seqNo' => $this->SEQNO,
            'glDate' => $this->GL_DATE,
            'trCode' => $this->TR_CODE,
            'trCtlNo2' => $this->TR_CTLNO2,
            'trCtlNo' => $this->TR_CTLNO,
            'trDocNo' => $this->TR_DOCNO,
            'amt' => $this->AMT,
            'adjFlag' => $this->ADJ_FLAG,
            'cociType' => $this->COCI_TYPE,
            'clrgDays' => $this->CLRG_DAYS,
            'checkNo' => $this->CHECKNO,
            'bankCode' => $this->BANK_CODE 
        ];
    }
}
