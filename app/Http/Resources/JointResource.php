<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JointResource extends JsonResource
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
            'jointsId' => $this->JointsID,
            'jointsBrCode' => $this->JointsBR_CODE,
            'clientIdJoints' => $this->ClientIDJoints,
            'jName' => $this->JName,
            'jDateTimeAdded' => $this->JDateTimeAdded
        ];
    }
}
