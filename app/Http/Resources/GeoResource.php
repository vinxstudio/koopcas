<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GeoResource extends JsonResource
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
            'geoId' => $this->GeoID,
            'geoDesc' => $this->GeoDesc,
            'geoBrCode' => $this->GeoBR_CODE,
            'geoUpdUser' => $this->GeoUpdUser,
            'geoUpdDateTime' => $this->GeoUpdDateTime,
            'geoCollChartId' => $this->GeoCollChartID,
            'collChartDesc' => $this->CollChartDesc,
        ];
    }
}
