<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CoaResource extends JsonResource
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
            'coaBrCode' => $this->COABR_CODE,
            'coaId' => $this->COAID,
            'coaDesc' => $this->COADesc,
            'coaAcctType' => $this->COAacct_type,
            'coaAcctTag' => $this->COAacct_tag,
            'coaAcctTag2' => $this->COAacct_tag2,
            'coaAcctTag3' => $this->COAacct_tag3,
            'coaAcctLvl' => $this->COAacct_lvl,
            'coaAcctSum' => $this->COAacct_sum,
            'coaDept' => $this->COAdept,
            'coaAcctGrp' => $this->COAacct_grp,
            'coaClsEntry' => $this->COAcls_entry,
            'coaCleDate' => $this->COAcle_date,
            'coaConsoAcct' => $this->COAconso_acct,
            'coaUpdUser' => $this->COAUpdUser,
            'coaUpdDateTime' => $this->COAupdDateTime,
            'coaBalType' => $this->COABALTYPE,
            'coaGlAcctType' => $this->COAglaccttype,
            'coaSeqNo' => $this->COAseqno,
            'coaIsDisabled' => $this->COAisdisabled,
            'coaCanGlOnly' => $this->COAcanGLOnly
            
        ];
    }
}
