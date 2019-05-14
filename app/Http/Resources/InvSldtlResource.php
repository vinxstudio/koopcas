<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvSldtlResource extends JsonResource
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
            'location' => $this->LOCATION,
            'itemId' => $this->ITEMID,
            'trCode' => $this->TR_CODE,
            'trCtlNo' => $this->TR_CTLNO,
            'trDate' => $this->TR_DATE,
            'seqNo' => $this->SEQNO,
            'clientId' => $this->CLIENTID,
            'trDocNo' => $this->TR_DOCNO,
            'qty' => $this->QTY,
            'unitCost' => $this->UNITCOST,
            'totCost' => $this->TOTCOST,
            'taxAmount' => $this->TAXAMOUNT,
            'retailPrice' => $this->RETAILPRICE,
            'wholeSalePrice' => $this->WHOLESALEPRICE,
            'isOnPromo' => $this->ISONPROMO,
            'payMethod' => $this->PAYMETHOD,
            'adjReason' => $this->ADJREASON,
            'updTag' => $this->UPDTAG,
            'memberId' => $this->MEMBERID

         ];
    }
}
