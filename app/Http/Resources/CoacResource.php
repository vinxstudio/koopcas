<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CoacResource extends JsonResource
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
            'coacBrCode' => $this->COACBR_CODE,
            'coacId' => $this->COACID,
            'coacDesc' => $this->COACDesc,
            'coacAcctType' => $this->COACacct_type,
            'coacAcctTag' => $this->COACacct_tag,
            'coacAcctTag2' => $this->COACacct_tag2,
            'coacAcctTag3' => $this->COACacct_tag3,
            'coacAcctLvl' => $this->COACacct_lvl,
            'coacAcctSum' => $this->COACacct_sum,
            'coacDept' => $this->COACdept,
            'coacAcctGrp' => $this->COACacct_grp,
            'coacClsEntry' => $this->COACcls_entry,
            'coacCleDate' => $this->COACcle_date,
            'coacConsoAcct' => $this->COACconso_acct,
            'coaUpdUser' => $this->COACUpdUser,
            'coacUpdDateTime' => $this->COACupdDateTime,
            'coacBalType' => $this->COACBALTYPE,
            'coacGlAcctType' => $this->COACglaccttype,
            'coacSeqNo' => $this->COACseqno,
            'coacIsDisabled' => $this->COACisdisabled,
            'coacCanGlOnly' => $this->COACcanGLOnly

        ];
    }
}
