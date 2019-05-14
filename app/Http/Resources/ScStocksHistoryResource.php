<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ScStocksHistoryResource extends JsonResource
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
            'scHisBrCode' => $this->SC_HISbrcode,
            'scHisSlcCode' => $this->SC_HISslc_code,
            'scHisSltCode' => $this->SC_HISslt_code,
            'scHisRefNo' => $this->SC_HISref_no,
            'scHisClientId' => $this->SC_HISclient_ID,
            'scHisTrDate' => $this->SC_HIStr_date,
            'scHisPcDate' => $this->SC_HISpc_date,
            'scHisCertNo' => $this->SC_HIScert_no,
            'scHisNoShares' => $this->SC_HISno_shares,
            'scHisSubscribeAmt' => $this->SC_HISsubscribe_amt,
            'scHisScAmt' => $this->SC_HISsc_amt 
        ];
    }
}
