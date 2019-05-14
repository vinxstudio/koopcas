<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BalanceSheetResource extends JsonResource
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
            'coaId' => $this->COAIDx,
            'coaDesc' => $this->COADESCx,
            'coaAcctSum' => $this->COAACCT_SUMx,
            'summary' => $this->SUMMARYx,
            'group1' => $this->GROUP1x,
            'group2' => $this->GROUP2x,
            'group3' => $this->GROUP3x,
            'group4' => $this->GROUP4x,
            'group5' => $this->GROUP5x,
            'group6' => $this->GROUP6x,
            'thisMonth' => $this->THISMONTHx,
            'lastMonth' => $this->LASTMONTHx,
            'tmLmVariance' => $this->TM_LM_VARIANCEx,
            'mtdAvgDailyBalance' => $this->MTD_AVG_DAILYBALANCEx,
            'ytdAvgDailyBalance' => $this->YTD_AVG_DAILYBALANCEx,
            'budget' => $this->BUDGETx,
            'tmBudgetVariance' => $this->TM_BUDGET_VARIANCEx,
            'sameMonthLastYear' => $this->SAMEMONTH_LASTYEARx,
            'yearEndLastYear' => $this->YEAREND_LASTYEARx,
            'tmYelyVariance' => $this->TM_YELY_VARIANCEx,
            'tmYeleyPercentVariance' => $this->TM_YELEY_PERCENT_VARIANCEx,
            'ytdActualThisMonth' => $this->YTD_ACTUAL_THISMONTHx,
            'brCode' => $this->BR_CODEx,
            'seqNo' => $this->SEQNO
       ];
    }
}
