<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransFoResource extends JsonResource
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
            'foTrBrCode' => $this->FOTR_BRCODE,
            'foTrYear' => $this->FOTR_YEAR,
            'foTrModule' => $this->FOTR_MODULE,
            'foTrCode' => $this->FOTR_CODE,
            'foTrCtlNo' => $this->FOTR_CTLNO,
            'foSeqNo' => $this->FOSEQ_NO,
            'foDept' => $this->FODEPT,
            'foAcctCode' => $this->FOACCT_CODE,
            'clientIdFo' => $this->ClientIDFO,
            'clientIdFoNa' => $this->ClientIDFONA,
            'foSlcCode' => $this->FOSLC_CODE,
            'foSltCode' => $this->FOSLT_CODE,
            'foRefNo' => $this->FOREF_NO,
            'foSleCode' => $this->FOSLE_CODE,
            'foCtsNum' => $this->FOCTS_NUM,
            'foSlDate' => $this->FOSL_DATE,
            'foAdjFlag' => $this->FOADJ_FLAG,
            'foCociType' => $this->FOCOCI_TYPE,
            'foAmt' => $this->FOAMT,
            'foEncdBy' => $this->FOENCDBY,
            'foApprvBy' => $this->FOAPPRVBY,
            'foPostBy' => $this->FOPOSTBY,
            'foUpdTag' => $this->FOUPD_TAG,
            'foSleCode2' => $this->FOSLE_CODE2,
            'foCtsNum2' => $this->FOCTS_NUM2 
        ];
    }
}
