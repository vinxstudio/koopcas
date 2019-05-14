<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
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
            'imageId' => $this->ImageID,
            'imageBrcode' => $this->ImageBR_CODE,
            'imageClientId' => $this->ClientIDimg,
            'itemId' => $this->ItemID,
            'imageType' => $this->ImageType,
            'imageFileSize' => $this->ImageFileSize,
            'imageFile' => 'data:image/jpg;base64,'.base64_encode($this->ImageFile),
            'imageRemarks' => $this->ImageRemarks
        ];
    }
}
