<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransDtResource extends JsonResource
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
            'dtTrBrCode' => $this->DTTR_BRCODE,
            'dtTrYear' => $this->DTTR_YEAR,
            'dtTrModule' => $this->DTTR_MODULE,
            'dtTrCode' => $this->DTTR_CODE,
            'dtTrCtlNo' => $this->DTTR_CTLNO,
            'dtSeqNo' => $this->DTSEQ_NO,
            'dtDept' => $this->DTDEPT,
            'dtAcctCode' => $this->DTACCT_CODE,
            'clientIdDt' => $this->ClientIDDT,
            'clientIdDtNa' => $this->ClientIDDTNA,
            'dtSlcCode' => $this->DTSLC_CODE,
            'dtSltCode' => $this->DTSLT_CODE,
            'dtREfNo' => $this->DTREF_NO,
            'dtSleCode' => $this->DTSLE_CODE,
            'dtCtsNum' => $this->DTCTS_NUM,
            'dtSlDate' => $this->DTSL_DATE,
            'dtAdjFlag' => $this->DTADJ_FLAG,
            'dtCociType' => $this->DTCOCI_TYPE,
            'dtAmt' => $this->DTAMT,
            'dtAmtDue' => $this->DTAMTDUE,
            'dtEncdBy' => $this->DTENCDBY,
            'dtApprvBy' => $this->DTAPPRVBY,
            'dtPostBy' => $this->DTPOSTBY,
            'dtUpdTag' => $this->DTUPD_TAG,
            'dtSleCode2' => $this->DTSLE_CODE2,
            'dtCtsNum2' => $this->DTCTS_NUM2
        ];
    }
}
