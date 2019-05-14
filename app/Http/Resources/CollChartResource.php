<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CollChartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'collChartId' => $this->CollChartID,
            'collChartDesc' => $this->CollChartDesc,
            'collChartBrCode' => $this->CollChartBR_CODE,
            'collChartRemarks' => $this->CollChartRemarks
        ];
     }
}
