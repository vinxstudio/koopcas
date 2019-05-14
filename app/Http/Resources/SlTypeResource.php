<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SlTypeResource extends JsonResource
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
            'slTypeBrCode' => $this->SLTypeBR_CODE,
            'slTypeSlcCode' => $this->SLTypeSLC_CODE,
            'slTypeSltCode' => $this->SLTypeSLT_CODE,
            'slTypeMDesc' => $this->SLTypeM_DESC,
            'slTypeMDesc2' => $this->SLTypeM_DESC2,
            'slTypeSlgCode' => $this->SLTypeSLG_CODE,
            'slTypeTerms' => $this->SLTypeTERMS,
            'slTypeTermPerd' => $this->SLTypeTERM_PERD,
            'slTypePpmtMode' => $this->SLTypePPMT_MODE,
            'slTypeIpmtMode' => $this->SLTypeIPMT_MODE,
            'slTypePenMode' => $this->SLTypePEN_MODE,
            'slTypeAmorType' => $this->SLTypeAMORTYPE,
            'slTypeDimbFreq' => $this->SLTypeDIMB_FREQ,
            'slTypeIntRate' => $this->SLTypeINT_RATE,
            'slTypePenRate' => $this->SLTypePEN_RATE,
            'slTypeSfRate' => $this->SLTypeSF_RATE,
            'slTypeMinComkr' => $this->SLTypeMINCOMKR,
            'slTypeEncumpCnt' => $this->SLTypeENCUMPCNT,
            'slTypePbFlag' => $this->SLTypePB_FLAG,
            'slTypePbType' => $this->SLTypePBTYPE,
            'slTypePiFlag' => $this->SLTypePI_FLAG,
            'slTypeAuIdFlag' => $this->SLTypeAUID_FLAG,
            'slTypeAiFlag' => $this->SLTypeAI_FLAG,
            'slTypeCiamFlag' => $this->SLTypeCIAM_FLAG,
            'slTypeDdFlag' => $this->SLTypeDD_FLAG,
            'slTypeMinBal' => $this->SLTypeMIN_BAL,
            'slTypeBmBalSf' => $this->SLTypeBMBAL_SF,
            'slTypeDormTerm' => $this->SLTypeDORM_TERM,
            'slTypeDormPerd' => $this->SLTypeDORM_PERD,
            'slTypeDormSf' => $this->SLTypeDORM_SF,
            'slTypeOldSlt' => $this->SLTypeOLD_SLT,
            'slTypeUpdDateTime' => $this->SLTypeUPDDATETIME,
            'slTypeUpdUser' => $this->SLTypeUpdUser,
            'slTypeIsIncSoa' => $this->SLTypeIsIncSOA,
            'slTypeIsDisabled' => $this->SLTypeIsDisabled,
            'slTypeRebateRate' => $this->SLTypeRebateRate,
            'slTypeMaxAtmWdlPerDay' => $this->SLTypeMaxATMWDLPerDay,
            'slTypePriority' => $this->SLTypePriority,
            'slTypeCpAmoFlag' => $this->SLTypeCPAMO_FLAG,
            'slTypeMealAllowanceCreditLimit' => $this->SLTypeMealAllowanceCreditLimit,
            'slTypeCluster' => $this->SLTypeCluster,
            'slTypeCisaSl' => $this->SLTypeCISA_SL
        ];
    }
}
