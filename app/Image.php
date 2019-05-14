<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Image extends Model
{
    public static function getAllImagesById($clientId)
    {
        return DB::table('image as i')
                   ->join('client as c', function($join){
                        $join->on('i.ClientIDimg', '=', 'c.ClientID');
                   })
                   ->where('i.ClientIDimg', '=', $clientId)
                   ->get();
    }

    public static function insertImage($imageId,$imageBrCode,$clientIdImg,$itemId,$imageType,$imageFileSize,$imageFile,$imageRemarks,$imageDateTimeAdded)
    {
        return DB::table('image')
        ->insert([
            'ImageID' => $imageId,
            'ImageBR_CODE' => $imageBrCode,
            'ClientIDimg' => $clientIdImg,
            'ItemID' => $itemId,
            'ImageType' => $imageType,
            'ImageFileSize' => $imageFileSize,
            'ImageFile' => $imageFile,
            'ImageRemarks' => $imageRemarks,
            'ImageDateTimeAdded' => $imageDateTimeAdded
        ]);
    }

    public static function updateImage($imageId,$imageBrCode,$itemId,$imageType,$imageFileSize,$imageFile,$imageRemarks,$imageDateTimeAdded)
    {
        return DB::table('image')
        ->where('ImageID','=',$imageId)
        ->where('ImageType','=',$imageType)
        ->update([
            'ImageBR_CODE' => $imageBrCode,
            'ItemID' => $itemId,
            'ImageType' => $imageType,
            'ImageFileSize' => $imageFileSize,
            'ImageFile' => $imageFile,
            'ImageRemarks' => $imageRemarks,
            'ImageDateTimeAdded' => $imageDateTimeAdded
        ]);
    }
}
