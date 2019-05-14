<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OverRideResource extends JsonResource
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
            'id' =>$this->ID,
            'brCode' =>$this->BR_CODE,
            'descr' =>$this->DESCR,
            'userIdFrom' =>$this->USERIDFROM,
            'userIdTo' =>$this->USERIDTO,
            'statusFlag' =>$this->STATUSFLAG,
            'imageFileSize' =>$this->IMAGEFILESIZE,
            'imageFile' =>$this->IMAGEFILE,
            'remarks' =>$this->REMARKS,
            'accessUserName' =>$this->AccessUserName
        ];
    }
}
