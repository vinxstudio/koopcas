<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClusterResource extends JsonResource
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
            'clusterId' => $this->ClusterID,
            'clusterDesc' => $this->ClusterDesc,
            'clusterBrCode' => $this->ClusterBR_CODE
        ];
    }
}
