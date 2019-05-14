<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransCkResource extends JsonResource
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
            'ckTrBrCode' => $this->CKTR_BRCODE,
            'ckTrYear' => $this->CKTR_YEAR,
            'ckTrModule' => $this->CKTR_MODULE,
            'ckTrCode' => $this->CKTR_CODE,
            'ckTrCtlNo' => $this->CKTR_CTLNO,
            'ckSeqNo' => $this->CKSEQ_NO,
            'ckCociType' => $this->CKCOCI_TYPE,
            'ckCheckType' => $this->CKCHECKTYPE,
            'ckClrgDays' => $this->CKCLRG_DAYS,
            'chkCheckNo' => $this->CKCHECKNO,
            'ckBankCode' => $this->CKBANK_CODE,
            'ckCheckDate' => $this->CKCHECKDATE,
            'ckAmt' => $this->CKAMT,
            'ckUpdTag' => $this->CKUPD_TAG,
            'ckClrDate' => $this->CKCLR_DATE,
            'ckEncdBy' => $this->CKENCDBY,
            'ckApprvBy' => $this->CKAPPRVBY,
            'ckPostBy' => $this->CKPOSTBY,
            'ckIsCleared' => $this->CKISCLEARED ,
        ];
    }
}
